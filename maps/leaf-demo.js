
$(document).ready(function () {
	// Set maps
		var map = L.map( 'map', {
		  center: [-2.50, 117.90], // Indonesia
		  //center: [23.795, 120.959], // Taiwan
		  minZoom: 2,
		  //zoom: 8
		  zoom: 4
		})

		L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		  attribution: 'OpenStreetMap',
		  subdomains: ['a', 'b', 'c']
		}).addTo( map )

		var myURL = jQuery( 'script[src$="leaf-demo.js"]' ).attr( 'src' ).replace( 'leaf-demo.js', '' )

		var myIcon = L.icon({
		  iconUrl: myURL + 'images/pin24.png',
		  iconRetinaUrl: myURL + 'images/pin48.png',
		  iconSize: [35, 30],
		  iconAnchor: [9, 21],
		  popupAnchor: [0, -14]
		})

		//for ( var i=0; i < markers.length; ++i )
		//{
		// L.marker( [markers[i].lat, markers[i].lng], {icon: myIcon} )
		//  .bindPopup( '<a href="' + markers[i].url + '" target="_blank">' + markers[i].name + '</a>' )
		//  .addTo( map );
		//}
	
	// Search button to get coordinate
	$('table td button#btn-open-modal-maps').click(function(event) {
		// View modal
		$('#modal-maps-view').modal('show');
		
		// Get div id
		var getRowObj = $(this).parent();
		
		// View longitude and latitude dan juga alamat
	
		var get_alamat = getRowObj.find('div#id-div-alamat-nama').text();
		var get_longitude = getRowObj.find('div#id-div-longitude').text();
		var get_latitude = getRowObj.find('div#id-div-latitude').text();
		
		// Set coordinates
		lat = get_latitude;
		lon = get_longitude;
		
		
		// Masukan alamat baru untuk marker
		//L.marker( [lat, lon], {icon: myIcon} )
		//  .bindPopup("Hasil panen di desa: "+get_alamat)
		//  .addTo( map );
		

		var mymarker = new L.Marker([lat, lon], {icon: myIcon, draggable: true});
		map.addLayer(mymarker);
		
		//// Clear existing marker 
		//if (mymarker != undefined) {
		//	  map.removeLayer(mymarker);
		//};
		
		// View maker
	
		mymarker.bindPopup('<p>Lokasi desa '+get_alamat+'</p>');
		mymarker.openPopup();

		// New map position
		map.setView([lat, lon], 14);
		
		// Refresh maps [sangat penting]
		setTimeout(function() { map.invalidateSize(); }, 100);

			// New map position
			map.setView([lat, lon], 14);
		
			// Refresh maps [sangat penting]
			setTimeout(function() { map.invalidateSize(); }, 100);
		
		
	});
});	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//	// Search button to get coordinate
//	$("#btn-search-location").click(function(){
//		// Ambil input
//		var get_lokasi = $('#input-keword-search').val();
//		
//		if (!get_lokasi.replace(/\s/g, '').length) {
//		  alert('String only contains whitespace (ie. spaces, tabs or line breaks)');
//		}else{
//			
//			
//			
//			// Search coordinates longitude and latitude
//			$.ajax({ 
//				type: 'GET', 
//				url: 'https://nominatim.openstreetmap.org/search?q='+get_lokasi+'&format=json', 
//				data: { get_param: 'value' }, 
//				dataType: 'json',
//				success: function (data) { 
//					// If json file is empty
//					if (data == undefined || data == null || data.length == 0){
//						alert('Lokasi yang anda masukan tidak di temukan.');
//						
//					}else{
//						var count = 0;
//						var get_longitude = "";
//						var get_latitude = "";
//						
//						// Extract json file to get coordinate
//						$.each(data, function(index, element) {
//							get_longitude = element.lon;
//							get_latitude = element.lat;
//							count++;
//						});
//						
//						// If more than one means not vilage/desa
//						if(count == 1){
//							// Set coordinates
//							lat = get_latitude;
//							lon = get_longitude;
//							
//							
//							// Masukan alamat baru untuk marker
//							//L.marker( [lat, lon], {icon: myIcon} )
//							//  .bindPopup("Hasil panen di desa: "+get_lokasi)
//							//  .addTo( map );
//							
//
//							var mymarker = new L.Marker([lat, lon], {icon: myIcon, draggable: true});
//							map.addLayer(mymarker);
//							
//							//// Clear existing marker 
//							//if (mymarker != undefined) {
//							//	  map.removeLayer(mymarker);
//							//};
//							
//							mymarker.bindPopup('<p>Hasil panen di desa: '+get_lokasi+'</p>');
//							mymarker.openPopup();
//
//		 
//							console.log("You clicked the map at LAT: "+ lat+" and LONG: "+lon );
//							
//							
//							// New map position
//							map.setView([lat, lon], 14);
//
//						}else{
//							alert("Lokasi yang anda masukan bukan termasuk desa.");
//						}
//						
//						
//						
//					}
//				
//					
//				}
//			});
//		}
//	});
//    
//});






