/**
* Author: Adeepa Hettiwaththage
* Target: apply.html
* Purpose: Assigmnet 2
* Created: 19/04/2019
* Last updated: 21/04/2019 
* Credits: my tutor: Eureka ,Lecture notes, Lab tasks
*/

"use strict";

function validate(){
	var errMsg = "";		// stores the error message
	var result = true;		// assumes no errors
	const YEAR_IN_MILLISECS = 365 * 24 * 60 * 60 * 1000; 		

	var firstname = document.getElementById("firstname").value;				// First name
	
	if(firstname==""){
		errMsg += "Firstname cannot be blank\n";
		result = false;
	}
	else if(!firstname.match("^[a-zA-Z]{0,20}$")){
		errMsg += "Your firstname must contain maximum 20 aplha characters\n";
		result = false;
	}
	
	
	var lastname = document.getElementById("lastname").value;				// Last name
	
	if(lastname==""){
		errMsg += "lastname cannot be blank\n";
		result = false;
	}
	else if(!lastname.match("^[a-zA-Z]{0,20}$")){
		errMsg += "Your lastname must contain maximum 20 aplha characters\n";
		result = false;
	}
	
	 
	var male = document.getElementById("male").checked;						// Radio Buttons
	var female = document.getElementById("female").checked;
	if(!(male || female )){
		errMsg+= "Please select your gender\n";
		result = false;
	}
	var Gend = "";
	var gArray = document.getElementsByName("gend");
		for(var index= 0; index< gArray.length; index++){
			if (gArray[index].checked)
				Gend = gArray[index].value;
		}
	var gend = Gend 
	
	var streetaddress = document.getElementById("streetaddress").value;		//Street Address
	
	if(streetaddress==""){
		errMsg += "You must fill your Street Address\n"
		result = false;
	}
	
	
	var subtow = document.getElementById("subtow").value;					//suburb/town
	
	if(subtow==""){
		errMsg += "You must fill your suburb/town\n"
		result = false;
	}


	var email = document.getElementById("email").value;						//Email
	
	if(email==""){
		errMsg += "You must write an email\n"
		result = false;
	}
	else if(!email.match("^[^@\\s]+@[^@\\s]+\\.[^@\\s]+$")){
		errMsg += "Email must be in a correct formate, example@gmail.com\n";
		result = false;
	}


	var phoneno = document.getElementById("phoneno").value;					// Phone number
	
	if(phoneno==""){
		errMsg += "Phone number cannot be blank\n";
		result = false;
	}
	else if(!phoneno.match("[0-9]{8,12}")){
		errMsg += "You must use correct formate to write user phone number\n";
		result = false;
	}
	
	
	var positive = document.getElementById("positive").checked;					//checkboxs
	var communication = document.getElementById("communication").checked;
	var teamwork = document.getElementById("teamwork").checked;
	var thinking = document.getElementById("thinking").checked;
	var planing = document.getElementById("planing").checked;
	var other = document.getElementById("other").checked;
	if(!(positive||communication||teamwork||thinking||planing||other)){
		errMsg+="Please select a skill\n";
		result = false;
	}
	var sArray = document.getElementsByName("skills[]");
	var Skills ="";
		for(var index = 0; index< sArray.length; index++)
		{
			if(sArray[index].checked)
			{
				Skills += sArray[index].value;
				Skills += ", ";
			}
		}
	var skills = Skills 
	
	
	if(document.getElementById("other").checked){								//textarea
		var otherskillstb = document.getElementById("otherskillstb").value;	
		if(otherskillstb==""){
			errMsg+="You must enter your other skills\n";
			result=false;
		}
	}
		

	
	
	
	
	var state = document.getElementById("state").value;						//state	
	
	if(document.getElementById("state").value==""){
		errMsg = errMsg + "You must select a state \n";
		result = false;
	}
	
	
	
	
	var postcode = document.getElementById("postcode").value;				// Postcode
	var length = postcode.length;
	
	if(postcode==""){
		errMsg += "Postcode cannot be blank\n";	
		result = false;
	}
	else if(length!=4){
		errMsg += "Postcode must have 4 digits\n";
		result = false;
	}
	if (!postcode.match("^[0-9]{4}$")){
		errMsg = errMsg + "Your postcode must be a number\n"
		result = false;
	}
	if(postcode>0){
		var SaP = StateandPostcode(state,postcode);
		console.log("SaP="+SaP);
		if(!SaP){
			errMsg += "Postcode must compatible with state\n";
			result= false;
		}
	}
	
		
	var dob = document.getElementById("dob").value;							//Date 
	
	if(dob==""){
		errMsg += "Date of Birth cannot be blank\n";
		result = false;
	}
	else if(!dob.match("(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}")){
		errMsg += "Your Date of Birth must have correct formate dd/mm/yyyy\n";
		result = false;
	}
	
	var age= -1;
	var now = new Date();
	var dobStr = document.getElementById("dob").value;
	var dmy = dobStr.split("/"); 
	var dofb = new Date(dmy[2],dmy[1],dmy[0],0,0,0,0);
	age = (now.valueOf() - dofb.valueOf())/YEAR_IN_MILLISECS; 
	
	if(age < 15){
		errMsg += "You must be at elder than 15 years\n";
		result = false;
	}
	else if(age > 80){
		errMsg += "You must be at younger than 80 years\n";
		result = false;
	}
	if (errMsg != ""){
	var clickme = document.getElementById("display");
	display.innerHTML = errMsg ;
	}
	
	
	if(result){
	storeBooking(firstname,lastname,gend,streetaddress,subtow,email,phoneno,skills,otherskillstb,state,postcode,dob)
	}
	
	return result;
}


