

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

    
        var obMapa = {
            center: coord,
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            fullscreenControl: false,
            streetViewControl: false,
            scaleControl: true
        };
        mapa = new google.maps.Map(document.getElementById("mapa"),obMapa);

        var chinchetas = [
            {title: "Mi ubicación", pin:"chinchetared", lat:position.coords.latitude, lng:position.coords.longitude},
            {title: "Recomendación", pin:"chinchetablue", lat:6.343636, lng:-75.5417697}, 
            {title: "Recomendación",pin:"chinchetablue", lat:6.2726533, lng:-75.5874955},
            {title: "Recomendación",pin:"chinchetablue", lat:6.2637094, lng:-75.59813},
            {title: "Recomendación",pin:"chinchetablue", lat:6.2390635, lng:-75.515027},
            {title: "Recomendación",pin:"chinchetablue", lat:6.1680269, lng:-75.623805},
            {title: "Recomendación",pin:"chinchetablue", lat:6.1446859, lng:-75.5619272}
            ];
            var info = [info1,info2,info3,info4,info5,info6];
        var marcador=[];
        var pin;
        var url = "../icon/";
        for( var i = 0; i < chinchetas.length; i++){
            pin = url + chinchetas[i].pin + ".png";
             
            // nuevo marcador
            marcador = new google.maps.Marker({
                    position: new google.maps.LatLng(chinchetas[i].lat, chinchetas[i].lng),
                    map: mapa,
                    title: chinchetas[i].title,
                    icon: pin,
                    animation:google.maps.Animation.DROP
                    
            });	
            
            if(i==0){	
                marcador.addListener('mouseover', zoomIn);
                marcador.addListener('mouseout', zoomOut2)
                }
            else{	
                marcador.addListener('click',info[i-1]);
                marcador.addListener('mouseover', zoomIn);
                marcador.addListener('mouseout', zoomOut)
            }
        
           
        }

}

function zoomIn(){
	var opciones = {
		url: "../icon/chinchetablue2.png",
	} 
	this.setIcon(opciones);
}

function zoomOut(){
	var opciones = {
		url: "../icon/chinchetablue.png",
	} 
	this.setIcon(opciones);
}

function zoomOut2(){
	var opciones = {
		url: "../icon/chinchetared.png",
	} 
	this.setIcon(opciones);
}

function info1(event){
    var contenido =  "<center><img src='../icon/safari.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>Safari Clinica veterinaria</h3>"+
                    "<p>Direccion:"+ "Dg. 59 #32-111, Bello, Antioquia" + "</p>" +
                    "<p>Horario:"+ "Abierto las 24 horas" + "</p>" +
					"Pagina: <a href='http://www.safariclinicaveterinaria.com/' target='_blank'>Safari</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

function info2(event){
    var contenido = "<center><img src='../icon/udea.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>Hospital Veterinario Universidad de Antioquia </h3>"+
                    "<p>Direccion:"+ "Cl. 65c, Medellín, Antioquia" + "</p>" +
                    "<p>Horario:"+ "lunes a sabados 08:00a17:30" + "</p>" +
					"Pagina: <a href='http://www.udea.edu.co/wps/portal/udea/web/inicio/institucional/unidades-academicas/facultades/ciencias-agrarias/hospital-veterinario' target='_blank'>Veterinaria UdeA</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

function info3(event){
    var contenido = "<center><img src='../icon/catdog.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>CatDog Centro Veterinario</h3>"+
                    "<p>Direccion:"+ "Cl. 50 # 81 a 47 segundo piso, Medellín, Antioquia" + "</p>" +
                    "<p>Horario:"+ " Abierto las 24 horas" + "</p>" +
					"Pagina: <a href='https://www.catdog.com.co/' target='_blank'>CatDog</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

function info4(event){
    var contenido = "<center><img src='../icon/remington.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>Clinica Veterinaria Uniremington</h3>"+
                    "<p>Direccion:"+ "Via Medellín-Via Sta. Elena, Medellín, Antioquia" + "</p>" +
                    "<p>Horario:"+ " lunes a sabados 08:00a17:00" + "</p>" +
					"Pagina: <a href='http://www.uniremington.edu.co/' target='_blank'>Veterinaria Remington</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

function info5(event){
    var contenido = "<center><img src='../icon/veteclinica.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>Veterinarias Itagüi - La Vete Clinica</h3>"+
                    "<p>Direccion:"+ "Calle 34 A # 54 - 40 Itagui, Itagüi, Antioquia" + "</p>" +
                    "<p>Horario:"+ "Abierto las 24 horas" + "</p>" +
					"Pagina: <a href='https://www.facebook.com/Lavete24/' target='_blank'>Facebook</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

function info6(event){
    var contenido = "<center><img src='../icon/ces.jpg' style='width:100px;height:60px;'</center>"+
                    "<h3>Centro veterinario CES</h3>"+
                    "<p>Direccion:"+ "Loma Del Escobero, Envigado, Antioquia" + "</p>" +
                    "<p>Horario:"+ "lunes a sabados 08:00a17:00" + "</p>" +
					"Pagina: <a href='https://www.ces.edu.co/centros-de-servicio/centro-de-veterinaria-y-zootecnia-cvz/' target='_blank'>Veterinaria CES</a>" +
					"<br>"
	var opInfo = {
		content: contenido,
		position: event.latLng
	};

	informacion = new google.maps.InfoWindow(opInfo);
	informacion.open(mapa);
}

    
    

	

function error(){
	alert("No se pudo obtener la posición.")
}