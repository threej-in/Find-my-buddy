<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    
    <body class="min-h-screen fixed w-full">
        <?php include '../template/header.php' ?>
        <main class="h-[92vh] flex flex-row">
            <aside class="w-1/5 h-full py-5 px-3 bg-slate-800 z-[500] shadow-lg shadow-slate-800 text-white">
                <p class=" text-xs">Showing activities in your region</p>
            </aside>
            <div id="map" class="w-4/5 h-full"></div>
        </main>
        <?php 
            $scripts['_extra_script_tags'] = '
            <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
            <script src="script/map.js"></script>';
            includeFile('../template/footer.php', $scripts) 
        ?>
    </body>
</html>