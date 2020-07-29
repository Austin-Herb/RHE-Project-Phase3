//Global Variables
var el_contact_firstname = document.getElementById('contact_firstname');
var el_error_contact_firstname = document.getElementById('error_contact_firstname');

var el_contact_lastname = document.getElementById('contact_lastname');
var el_error_contact_lastname = document.getElementById('error_contact_lastname');

var el_contact_email = document.getElementById('contact_email');
var el_error_contact_email = document.getElementById('error_contact_email');

var el_contact_address = document.getElementById('contact_address');
var el_error_contact_address = document.getElementById('error_contact_address');

var el_contact_city = document.getElementById('contact_city');
var el_error_contact_city = document.getElementById('error_contact_city');

var el_contact_zip = document.getElementById('contact_zip');
var el_error_contact_zip = document.getElementById('error_contact_zip');

var el_contact_comments = document.getElementById('contact_comments');
var el_error_contact_comments = document.getElementById('error_contact_comments');

var el_contact_state = document.getElementById('contact_state');
var el_error_contact_state = document.getElementById('error_contact_state');

var el_contact_norobot = document.getElementById('contact_norobot');
var el_error_contact_norobot = document.getElementById('error_contact_norobot');

//Event Listeners
el_contact_firstname.addEventListener('blur', validate_contact_firstname, false);
el_contact_lastname.addEventListener('blur', validate_contact_lastname, false);
el_contact_email.addEventListener('blur', validate_contact_email, false);
el_contact_address.addEventListener('blur', validate_contact_address, false);
el_contact_city.addEventListener('blur', validate_contact_city, false);
el_contact_zip.addEventListener('blur', validate_contact_zip, false);
el_contact_comments.addEventListener('blur', validate_contact_comments, false);


//First Name Validation Function
function validate_contact_firstname() {
    if (el_contact_firstname.value == "") {
        //alert("Missing First Name");
        el_error_contact_firstname.innerHTML = "<p class=\"alert alert-danger\">You must enter a first name.</p>"
        return false;
    } else {
        el_error_contact_firstname.innerHTML = "";
        return true;
    }
}

//Last Name Validation Function
function validate_contact_lastname() {
    if (el_contact_lastname.value == "") {
        //alert("Missing Last Name");
        el_error_contact_lastname.innerHTML = "<p class=\"alert alert-danger\">You must enter a last name.</p>"
        return false;
    } else {
        el_error_contact_lastname.innerHTML = "";
        return true;
    }
}

//Email Validation Function
function validate_contact_email() {
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

    if (el_contact_email.value == "") {
        //alert("Missing Email Address");
        el_error_contact_email.innerHTML = "<p class=\"alert alert-danger\">You must enter a valid Email address.</p>"
        return false;
    } else if (!el_contact_email.value.match(regEmail)) {
        el_error_contact_email.innerHTML = "<p class=\"alert alert-danger\">This is not a valid Email address.</p>"

    } else {

        el_error_contact_email.innerHTML = "";
        return true;
    }
}

//Address Validation Function
function validate_contact_address() {
    if (el_contact_address.value == "") {
        //alert("Missing Address");
        el_error_contact_address.innerHTML = "<p class=\"alert alert-danger\">You must enter an address.</p>"
        return false;
    } else {
        el_error_contact_address.innerHTML = "";
        return true;
    }
}

//City Validation Function
function validate_contact_city() {
    if (el_contact_city.value == "") {
        //alert("Missing City");
        el_error_contact_city.innerHTML = "<p class=\"alert alert-danger\">You must enter a city.</p>"
        return false;
    } else {
        el_error_contact_city.innerHTML = "";
        return true;
    }
}

//Zip Validatin Function
function validate_contact_zip() {
    if (el_contact_zip.value == "") {
        //alert("Missing Zip Code");
        el_error_contact_zip.innerHTML = "<p class=\"alert alert-danger\">You must enter a zip code.</p>"
        return false;
    } else {
        el_error_contact_zip.innerHTML = "";
        return true;
    }
}

//Comment Validation Function
function validate_contact_comments() {
    if (el_contact_comments.value == "") {
        //alert("Missing Comments");
        el_error_contact_comments.innerHTML = "<p class=\"alert alert-danger\">This field cannot be left blank.</p>"
        return false;
    } else {
        el_error_contact_comments.innerHTML = "";
        return true;
    }
}

//State Validation Function
function validate_contact_state() {
    if (el_contact_state.value =="Choose...") {
        el_error_contact_state.innerHTML = "<p class=\"alert alert-danger\">You must select a state.</p>"
        return false;
    } else {
        el_error_contact_state.innerHTML = "";
        return true;
    }
}

//Check Box Validation Function
function validate_contact_norobot() {
    if (!el_contact_norobot.checked) {
        el_error_contact_norobot.innerHTML = "<p class=\"alert alert-danger\">Please verify that you are not a robot.</p>"
        return false;
    } else {
        el_error_contact_norobot.innerHTML = "";
        return true;
    }
}

//Form Validation Function
function validate_contact_form() {
    if (validate_contact_firstname() && validate_contact_lastname() && validate_contact_email() && validate_contact_address() && validate_contact_city() && validate_contact_state() && validate_contact_zip() && validate_contact_comments() && validate_contact_norobot()) {
        return true;
    } else {
        return false;
    }
}