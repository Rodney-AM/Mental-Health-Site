

function pass_validate(){
	'use strict';
	var pass = document.getElementById("password");
	var pass_value = document.getElementById("password").value;
	var pass_length = pass_value.length;
	if(pass_length < 6)
	{
		document.getElementById('pass_err').innerHTML = 'Password must not less than 6 characters.';
		document.getElementById('pass_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('pass_err').innerHTML = 'Your Password is Valid';
		document.getElementById('pass_err').style.color = "#00AF33";
		// return true;
	}
}
function cpass_validate(){
	'use strict';
	var cpass = document.getElementById("cpassword");
	var cpass_value = document.getElementById("cpassword").value;
	var cpass_length = cpass_value.length;
	var pass = document.getElementById("password");
	var pass_value = document.getElementById("password").value;
	var pass_length = pass_value.length;
	if(cpass_length < 6)
	{
		document.getElementById('cpass_err').innerHTML = 'Confirmed Password must not less than 6 characters.';
		document.getElementById('cpass_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		if (pass_value == cpass_value) {
		document.getElementById('cpass_err').innerHTML = 'Your Confirmed Password is Valid and match';
		document.getElementById('cpass_err').style.color = "#00AF33";
		// return true;
	}
	else{
		document.getElementById('cpass_err').innerHTML = 'Confirmed Password does not match yor password.';
		document.getElementById('cpass_err').style.color = "#FF0000";
		
	}
	}
}
function gender_validation(val){
	'use strict';
	var gender = document.getElementById("gender");
	var gender_value = document.getElementById("gender").value;
	var gender_length = gender_value.length;
	if(!gender_value == "male" || !gender_value == "female")
	{
		document.getElementById('gender_err').innerHTML = 'You must Select Either Male or Female for your gender.';
		document.getElementById('gender_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('gender_err').innerHTML = 'Your Gender is Valid';
		document.getElementById('gender_err').style.color = "#00AF33";
		// return true;
	}
}
function uname_validate(){
		'use strict';
	var names = document.getElementById("username");
	var names_value = names.value;
	var names_length = names_value.length;
	var letters = /^[A-Za-z]+$/;

	if (names_length < 3 || names_length > 8 ||
		!names_value.match(letters)) {
		document.getElementById("uname_err").innerHTML =
	"User name must atleast 3 characters long but less 8 characters";
	document.getElementById("uname_err").style.color = "#FF0000";
	names.focus();
}
else{
	document.getElementById("uname_err").innerHTML = "User name is valid";
	document.getElementById("uname_err").style.color = "#00AF33";
}
}
function email_validate(){
	var email = document.getElementById("email");
	var email_value = email.value;
	var email_length = email_value.length;
	var email_str = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var em_str = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (email_value.match(email_str)) {
		document.getElementById("email_err").innerHTML = "Email is valid";
		document.getElementById("email_err").style.color = "#00AF33";
	}

	else{

		document.getElementById("email_err").innerHTML = "Please input the correct email format";
		document.getElementById("email_err").style.color = "#FF0000";
	}
}
function fname_validate() {
	'use strict';
	var names = document.getElementById("fname");
	var names_value = names.value;
	var names_length = names_value.length;
	var letters = /^[A-Za-z]+$/;

	if (names_length < 3 || names_length > 12 ||
		!names_value.match(letters)) {
		document.getElementById("fname_err").innerHTML =
	"First name must atleast 3 characters long but less 12 characters";
	document.getElementById("fname_err").style.color = "#FF0000";
	names.focus();
}
else{
	document.getElementById("fname_err").innerHTML = "First name is valid";
	document.getElementById("fname_err").style.color = "#00AF33";
}

}

function lname_validate() {
	'use strict';
	var names = document.getElementById("lname");
	var names_value = names.value;
	var names_length = names_value.length;
	var letters = /^[A-Za-z]+$/;

	if (names_length < 4 || names_length > 15 ||
		!names_value.match(letters)) {
		document.getElementById("lname_err").innerHTML =
	"Last name must atleast 4 characters long but less 15 characters";
	document.getElementById("lname_err").style.color = "#FF0000";
	names.focus();
}
else{
	document.getElementById("lname_err").innerHTML = "Last name is valid";
	document.getElementById("lname_err").style.color = "#00AF33";

}
}
function phone_validate() {
	'use strict';
	var names = document.getElementById("contact");
	var names_value = names.value;
	var names_length = names_value.length;
	var numbers = /[0-9]/g;
	if (names_value.match(numbers)) {
		if (names_length < 10 ) {

			document.getElementById("phone_err").innerHTML = "Phone Number cannot be less than 10";
			document.getElementById("phone_err").style.color = "#FF0000";

		}
		else if (names_length > 14 ) {

			document.getElementById("phone_err").innerHTML = "Phone Number cannot be greater 14";
			document.getElementById("phone_err").style.color = "#FF0000";

		}
		else{
			document.getElementById("phone_err").innerHTML = "Phone number is valid";
			document.getElementById("phone_err").style.color = "#00AF33";
		}
	}
	else{

		document.getElementById("phone_err").innerHTML = "Phone Number only contains numbers";
		document.getElementById("phone_err").style.color = "#FF0000";

		document.getElementById("contact").value = "";
		setTimeout(function(){
			document.getElementById("phone_err").innerHTML = "Enter only numbers";
		}, 4000);


	}
// return true;	

}

function ValidateDOB() {
	var lblError = document.getElementById("dob_err");

        //Get the date from the TextBox.
        var date = document.getElementById("dob").value;
        var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

        if (month.length < 2) {
        	month = '0' + month;
        }
        if (day.length < 2) {
        	day = '0' + day;
        }

        var dateString = [day, month, year].join('/');
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
        	var parts = dateString.split("/");
        	var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
        	var dtCurrent = new Date();
        	lblError.innerHTML = "Date of birth should be between 01/01/1990 and 01/01/2008."
        	document.getElementById('dob_err').style.color = "#FF0000";
        	if (dtDOB.getFullYear() < 1990) {
        		lblError.innerHTML = "You are too old to join school since your date of birth is below 01/01/1990"
        		document.getElementById('dob_err').style.color = "#FF0000";
        		return false;
        	}
        	if (dtDOB.getFullYear() > 2008) {
        		lblError.innerHTML = "You are too young to join school since your date of birth is above 01/01/2008"
        		document.getElementById('dob_err').style.color = "#FF0000";
        		return false;
        	}

        	if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {

        		if (dtCurrent.getMonth() < dtDOB.getMonth()) {
        			return false;
        		}
        		if (dtCurrent.getMonth() == dtDOB.getMonth()) {
        			if (dtCurrent.getDate() < dtDOB.getDate()) {
        				return false;
        			}
        		}
        	}
        	lblError.innerHTML = "Date of birth is Valid";
        	document.getElementById('dob_err').style.color = "#00AF33";
        	return true;
        } else {
        	lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
        	document.getElementById('dob_err').style.color = "#FF0000";
        	return false;
        }
    }

    function rcenter_validate(val){
	'use strict';
	var rcenter = document.getElementById("rcenter");
	var rcenter_value = document.getElementById("rcenter").value;
	var rcenter_length = rcenter_value.length;
	if(!rcenter_value == "one" || !rcenter_value == "two" || !rcenter_value == "three" || !rcenter_value == "four" 
		|| !rcenter_value == "five")
	{
		document.getElementById('rcenter_err').innerHTML = 'You must Select Either of the listed Rehab Centers.';
		document.getElementById('rcenter_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('rcenter_err').innerHTML = 'Your Rehab Center is Valid';
		document.getElementById('rcenter_err').style.color = "#00AF33";
		// return true;
	}
}

function name_validate() {
	'use strict';
	var names = document.getElementById("names");
	var names_value = names.value;
	var names_length = names_value.length;
	var letters = /^[A-Za-z]+$/;

	if (names_length < 6 || names_length > 35 ||
		!names_value.match(letters)) {
		document.getElementById("name_err").innerHTML =
	"Full names must atleast 6 characters long but less 35 characters";
	document.getElementById("name_err").style.color = "#FF0000";
	names.focus();
}
else{
	document.getElementById("name_err").innerHTML = "Names are valid";
	document.getElementById("name_err").style.color = "#00AF33";
}

}

function expertise_validate() {
	'use strict';
	var expertise = document.getElementById("expertise");
	var expertise_value = expertise.value;
	var expertise_length = expertise_value.length;
	var letters = /^[A-Za-z]+$/;

	if (expertise_length < 5 || expertise_length > 12 ||
		!expertise_value.match(letters)) {
		document.getElementById("expertise_err").innerHTML =
	"Expertise must atleast be 5 characters long but less 12 characters";
	document.getElementById("expertise_err").style.color = "#FF0000";
	expertise.focus();
}
else{
	document.getElementById("expertise_err").innerHTML = "Expertise is valid";
	document.getElementById("expertise_err").style.color = "#00AF33";
}

}

function location_validate() {
	'use strict';
	var location = document.getElementById("location");
	var location_value = location.value;
	var location_length = location_value.length;
	var letters = /^[A-Za-z]+$/;

	if (location_length < 5 || location_length > 20 ||
		!location_value.match(letters)) {
		document.getElementById("location_err").innerHTML =
	"Location must atleast be 5 characters long but less 20 characters";
	document.getElementById("location_err").style.color = "#FF0000";
	location.focus();
}
else{
	document.getElementById("location_err").innerHTML = "Location is valid";
	document.getElementById("location_err").style.color = "#00AF33";
}

}

function concern_validate() {
	'use strict';
	var concern = document.getElementById("concern");
	var concern_value = concern.value;
	var concern_length = concern_value.length;
	var letters = /^[A-Za-z]+$/;

	if (concern_length < 10 || concern_length > 30 ||
		!concern_value.match(letters)) {
		document.getElementById("concern_err").innerHTML =
	"Concern must atleast be 10 characters long but less 30 characters";
	document.getElementById("concern_err").style.color = "#FF0000";
	concern.focus();
}
else{
	document.getElementById("concern_err").innerHTML = "Concern is valid";
	document.getElementById("concern_err").style.color = "#00AF33";
}

}

function dor_validate(val){
	'use strict';
	var dor = document.getElementById("dor");
	var dor_value = document.getElementById("dor").value;
	var dor_length = dor_value.length;
	if(!dor_value == "Bushenyi" || !dor_value == "Mbarara" || !dor_value == "Isingiro" 
		|| !dor_value == "Masaka" || !dor_value == "Fortportal" || !dor_value == "Gulu" 
		|| !dor_value == "Kitgum" || !dor_value == "Arua" || !dor_value == "Kasese" 
		|| !dor_value == "Sheema" || !dor_value == "Mukono" || !dor_value == "Mitooma" 
		|| !dor_value == "Ntungamo")
	{
		document.getElementById('dor_err').innerHTML = 'You must Select Either of the listed Districts.';
		document.getElementById('dor_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('dor_err').innerHTML = 'Your District of residence is Valid';
		document.getElementById('dor_err').style.color = "#00AF33";
		// return true;
	}
}

function age_validate(val){
	'use strict';
	var age = document.getElementById("age");
	var age_value = document.getElementById("age").value;
	var age_length = age_value.length;
	if(!age_value == "12-17years" || !age_value == "18-24years" || !age_value == "25-36years" 
		|| !age_value == "37-45years" || !age_value == "46years_and_above")
	{
		document.getElementById('age_err').innerHTML = 'You must Select Either of the listed age range.';
		document.getElementById('age_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('age_err').innerHTML = 'Your age is Valid';
		document.getElementById('age_err').style.color = "#00AF33";
		// return true;
	}
}

function dol_validate(val){
	'use strict';
	var dol = document.getElementById("dol");
	var dol_value = document.getElementById("dol").value;
	var dol_length = dol_value.length;
	if(!dol_value == "Bushenyi" || !dol_value == "Mbarara" || !dol_value == "Isingiro" 
		|| !dol_value == "Masaka" || !dol_value == "Fortportal" || !dol_value == "Gulu" 
		|| !dol_value == "Kitgum" || !dol_value == "Arua" || !dol_value == "Kasese" 
		|| !dol_value == "Sheema" || !dol_value == "Mukono" || !dol_value == "Mitooma" 
		|| !dol_value == "Ntungamo")
	{
		document.getElementById('dol_err').innerHTML = 'You must Select Either of the listed Districts.';
		document.getElementById('dol_err').style.color = "#FF0000";
		// return false;
	}
	else
	{
		document.getElementById('dol_err').innerHTML = 'Your District of location is Valid';
		document.getElementById('dol_err').style.color = "#00AF33";
		// return true;
	}
}

function rname_validate() {
	'use strict';
	var names = document.getElementById("names");
	var names_value = names.value;
	var names_length = names_value.length;
	var letters = /^[A-Za-z]+$/;

	if (names_length < 6 || names_length > 50 ||
		!names_value.match(letters)) {
		document.getElementById("rname_err").innerHTML =
	"Rehab Center name must be atleast 6 characters long but less 50 characters";
	document.getElementById("rname_err").style.color = "#FF0000";
	names.focus();
}
else{
	document.getElementById("rname_err").innerHTML = "Rehab Center name valid";
	document.getElementById("rname_err").style.color = "#00AF33";
}

}