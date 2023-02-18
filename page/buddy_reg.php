<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        <?php include '../template/header.php' ?>
            <div class="p-2 w-1/2 flex flex-col self-center m-auto">
                <h2 class="text-center font-bold m-4 text-lg">REGISTRATION FORM</h2>
                <form method='post' enctype="multipart/form-data" class="flex flex-col gap-2">
                    <table>
                        <tr>
                            <td><label for="username">USER NAME:</label></td>
                            <td><input type="text" id="username" name="username" required></td>
                        </tr>
                        <tr>
                            <td><label for="aadharno">AADHAR NO:</label></td>
                            <td><input type="text" id="aadharno" name="aadharno" maxlength="12" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">EMAIL ID:</label></td>
                            <td><input type="email" id="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="mobno">MOBILE NO:</label></td>
                            <td><input type="text" id="mobno" name="mobno" maxlegth="10" required></td>
                        </tr>
                        <tr>
                            <td><label for="gender">GENDER:</label></td>
                            <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Others
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">DATE OF BIRTH:</label></td>
                            <td><input type="date" name="dob" value="dob"></td>
                        </tr>
                        <tr>
                            <td><label for="add">Address:</label></td>
                            <td><textarea name="txtadd"></textarea>
                        </tr>
                        <tr>
                            <td><label for="favsub">FAVOURITE SUBJECT:</label></td>
                            <td><input type="text" id="favsub" name="favsub" required></td>
                        </tr>
                        <tr>
                            <td><label for="skills">SKILL:</label></td>
                            <td><input type="text" id="skills" name="skills" required></td> 
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
                            <td><input type="submit" name="btnSubmit" value="Submit"/></td>
                            <td><input type="reset" name="btnSubmit" value="Reset"/></td>
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