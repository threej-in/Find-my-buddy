<?php require 'lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    
    <?php
    $scripts['_extra_head_tags'] = '<link rel="stylesheet" href="buddy.css">';
    includeFile('template/head.php', $scripts) ?>
    <body>
        <?php include 'template/header.php' ?>
        <div class="flex flex-col p-5">

            <div class=" flex flex-row">
                <img class="w-96" src="assets/img/buddy.jpg" alt="">
                <div class="p-10 flex flex-col gap-8">
                    <p> Welcome to Find My Buddy </p>
                    <p> We help you connect with people in your region with similar <b>interests and hobbies.</b></p>
                    <p>We understand that finding like-minded individuals can be a challenge, especially if you’re trying something new.  That’s why we created Find My Buddy – to make it easy for you to find new friends and companions who are nearby and share your passions.</p>
                </div>
            </div>
            <div class=" flex flex-row">
                <div class="p-10 flex flex-col gap-8">
                    <p>Our platform is simple to use and offers a variety of features that are designed to help you find your best fit. </p>
                    <p>You can browse through profiles of people in your local area, search for specific interests, and connect with others through our messaging system</p>
                </div>
                <img class=" w-1/2" src="assets/img/buddy2.jpg" alt="">
            </div>

            <div class="m-20">
                At Find My Buddy, we are committed to creating a safe and inclusive community that welcomes people of all backgrounds and interests.  Whether you’re looking for a workout partner, a language exchange buddy, or someone to explore the local area with, our platform has got you covered. Join our community today and start discovering new friendships and connections in your local area!
            </div>

            
            <div class="p-10 flex flex-col gap-10 text-center">
                <h2 class="font-extrabold text-transparent text-6xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Our Features Include
                </h2>
                <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                "Adding your favorite place"
                </h3>
                <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                "Finding friends as per your preference"
                </h3>
                <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                "Interactive map with live status"
                </h3>
                <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                "Map filters for finding your perfect fit"
                </h3>
            </div>

        </div>
        <?php include 'template/footer.php' ?>
    </body>
</html>