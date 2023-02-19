<?php require '../lib/helper.php' ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../template/head.php' ?>
    
    
    <body class="min-h-screen fixed w-full">
        <?php include '../template/header.php' ?>
        <main class="h-[92vh] flex flex-row">
            <aside class="w-1/5 h-full py-5 px-3 bg-slate-800 z-[500] shadow-lg shadow-slate-800 text-white">
                <p class=" text-xs">Showing list of activities in your region</p>

                <hr class="my-4">

                <select class="w-full bg-gray-800 text-white py-2 cursor-pointer border-b border-gray-500 focus:outline-none" name="" id="">
                    <option value="default">🎲 Activity</option>
                    <option value="Cricket">🏏 Cricket</option>
                    <option value="Football">⚽️ Football</option>
                    <option value="Badminton">🏸 Badminton</option>
                    <option value="Swimming">🏊‍♂️ Swimming</option>
                    <option value="Studying">🧑‍🎓 Studying</option>
                </select>
                <select class="w-full bg-gray-800 text-white py-2 cursor-pointer border-b border-gray-500 focus:outline-none" name="" id="">
                    <option value="default">📌 Region</option>
                    <option value=""></option>
                </select>
            </aside>
            <div id="map" class="w-4/5 h-full"></div>

            <div id="newPlace" class="hidden w-1/3 rounded bg-orange-100 text-gray-600 p-3 shadow-lg shadow-black top-[20%] left-[25%] absolute z-[500]">
                <div class="flex justify-between mb-10">
                    <h4 class=" text-xl font-bold">Add new place</h4>
                    <span onClick="this.parentElement.parentElement.style.display='none'">✖️</span>
                </div>
                <form class="flex flex-col gap-5" onSubmit="newPlace(this); return false;">
                    <section class="grid grid-cols-3">
                        <label for="place_type">type</label>
                        <div class="flex gap-2">
                            <input type="radio" name="place_type" value="library"> Library
                            <input type="radio" name="place_type" value="playground"> Playground
                        </div>
                    </section>
                    <section class="grid grid-cols-3">
                        <label for="place_name">place name</label>
                        <input name="place_name" type="text" placeholder="Name">
                    </section>
                    <section>
                        <button type="submit" class=" cursor-pointer w-full rounded-md py-1 bg-sky-600 text-white">Submit</button>
                    </section>
                </form>
            </div>
        </main>

        <script>
            async function newPlace(form){
                let formdata = new FormData(form)
                formdata.append('lat', clickMarker._latlng.lat);
                formdata.append('lng', clickMarker._latlng.lng);
                
                try {
                    let response = await fetch("api/newplace.php", { 
                        method: "POST",
                        body: formdata
                    });
    
                    let data = await response.json();
                        alert(data.message)
                    
                } catch (error) {
                    console.log(error);
                    
                }

                return false;
            }
        </script>
        <?php 
            $scripts['_extra_script_tags'] = '
            <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
            <script src="script/map.js"></script>';
            includeFile('../template/footer.php', $scripts) 
        ?>
    </body>
</html>