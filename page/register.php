<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    <head>
    <base href="/find-my-buddy/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Find my buddy</title>

    <!-- leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <?php print_r($_extra_head_tags ?? '') ?>
</head>
    <body>
        <?php include '../template/header.php' ?>
            <div class="p-2 w-1/2 flex flex-col self-center m-auto">
                <h2 class="text-center font-bold m-4 text-lg">Registration Form</h2>
                <form class="flex flex-col gap-2">
                    <table>
                        <tr>
                            <td><label for="username">user name:</label></td>
                            <td><input type="text" id="username" name="username" required></td>
                        </tr>
                        <!-- <tr>
                            <td><label for="aadharno">AADHAR NO:</label></td>
                            <td><input type="text" id="aadharno" name="aadharno" required></td>
                        </tr> -->
                        <tr>
                            <td><label for="email">email id:</label></td>
                            <td><input type="email" id="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="mobno">mobile no:</label></td>
                            <td><input type="text" id="mobno" name="mobno" required></td>
                        </tr>
                        <tr>
                            <td><label for="gender">gender:</label></td>
                            <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> Female
                            <input type="radio" name="gender" value="other"> Others
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">date of birth:</label></td>
                            <td><input type="date" name="dob" value="dob"></td>
                        </tr>
                        <tr>
                            <td><label for="favsub">favourite subject:</label></td>
                            <td><input type="text" id="favsub" name="favsub" required></td>
                        </tr>
                        <tr>
                            <td><label for="skills">skills:</label></td>
                            <td><input type="text" id="skills" name="skills" required></td> 
                        </tr>
                        <tr>
                            <td><label for="password">password:</label></td>
                            <td><input type="password" id="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><label for="cfn_pwd">confirm password:</label></td>
                            <td><input type="password" id="cfn_pwd" name="cfn_pwd" required></td>
                        </tr>
                            <!-- <label for="ratings">Ratings:</label>
                    <input type="number" id="ratings" name="ratings" required>  --> 
                    </table>       
                </form>
            </div>
            <?php 
                $scripts['_extra_script_tags'] = '
                <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
                <script src="script/map.js"></script>';
                includeFile('../template/footer.php', $scripts) 
            ?>
    </body>
</html>