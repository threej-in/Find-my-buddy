<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        <?php include '../template/header.php' ?>
            <div class="py-4 px-3 my-5 rounded border-2 w-1/2 flex flex-col self-center m-auto">                
                <form method='post' enctype="multipart/form-data" class="m-auto text-right">
                <table>
                                        <tr>
                                            <td>
                                                <label>enter otp:</label>
                                            </td>
                                            <td>
                                                <input type="text" id="txtotp" name="txtotp">
                                            </td>
                                            <td>
                                            <button class=" cursor-pointer w-full rounded-md py-1 bg-sky-600 text-white" name="btnotpGen" id="btnotpGen" >Resend OTP</button>
                                            </td>
                                            <td>
                                            <button class=" cursor-pointer w-full rounded-md py-1 bg-sky-600 text-white" name="btnotpSubmit" id="btnotpSubmit" >Submit OTP</button>
                                            </td>
                                        </tr>
                                    </table>
                </form>
            </div>
            <?php 
                $scripts['_extra_script_tags'] = '
                <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
                <script src="script/map.js"></script>';
                global $connection;
                $connection=new mysqli("localhost","root","");
                $connection->select_db("find_my_buddy");
                if(isset($connection->connection_error)){
                    die("Connection faild...".$con->connect_error."<br/>");        
                }else{                    
                   //echo"Connection Successful.!<br/>";
                }        
                $otp = md5($_GET['emailId']);   
                    // Send OTP to user's email address                                
                    $to = $_GET['emailId'];
                    $subject = "Your OTP";
                    $message = "Your OTP is " . $otp;
                    try{
                        echo mail($to, $subject, $message);
                    }                                                              
                    catch(Exception $e){
                        echo 'Message: ' .$e->getMessage();
                    }                     
                if(isset($_POST['btnotpGen'])){
                    $otp = md5($_GET['emailId']);   
                    // Send OTP to user's email address                                
                    $to = $_GET['emailId'];
                    $subject = "Your OTP";
                    $message = "Your OTP is " . $otp;
                    try{
                        echo mail($to, $subject, $message);
                    }                                                              
                    catch(Exception $e){
                        echo 'Message: ' .$e->getMessage();
                    }                                                                  
               }
               if(isset($_POST['btnotpSubmit'])){
                //echo $otp;
                    if($_POST['txtotp']==md5($_GET['emailId'])){
                        echo "matched";
                        $username=$_GET['userName'];
                        $emailid=$_GET['emailId'];
                        $gender=$_GET['gender'];
                        $dob=$_GET['dob'];
                        $pass=$_GET['pass'];
                        $main_q="INSERT INTO buddy_master(buddy_name,Gender,DOB,password) VALUES('$username','$gender','$dob','$pass')";
                        $qryReturn=$connection->query($main_q);
                        if($qryReturn == true){                    
                            echo"<script>alert('Budyy Registered sucessfully...')</script>";
                        }
                        else{
                            echo "<script>alert('Something went wrong'".$con->error.")</script>";
                        }
                    }
                    else{
                        echo "<script>alert('not matched.')</script>";
                    }    
                }                   
                            
            
                
                    
                    /**$userName=$_POST['username'];
                    $aadharNo=$_POST['aadharno'];
                    $emailId=$_POST['email'];
                    $mobno=$_POST['mobno'];
                    $gender=$_POST['gender'];
                    $dob=$_POST['dob'];
                    $add=$_POST['txtadd'];
                    $favsub=$_POST['favsub'];
                    $skill=$_POST['skills'];
                    $key='mykey';
                    $pass=hash_hmac('sha256',$_POST['password'],$key);
                    //$pass=md5($_POST['password']);
                    $cnfpass=hash_hmac('sha256',$_POST['cfn_pwd'],$key);
                    //$cnfpass=md5($_POST['cfn_pwd']);                    
                    if($cnfpass!=$pass){
                        echo "<script>alert('please enter password and confirm password as same.')</script>";                        
                    }else{
                    **/
                
                includeFile('../template/footer.php', $scripts) 
                
            ?>
    </body>
</html>