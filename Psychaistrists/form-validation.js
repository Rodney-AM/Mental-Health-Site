

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

function rcenter_validate(val){
	'use strict';
	var gender = document.getElementById("rcenter");
	var gender_value = document.getElementById("rcenter").value;
	var gender_length = gender_value.length;
	if(!gender_value == "one" || !gender_value == "two" || !gender_value == "three" || !gender_value == "four" || !gender_value == "five")
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