<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        <?php include '../template/header.php' ?>
        <div class="p-10 px-3 my-5 rounded border-2 w-1/3 flex flex-col self-center m-auto">
            <form class="m-auto text-right" method="post" enctype="multipart/form-data">
                <table>
                    <tbody>
                        <tr>
                            <td>AADHAR NO:</td>
                            <td><input type="text" id="aadharno" name="aadharno"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD:</td>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class=" cursor-pointer w-full rounded-md py-1 bg-sky-600 text-white" type="submit" name="btnSubmit" value="Login">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    <?php 
        global $connection;
                $connection=new mysqli("localhost","root","");
                $connection->select_db("find_my_buddy");
                if(isset($connection->connection_error)){
                    die("Connection faild...".$con->connect_error."<br/>");        
                }else{
                   //echo"Connection Successful.!<br/>";
                }
                if(isset($_POST['btnSubmit'])){
                    $ano=$_POST['aadharno'];
                    $key='mykey';
                    $pass=hash_hmac('sha256',$_POST['password'],$key);  
                    $main_q="select aadhar_no from buddy_master where aadhar_no='".$ano."' and Password='".$pass."'";
            $qryReturn=$connection->query($main_q);
            //$row = mysqli_fetch_array($qryReturn);
            $count=mysqli_num_rows($qryReturn);
            if($count==0)
                echo"invalid data";
            else{               
                echo"Loged in successfully";  
                //$_SESSION['teamname']=$TeamName;  
//                print_r($_SESSION);
                //echo'<script type="text/javascript">location.href="Player_Select.php?teamname='.$TeamName.'";</script>';
            }
                } 
                $connection->close();

        includeFile('../template/footer.php', $scripts ?? []) 
        
    ?>
    </body>
</html>
