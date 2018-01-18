function myMap() {
  var myCenter = new google.maps.LatLng(52.71369850000001,6.887724599999956);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
   var infowindow = new google.maps.InfoWindow({content: "Vaart N.Z. 186 7833 HJ Nieuw Amsterdam"});


	marker.setMap(map);
	infowindow.open(map,marker);


}
