// Toggle Search Bar

function toggle() {
	
	if (document.getElementById('search-bar').style.display == 'block') {
    	document.getElementById('search-bar').style.display = "none";
		document.getElementById('toggle-text').innerHTML = '<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Refine Search';
	} else {
    	document.getElementById('search-bar').style.display = "block";
		document.getElementById('toggle-text').innerHTML = '<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Hide Search Bar';
	}
}

// Instagram-like roatating images display (HOUSING PROPERTIES)

img2 = new Image()

seconds = "1";

function imgOne() {	
	myimg.src = 'photos/' + id + 'a.jpg';
	setTimeout("imgTwo()", seconds * 15000);
}

function imgTwo() {
	myimg.src = 'photos/' + id + 'e.jpg';
	setTimeout("imgThree()", seconds * 15000);
}

function imgThree() {
	myimg.src = 'photos/' + id + 'd.jpg';
	setTimeout("imgOne()", seconds * 15000); //reverts back to first image
}

function imgOne2() {	
	myimg2.src = 'photos/' + id + 'b.jpg';
	setTimeout("imgTwo2()", seconds * 15000);
}

function imgTwo2() {
	myimg2.src = 'photos/' + id + '.jpg';
	setTimeout("imgThree2()", seconds * 15000);
}

function imgThree2() {
	myimg2.src = 'photos/' + id + 'e.jpg';
	setTimeout("imgOne2()", seconds * 15000); //reverts back to first image
}

function imgOne3()
{	
	myimg3.src = 'photos/' + id + '.jpg';
	setTimeout("imgTwo3()", seconds * 15000);
}

function imgTwo3() {
	myimg3.src = 'photos/' + id + 'd.jpg';
	setTimeout("imgThree3()", seconds * 15000);
}

function imgThree3() {
	myimg3.src = 'photos/' + id + 'c.jpg';
	setTimeout("imgOne3()", seconds * 15000); //reverts back to first image
}

function imgOne4() {	
	myimg4.src = 'photos/' + id + 'c.jpg';
	setTimeout("imgTwo4()", seconds * 15000);
}

function imgTwo4() {
	myimg4.src = 'photos/' + id + 'b.jpg';
	setTimeout("imgThree4()", seconds *15000);
}

function imgThree4() {
	myimg4.src = 'photos/' + id + 'a.jpg';
	setTimeout("imgOne4()", seconds * 15000); //reverts back to first image
}

function imgOne5() {	
	myimg5.src = 'photos/' + id + 'd.jpg';
	setTimeout("imgTwo5()", seconds * 15000);
}

function imgTwo5() {
	myimg5.src = 'photos/' + id + 'a.jpg';
	setTimeout("imgThree5()", seconds * 15000);
}

function imgThree5() {
	myimg5.src = 'photos/' + id + '.jpg';
	setTimeout("imgOne5()", seconds * 15000); //reverts back to first image
}