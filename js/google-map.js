//<![CDATA[
	
		var customIcons = {
		  house: {
			icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|00CED1|000000',
			shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
		  },
		  apartment: {
			icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|D2B48C|000000',
			shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
		  },
		  townhome: {
			icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|8080E6|000000',
			shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
		  },
		  "apartment, townhome": {
			icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|D2B48C|000000',
			shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
		  }
		};
	
		function plot_map_data() {
		  var map = new google.maps.Map(document.getElementById("map"), {
			center: new google.maps.LatLng(39.17093, -86.53486),
			zoom: 14,
			mapTypeId: 'roadmap'
		  });

		//Add price range to IW when applicable
		function Real_Price(Price_Two) {
			  
			if (Price_Two !== "") {
				return ' - $' + Price_Two } else {
					return ''
				};
			};

		  var infoWindow = new google.maps.InfoWindow;
			  closeBoxMargin: "12px 4px 2px 2px"
	
	
		  // Change this depending on the name of your PHP file
		  downloadUrl("map.php", function(data) {
			var xml = data.responseXML;
			var markers = xml.documentElement.getElementsByTagName("marker");
			for (var i = 0; i < markers.length; i++) {
			  var page_id = markers[i].getAttribute("page_id");
			  var name = markers[i].getAttribute("name");
			  var id = markers[i].getAttribute("id");
			  var bdrms = markers[i].getAttribute("bdrms");
			  var bath = markers[i].getAttribute("bath");
			  var address = markers[i].getAttribute("address");
			  var type = markers[i].getAttribute("type");
			  var Price = markers[i].getAttribute("Price");
			  var Price_Two = markers[i].getAttribute("Price_Two");
			  var sqft = markers[i].getAttribute("sqft");
			  var floors = markers[i].getAttribute("floors");
			  var property_manager = markers[i].getAttribute("property_manager");
			  var point = new google.maps.LatLng(
				  parseFloat(markers[i].getAttribute("lat")),
				  parseFloat(markers[i].getAttribute("lng")));
			  var html = '<div id="img-container">' + 
			  				'<img src="img/icon-marker.png" class="pad-hor-5" height=10>' +
			  				'<strong>' + address + '<span class="pull-right pad-hor-5"> $' + Price + Real_Price(Price_Two) + '</span>' + "</strong> <br/>" + 
			  				'<img src="photos/' + id + '.jpg" id="gmap-iw-img">' + 
			  				'<div id="iw-overlay">' + 
			  					'<table class="text-center" id="iw-overlay-table">' +
			  						'<tr>' +
			  							'<td class="vert-middle"><p class="no-margin"><strong>Property Manager:<br></strong>' + property_manager + '</p></td>' + 
			  							'<td class="pad-hor-5"><a href="#" onClick="overlayOn()" class="button blue-button pull-right">Contact</a></td>' +
			  						'</tr>' +
			  					'</table>' + 
			  				'</div>' + 
			  			'</div>' +
		  				'<ul class="pad-vert-5 iw-basic-info clearfix">' + 
		  					'<li class="ie-nth-child-odd"><strong>Bedrooms:</strong><br>' + bdrms + '</li>' + 
		  					'<li class="text-center ie-nth-child-even"><strong>Baths:</strong><br>' + bath + '</li>' + 
		  					'<li class="text-right ie-nth-child-odd"><strong>Type:</strong><br>' + type +'</li>' +
		  					'<li class="ie-nth-child-even"><strong>Sqft:</strong><br>' + sqft + '</li>' + 
		  					'<li class="text-center ie-nth-child-odd"><strong>Floors:</strong><br>' + floors + '</li>' +
		  					'<li class="text-right ie-nth-child-even"></li>' +
		  				'</ul>' +
		  				'<a href=property.php?id=' + id  + ' target=_blank class="button blue-button" id="listing-btn"><strong>View Listing</strong></a>' 
			  var icon = customIcons[type] || {}; 
			  var marker = new google.maps.Marker({
				map: map,
				position: point,
				icon: icon.icon,
				shadow: icon.shadow
			  });
			  bindInfoWindow(marker, map, infoWindow, html);
			}
		  });
		}
		
		function bindInfoWindow(marker, map, infoWindow, html) {
		  google.maps.event.addListener(marker, 'click', function() {
			infoWindow.setContent(html);
			infoWindow.open(map, marker);
		  });
		}
	
		function downloadUrl(url, callback) {
		  var request = window.ActiveXObject ?
			  new ActiveXObject('Microsoft.XMLHTTP') :
			  new XMLHttpRequest;
	
		  request.onreadystatechange = function() {
			if (request.readyState == 4) {
			  request.onreadystatechange = doNothing;
			  callback(request, request.status);
			}
		  };
	
		  request.open('GET', url, true);
		  request.send(null);
		}
	
		function doNothing() {}
	
//]]> 
	