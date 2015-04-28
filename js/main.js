// Toggle Search Bar in mapping.php

function toggle() {
	
	if (document.getElementById('search-bar').style.display == 'block') {
    	document.getElementById('search-bar').style.display = "none";
		document.getElementById('toggle-text').innerHTML = '<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Refine Search';
	} else {
    	document.getElementById('search-bar').style.display = "block";
		document.getElementById('toggle-text').innerHTML = '<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Hide Search Bar';
	}
}