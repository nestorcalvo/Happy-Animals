function change() {
   
  if(document.getElementById("nav-button").value === "☰"){
      document.getElementById("nav-button").value = "🞬";
  }

  else{
      document.getElementById("nav-button").value = "☰";
  }

  $("li").toggle("slow");
 
}