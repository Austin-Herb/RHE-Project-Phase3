$(document).ready(function () {
    $(document).on('click', '#register_submit', function (e) {
        //Stops the submit from functioning normally
        e.preventDefault();

        //Global Variables
        var el_register_firstname = document.getElementById('register_firstname');
        var el_error_register_firstname = document.getElementById('error_register_firstname');

        var el_register_lastname = document.getElementById('register_lastname');
        var el_error_register_lastname = document.getElementById('error_register_lastname');

        var el_register_email = document.getElementById('register_email');
        var el_error_register_email = document.getElementById('error_register_email');

        var el_register_password = document.getElementById('register_password');
        var el_error_register_password = document.getElementById('error_register_password');

        var el_register_confirm_password = document.getElementById('register_confirmPassword');
        var el_error_register_confirm_password = document.getElementById('error_register_confirm_password');

        var el_register_residentApproval = document.getElementById('register_residentApproval');
        var el_error_register_residentApproval = document.getElementById('error_register_residentApproval');

        var el_register_norobot = document.getElementById('register_norobot');
        var el_error_register_norobot = document.getElementById('error_register_norobot');

        var el_error = document.getElementById('register_error');
        var el_submit = document.getElementById('register_submit');

        //Event Listeners
        el_register_firstname.addEventListener('blur', validate_register_firstname, false);
        el_register_lastname.addEventListener('blur', validate_register_lastname, false);
        el_register_email.addEventListener('blur', validate_register_email, false);
        el_register_password.addEventListener('blur', validate_register_password, false);
        el_register_confirm_password.addEventListener('blur', validate_register_confirm_password, false);
        el_register_residentApproval.addEventListener('blur', validate_register_residentApproval, false);
        el_submit.addEventListener('click', validate_register_form, false);

        //First Name Validation Function
        function validate_register_firstname() {
            if (el_register_firstname.value == "") {
                //alert("Missing First Name");
                el_error_register_firstname.innerHTML = "<p class=\"alert alert-danger\">You must enter a first name.</p>"
                return false;
            } else {
                el_error_register_firstname.innerHTML = "";
                return true;
            }
        }

        //Last Name Validation Function
        function validate_register_lastname() {
            if (el_register_lastname.value == "") {
                //alert("Missing Last Name");
                el_error_register_lastname.innerHTML = "<p class=\"alert alert-danger\">You must enter a last name.</p>"
                return false;
            } else {
                el_error_register_lastname.innerHTML = "";
                return true;
            }
        }

        //Email Validation Function
        function validate_register_email() {
            var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

            if (el_register_email.value == "") {
                //alert("Missing Email Address");
                el_error_register_email.innerHTML = "<p class=\"alert alert-danger\">You must enter a valid Email address.</p>"
                return false;
            } else if (!el_register_email.value.match(regEmail)) {
                el_error_register_email.innerHTML = "<p class=\"alert alert-danger\">This is not a valid Email address.</p>"

            } else {

                el_error_register_email.innerHTML = "";
                return true;
            }
        }

        //Password Validation Function
        function validate_register_password() {
            var regPassword = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,20}$/;

            if (el_register_password.value == "") {
                el_error_register_password.innerHTML = "<p class=\"alert alert-danger\">You must enter a password.</p>";
                return false;
            } else {
                el_error_register_password.innerHTML = "";
            }
        }

        //Confirm password validation function
        function validate_register_confirm_password() {
            if (el_register_confirm_password.value == "") {
                el_error_register_confirm_password.innerHTML = "<p class=\"alert alert-danger\">You must enter a confirm password.</p>";
                return false;
            } else if (el_error_register_password.value !== el_register_confirm_password.value) {
                el_error_register_confirm_password.innerHTML = "<p class=\"alert alert-danger\">Confirm password must match password.</p>";
                return false;
            } else {
                el_error_register_confirm_password.innerHTML = "";
            }
        }

        //Resident Approval Validation
        function validate_register_residentApproval() {
            if (el_register_residentApproval.value == "") {
                //alert("Missing Approval Code");
                el_error_register_residentApproval.innerHTML = "<p class=\"alert alert-danger\">You must enter a valid Resident Approval Code.</p>"
                return false;
            } else {
                el_error_register_residentApproval.innerHTML = "";
                return true;
            }
        }

        //Check Box Validation Function
        function validate_register_norobot() {
            if (!el_register_norobot.checked) {
                //alert("Missing Comments");
                el_error_register_norobot.innerHTML = "<p class=\"alert alert-danger\">Please verify that you are not a robot.</p>"
                return false;
            } else {
                el_error_register_norobot.innerHTML = "";
                return true;
            }
        }

        //Register form validation function
        function validate_register_form() {
            if (el_register_firstname.value == "" || el_register_lastname.value == "" || el_register_email.value == "" || el_register_password.value == "" || el_register_confirm_password.value == "" || el_register_residentApproval.value == "") {
                el_error.innerHTML = "<p class=\"alert alert-danger\">All fields are required!</p>";
                return false;
            } else {
                el_error.innerHTML = "";
                $.ajax({
                    url: 'includes/register.inc.php',
                    type: 'POST',
                    data: $('#registerForm').serialize(),
                    success: function (response) {
                        if (response == 'Registration successful!') {
                            $('#register_submit').html('Sending...'); //changes the value of the button
                            $('#register_error').html('<div class="alert alert-success">' + response + '</div>');
                            setTimeout('window.location.href="index.php";', 4000);
                        } else {
                            $('#register_error').fadeIn(1000, function () {
                                $('#register_error').html('<div class="alert alert-danger">' + response + '</div>');
                                $('#register_submit').html('Register');
                            });
                        }
                    }

                }); //end ajax function
                return false;
            }
        }

    }); // end onclick submit
}); //end ready function