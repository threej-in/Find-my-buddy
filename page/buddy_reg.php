<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        <?php include '../template/header.php' ?>
            <div class="py-4 px-3 my-5 rounded border-2 w-1/2 flex flex-col self-center m-auto">
                <h2 class="text-center font-bold m-4 text-lg">REGISTRATION FORM</h2>
                <form method='post' enctype="multipart/form-data" class="m-auto text-right">
                    <table>
                        <tr>
                            <td><label for="username">USER NAME:</label></td>
                            <td><input type="text" id="username" name="username" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">EMAIL ID:</label></td>
                            <td><input type="email" id="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="gender">GENDER:</label></td>
                            <td>
                                <div class="flex gap-2">
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    <input type="radio" name="gender" value="other"> Others
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">DATE OF BIRTH:</label></td>
                            <td class="text-left"><input type="date" name="dob" value="dob"></td>
                        </tr>
                        <tr>
                            <td><label for="password">PASSWORD:</label></td>
                            <td><input type="password" id="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><label for="cfn_pwd">CONFIRM PASSWORD:</label></td>
                            <td><input type="password" id="cfn_pwd" name="cfn_pwd" required></td>
                        </tr>                        
                        <tr>
                            <td colspan="2"><input class=" cursor-pointer w-full rounded-md py-1 bg-sky-600 text-white" type="submit" name="btnSubmit" value="Submit"/></td>
                            <!-- <td><input type="reset" name="btnSubmit" value="Reset"/></td> -->
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
                if(isset($_POST['btnSubmit'])){
                    $userName=$_POST['username'];
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
                    $main_q="INSERT INTO buddy_master(buddy_name,aadhar_no,Gender,DOB,password,Mobile_No,address,fav_subject,skills) VALUES('$userName','$aadharNo','$gender','$dob','$pass','$mobno','$add','$favsub','$skill')";
                $qryReturn=$connection->query($main_q);
                if($qryReturn == true)
                    
                    echo"<script>alert('Budyy Registered sucessfully...')</script>";
                else
                    echo "<script>alert('Something went wrong'".$con->error.")</script>";
                    }
                }
                includeFile('../template/footer.php', $scripts) 
                
            ?>
    </body>
</html>