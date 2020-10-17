/**
* Author: Adeepa Hettiwaththage
* Target: enhancements2.html
* Purpose: Assigmnet 2
* Created: 25/04/2019
* Last updated: 29/04/2019 
* Credits: my tutor: Eureka ,Lecture notes, Lab tasks
*/


//Enhancement#1st 

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  // add a zero in front of numbers<10
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(function(){ startTime() }, 500);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

var myVar;

function myFunction() {
  myVar = setTimeout(alertFunc, 2000);
}

function alertFunc() {
  alert("Welcome to My Enhancement Page!");
}

//Enhancement#2nd

var myWindow;
function openWin() {
  myWindow = window.open("reference.php", "", "width=600 ,height=400");
}

function closeWin() {
  if (myWindow) {
    myWindow.close();
  }
}

function checkWin() {
  msg = ""
  if (!myWindow) {
    msg = "was never opened";
  } else { 
    if (myWindow.closed) { 
      msg = "is closed";
    } else {
      msg = "is open";
    }
  
  }
  document.getElementById("msg").innerHTML = 
  "myWindow " + msg;

  document.getElementById("msg").innerHTML = 
  "Reference Window " + msg;
}

function init(){
	
	document.getElementById("enhancements2").onload= startTime();
	
	var enhancements2 = document.getElementById("enhancements2");
	enhancements2.onclick = myFunction();

	var ow = document.getElementById("ow");
	ow.onclick = openWin;
		
	var cw = document.getElementById("cw");
	cw.onclick = closeWin;
	
	var iw = document.getElementById("iw");
	iw.onclick = checkWin;
		
}
window.onload = init;