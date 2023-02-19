<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    <body>
        
        <?php include '../template/header.php' ?>
        <div class="p-10 px-3 my-5 rounded border-2 w-1/3 flex flex-col self-center m-auto">
        <form class="m-auto text-right" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="act_name">activity name</label></td>
                        <td><input type="text" id="act_name" name="act_name" required>
                    </tr>
        </div>
            <?php 
                $scripts['_extra_script_tags'] = '
                <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
                <script src="script/map.js"></script>';
                includeFile('../template/footer.php', $scripts) 
            ?>
    </body>
</html>