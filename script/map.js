//custom marker
const svgIcon = L.divIcon({
    html: `
    <svg width="64px" height="64px" viewBox="0 0 24.00 24.00" fill="none" stroke="#000000">
        <path fill="greenyellow" d="M17 10C17 11.7279 15.0424 14.9907 13.577 17.3543C12.8967 18.4514 12.5566 19 12 19C11.4434 19 11.1033 18.4514 10.423 17.3543C8.95763 14.9907 7 11.7279 7 10C7 7.23858 9.23858 5 12 5C14.7614 5 17 7.23858 17 10Z" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path>
        <path fill="black" d="M14.5 10C14.5 11.3807 13.3807 12.5 12 12.5C10.6193 12.5 9.5 11.3807 9.5 10C9.5 8.61929 10.6193 7.5 12 7.5C13.3807 7.5 14.5 8.61929 14.5 10Z" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path> </g><g id="SVGRepo_iconCarrier"> <path d="M17 10C17 11.7279 15.0424 14.9907 13.577 17.3543C12.8967 18.4514 12.5566 19 12 19C11.4434 19 11.1033 18.4514 10.423 17.3543C8.95763 14.9907 7 11.7279 7 10C7 7.23858 9.23858 5 12 5C14.7614 5 17 7.23858 17 10Z" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14.5 10C14.5 11.3807 13.3807 12.5 12 12.5C10.6193 12.5 9.5 11.3807 9.5 10C9.5 8.61929 10.6193 7.5 12 7.5C13.3807 7.5 14.5 8.61929 14.5 10Z" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>`,
    className: "",
    iconSize:[64, 64],
    iconAnchor: [32, 55],
});

var map = L.map('map',{
    maxZoom: 25,
    minZoom: 3,
    zoomControl: false
});

map.setView([1,1], 3)

L.control.zoom({
    position: 'bottomright'
}).addTo(map);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// onclick event
var clickMarker = L.marker([0,0]).addTo(map);
map.on('click', e=>{
    map.removeLayer(clickMarker);
    clickMarker = L.marker(e.latlng, {draggable: true, autoPan: true}).addTo(map);
    clickMarker.bindPopup(
        `<button 
            class=" drop-shadow-md shadow-black text-amber-600" 
            onClick="document.querySelector('div#newPlace').style.display='block'"
        >Add a missing place</button>`
    ).openPopup()
})
function newPlaceForm(){
    
}

//get user location
navigator.geolocation.watchPosition(success, error);
function success(pos){
    let lat = pos.coords.latitude;
    let long = pos.coords.longitude;
    let accuracy = pos.coords.accuracy
    let marker = L.marker([lat, long], {icon: svgIcon, title: 'You are here'}).addTo(map)
    let circle = L.circle([lat, long], {radius: accuracy}).addTo(map)

    map.flyToBounds(circle.getBounds(), {maxZoom: 13})
}

function error(err){
    if(err.code === 1){
        alert('Please allow access to your location for better results');
    }else{
        alert('Unable to get your location.')
        console.error(err);
    }
}