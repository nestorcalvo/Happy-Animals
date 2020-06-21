window.onload = function(position){
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(indicarPosicion,error);
	}
}

var mapa;

function indicarPosicion(position){
    var pos = document.getElementById("ubicacion");
	pos.innerHTML = position.coords.latitude + ", "+position.coords.longitude;
    var coord = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    console.log(coord);

}