function StateandPostcode(state,postcode){									//Comparing state and postcode 
	var result = false;
	var first = postcode.substr(0,1);
	console.log("state = "+state+ " firstDigit="+first);
	switch(state){
		case "vic":
			if(first==3||first==8){
				result =true;
			}
			break;
		case "nsw":
			if(first==1||first==2){
				result =true;

			}
			break;
		case "qld":
			if(first==4||first==9){
				result = true;
			}
			break;
		case "nt":
			if(first==0){
				result = true;
			}
			break;
		case "wa":
			if(first==6){
				result = true;
			}
			break;
		case "sa":
			if(first==5){
				result = true;
			}
			break;
		case "tas":
			if(first==7){
				result = true;
			}
			break;
		case "act":
			if(first==0){
				result = true;
			}
			break;
		
	}
	return result;
	
}


function storeBooking(firstname,lastname,gend,streetaddress,subtow,email,phoneno,skills,otherskillstb,state,postcode,dob){
	
	sessionStorage.firstname = firstname;
	sessionStorage.lastname = lastname;
	sessionStorage.gend = gend;
	sessionStorage.streetaddress = streetaddress;
	sessionStorage.subtow = subtow;
	sessionStorage.email = email;
	sessionStorage.phoneno = phoneno;
	sessionStorage.skills = skills;	
	sessionStorage.otherskillstb = otherskillstb;		
	sessionStorage.state = state;	
	sessionStorage.postcode = postcode;	
	sessionStorage.dob = dob;	
	
}


function prefill_form(){
	if (sessionStorage.firstname!=undefined){
		document.getElementById("firstname").value = sessionStorage.firstname;
		document.getElementById("lastname").value = sessionStorage.lastname;
		document.getElementById("streetaddress").value = sessionStorage.streetaddress;
		document.getElementById("subtow").value = sessionStorage.subtow;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("phoneno").value = sessionStorage.phoneno;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode;
		document.getElementById("dob").value = sessionStorage.dob;
		document.getElementById("otherskillstb").value = sessionStorage.otherskillstb;
		document.getElementsByClassName("gend").value = sessionStorage.gend;
		document.getElementsByName("skills").value = sessionStorage.skills;
			
	}
}



function saveJobRef (jobRefNumber){
	if(typeof(Storage)!=="undefined"){
		localStorage.setItem("jobreferenceno", jobRefNumber);
	}
}


function getJobRef (){
	if(typeof(Storage)!=="undefined"){
		if (localStorage.getItem("jobreferenceno") !== null) {
			var jobreferenceno= document.getElementById("jobreferenceno");
			jobreferenceno.value = localStorage.getItem("jobreferenceno");
		}	
	}
}



function init(){
	if (document.getElementById("applypage")!=null) {
		getJobRef();
		if(debug){
		document.getElementById("appform").onsubmit = validate;	//novalidation
		}
		document.getElementById("appform").onload = prefill_form();
	
		
	}
	else if (document.getElementById("jobspage")!=null) { // jobs page init

		var applylinks=document.getElementsByClassName("applylink");  // array
		for (var i=0; i<applylinks.length; i++)
		applylinks[i].onclick = function () { saveJobRef(this.id); }
	}
	
}
window.onload = init;