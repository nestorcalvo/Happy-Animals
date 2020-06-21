window.onload = function(position){
	if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(indicarPosicion,error,geo_options);
        var geo_options={enableHightAccuracy: true, timeout:10000, maximage:1000};
        
        const watcher = navigator.geolocation.watchPosition(indicarPosicion);
        setTimeout(() => {navigator.geolocation.clearWatch(watcher);}, 5000);
	}
}

var mapa;

function indicarPosicion(position){
    var pos = document.getElementById("ubicacion");
    var datos='';

    datos+='Latitud: '+position.coords.latitude+'&nbsp&nbsp&nbsp';
    datos+='Longitud: '+position.coords.longitude+'&nbsp&nbsp&nbsp';
    datos+='Exactitud: '+position.coords.accuracy+' metros.<br>';

	pos.innerHTML = datos;
    var coord = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    //var coord = new google.maps.LatLng(6.2633525, -75.5710481);
   
    console.log(coord);

    var obMapa = {
        center: coord,
        label: "A",
        animation: google.maps.Animation.BOUNCE,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControl: false,
		fullscreenControl: false,
		streetViewControl: false,
		scaleControl: true
	};
    mapa = new google.maps.Map(document.getElementById("mapa"),obMapa);
    
    var opMarcaUser = {
		position: coord,
		title: "user",
		//label: "A",
		//icon: "user.png",
		animation: google.maps.Animation.BOUNCE,
		map: mapa
	};
    var marca = new google.maps.Marker(opMarcaUser);

    
    
    

}

function error(){
	alert("No se pudo obtener la posición.")
}