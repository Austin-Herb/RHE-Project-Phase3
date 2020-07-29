$(document).ready(function () {
    $(document).on('click', '#lSubmit', function (e) {
        //stops the submit from functioning normal
        e.preventDefault();

        //Global variables
        // Login Email & Email Error
        var ellEmail = document.getElementById('lEmail');
        var elErrorLEmail = document.getElementById('errorLEmail');

        // Login Password & Password Error
        var ellPassword = document.getElementById('lPassword');
        var elErrorLPassword = document.getElementById('errorLPassword');

        // Default Login Error
        var elError = document.getElementById('lError');

        // Login Submit
        var elSubmit = document.getElementById('lSubmit');

        //Event Listeners
        ellEmail.addEventListener('blur', validateLEmail, false);
        ellPassword.addEventListener('blur', validateLPassword, false);
        elSubmit.addEventListener('click', validateLoginForm, false);


        //Email Validation Function
        function validateLEmail() {
            var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (ellEmail.value == "") {
                elErrorLEmail.innerHTML = "<p class=\"alert alert-danger\">You must enter an email address.</p>";
                return false;
            } else if (!ellEmail.value.match(regEmail)) {
                elErrorLEmail.innerHTML = "<p class=\"alert alert-danger\">You must enter a valid email address.</p>";
                return false;
            } else {
                elErrorLEmail.innerHTML = "";
            }
        }

        // Password Validation Function
        function validateLPassword() {
            var regPassword = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,20}$/;

            if (ellPassword.value == "") {
                elErrorLPassword.innerHTML = "<p class=\"alert alert-danger\">You must enter a password.</p>";
                return false;
            } else {
                elErrorLPassword.innerHTML = "";
            }
        }

        // Login Form Validation Function
        function validateLoginForm() {
            if (ellEmail.value == "" || ellPassword.value == "") {
                elError.innerHTML = "<p class=\"alert alert-danger\">All fields are required!</p>";
                return false;
            } else {
                elError.innerHTML = "";
                $.ajax({
                    url: 'includes/login.inc.php',
                    type: 'POST',
                    data: $('#loginForm').serialize(),
                    success: function (response) {
                        if (response == 'Login successful!') {
                            $('#lSubmit').html('Redirecting...'); //changes the value of the button
                            $('#lError').html('<div class="alert alert-success">' + response + '</div>');
                            setTimeout('window.location.href="index.php";', 4000);
                            document.getElementById('userprofile').disabled = false;
                        } else {
                            $('#lError').fadeIn(1000, function () {
                                $('#lError').html('<div class="alert alert-danger">' + response + '</div>');
                                $('#lSubmit').html('Login');
                            });
                        }
                    }

                }); //end ajax function
                return false;
            }
        }

    }); // end onclick submit
}); //end ready function