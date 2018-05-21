function initialise() {
	// create the map object
	myMap = new L.Map('mapid');

	// create the tile layer with correct attribution
	var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	var osmAttrib='Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
	var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});		

	// start the map on the equator
	myMap.setView(new L.LatLng(51.5074, 0.1277),11);
	myMap.addLayer(osm);  
	
	var brewIcon = L.icon({
		iconUrl: 'hop3.png',
	});	
	

	
	for (item in myData) {
		var marker = L.marker([myData[item].lat,myData[item].long],
			{icon: brewIcon, title: myData[item].brewery_name}).addTo(myMap).bindPopup("Brewery Name:" + myData[item].brewery_name + "<br/>Location:" + myData[item].location + "<br/>Type:" + myData[item].type);
		
		
	}
	
}
