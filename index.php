<?php require 'lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    
    <?php
    $scripts['_extra_head_tags'] = '<link rel="stylesheet" href="buddy.css">';
    includeFile('template/head.php', $scripts) ?>
    <body>
        <?php include 'template/header.php' ?>
        <div class="container">

            <div class="main-content">
                <div class="main-text">
                    <h2>Hey Buddies!</h2>
                    <p><strong>
                    --> Welcome to Find My Buddy, the online platform that helps you connect with people in your local area who share your interests and hobbies.
                    <br><br>
                    --> We understand that finding like-minded individuals can be a challenge, especially if you’re new to an area or have a busy schedule. <br> That’s why we created Find My Buddy – to make it easy for you to find new friends and companions who are nearby and share your passions.
                    <br><br>
                    --> Our platform is simple to use and offers a variety of features that are designed to help you connect with others who share your interests. <br> You can browse through profiles of people in your local area, search for specific interests, and connect with others through our messaging system
                    <br><br>
                    --> At Find My Buddy, we are committed to creating a safe and inclusive community that welcomes people of all backgrounds and interests. <br> Whether you’re looking for a workout partner, a language exchange buddy, or someone to explore the local area with, our platform has got you covered.
                    <br><br>
                    --> Join our community today and start discovering new friendships and connections in your local area!
                    </strong></p>
                    <button>Know More</button>
                </div>
            </div>

            <div class="right">
                <div class="box">
                    <div class="image">
                    </div>
                    <div class="inner-box">
                        <h3>100% Secure Data</h3>
                        <p>We provide Highest Level of Abstraction for your Data.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                    </div>
                    <div class="inner-box">
                        <h3>Buddy at your nearest locality</h3>
                        <p>Find Near and Good Friends.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                    </div>
                    <div class="inner-box">
                        <h3>User Friendly UI</h3>
                        <p>We provide a UI which can easily understandable by a 15yr old kid </p>
                    </div>
                </div>
                <div class="box">
                <div class="inner-box">
                    <h3>Features</h3><br>
                    <ul style="list-style-type: disc">
                        <li>add your favorite place</li>
                        <li>find friends as per your preference</li>
                        <li>use filters to get perfect fit</li>
                        <li>find friends interactively on map</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <?php include 'template/footer.php' ?>
    </body>
</html>