let manuBtn = document.getElementById("manuBtn")
let sideNav = document.getElementById("sideNav")
let menu = document.getElementById("menu")
var j = document.getElementsByClassName
sideNav.style.right = "-250px";

manuBtn.onclick = function(){
    if(sideNav.style.right == "-250px"){
        sideNav.style.right = "0";
        menu.src = "IMG/close.png";
    }
    else{
        sideNav.style.right = "-250px";
        menu.src = "IMG/menu.png";
    }
}


var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = "IMG/1.jpg";
images[1] = "IMG/2.jpg";
images[2] = "IMG/3.jpg";
images[3] = "IMG/4.jpg";

// Change Image
function changeImg(){
	document.slide.src = images[i];
	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}
	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;
/************************************************/
// When the user clicks on <div>, open the popup
function myFunction() {
	var popup = document.getElementById("myPopup");
	popup.classList.toggle("show");
  }