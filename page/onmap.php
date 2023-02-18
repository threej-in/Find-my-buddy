<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    
    <body>
        <?php include '../template/header.php' ?>
        <div id="map" class="h-screen"></div>
        <?php 
            $scripts['_extra_script_tags'] = '
            <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
            <script src="script/map.js"></script>';
            includeFile('../template/footer.php', $scripts) 
        ?>
    </body>
</html>