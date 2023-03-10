<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        
        <?php include '../template/header.php' ?>
        <div class="flex">
            <img class=" w-96" src="assets/img/cricket.jpg" alt="">
            <div class="p-10 px-3 my-5 rounded border-2 w-1/3 flex flex-col self-center m-auto">
                <form class="m-auto text-right" method="post" enctype="multipart/form-data">
                    <table>
                        <tbody>
                            <tr>
                                <td>email id:</td>
                                <td><input type="email" id="emailid" name="emailid"></td>
                            </tr>
                            <tr>
                                <td>password:</td>
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
                <a href="page/registeration.php">Don't have an account? Register here.</a>
            </div>
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
            $email=$_POST['emailid'];
            $key='mykey';
            $pass=hash_hmac('sha256',$_POST['password'],$key);  
            $main_q="select buddy_email from buddy_master where buddy_email='".$email."' and Password='".$pass."'";
            $qryReturn=$connection->query($main_q);
            $count=mysqli_num_rows($qryReturn);
            if($count==0)
                echo"invalid data";
            else{               
                echo"Loged in successfully";  
            }
        } 
        $connection->close();

        includeFile('../template/footer.php', $scripts ?? []) 
        
    ?>
    </body>
</html>
