<?php
    global $connection;
    $connection=new mysqli("localhost","root","");
    $connection->select_db("find_my_buddy");
    if(isset($connection->connection_error)){
        die("Connection faild...".$connection->connect_error."<br/>");        
    }else{
        //echo"Connection Successful.!<br/>";
    }
        $place_type=$_POST['place_type'];        
        $place_name=$_POST['place_name'];
        $lat=$_POST['lat'];
        $lng=$_POST['lng'];
        $main_q="INSERT INTO place_master(place_name,lattitude,longitude,place_type) VALUES('$place_name',$lat,$lng,'$place_type')";
        $qryReturn=$connection->query($main_q);
        if($qryReturn == true){                    
            print_r(json_encode(["ok"=>'true', "message" => "Place added"]));
        }
        else{
            print_r(json_encode(["ok"=>'false', "message" => "error occurred"]));
        }
?>
