<?php
    $title = "Rolling Hills Estates: Contact Us";
    include 'includes/header.inc.php';
?>

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Contact a Team Member</h1>
        <p class="lead">Please Complete and Submit a Form</p>
        <!-- Close container -->
    </div>
    <!-- Close jumbotron -->
</div>

<section id="contact">
    <div class="container">
        <form name="contactForm" method="get" onSubmit="return validate_contact_form();" action="contact_submission.php" novalidate>
            <div class="form-group">
                <label for="contact_firstname">First Name</label>
                <input type="text" name="contact_firstname" class="form-control" id="contact_firstname"
                    placeholder="First Name">
                <div id="error_contact_firstname"></div>
            </div>

            <div class="form-group">
                <label for="contact_lastname">Last Name</label>
                <input type="text" name="contact_lastname" class="form-control" id="contact_lastname"
                    placeholder="Last Name">
                <div id="error_contact_lastname"></div>
            </div>

            <div class="form-group">
                <label for="contact_email">Email Address</label>
                <input type="email" name="contact_email" class="form-control" id="contact_email"
                    placeholder="name@example.com">
                <div id="error_contact_email"></div>
            </div>

            <div class="form-group">
                <label for="contact_address">Address</label>
                <input type="text" name="contact_address" class="form-control" id="contact_address"
                    placeholder="1234 Main St">
                <div id="error_contact_address"></div>
            </div>

            <div class="form-group">
                <label for="contact_address2">Address 2</label>
                <input type="text" name="contact_address2" class="form-control" id="contact_address2"
                    placeholder="Apartment, studio, or floor">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contact_city">City</label>
                    <input type="text" name="contact_city" class="form-control" id="contact_city">
                    <div id="error_contact_city"></div>
                </div>

                <div class="form-group col-md-4">
                    <label for="contact_state">State</label>
                    <select id="contact_state" name="contact_state" class="form-control">
                        <option selected>Choose...</option>
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>Arizona</option>
                        <option>Arkansas</option>
                        <option>California</option>
                        <option>Colorado</option>
                        <option>Connecticut</option>
                        <option>Delaware</option>
                        <option>Florida</option>
                        <option>Georgia</option>
                        <option>Hawaii</option>
                        <option>Idaho</option>
                        <option>Illinois</option>
                        <option>Indiana</option>
                        <option>Iowa</option>
                        <option>Kansas</option>
                        <option>Kentucky</option>
                        <option>Louisiana</option>
                        <option>Maine</option>
                        <option>Maryland</option>
                        <option>Massachusetts</option>
                        <option>Michigan</option>
                        <option>Minnesota</option>
                        <option>Mississippi</option>
                        <option>Missouri</option>
                        <option>Montana</option>
                        <option>Nebraska</option>
                        <option>Nevada</option>
                        <option>New Hampshire</option>
                        <option>New Jersey</option>
                        <option>New Mexico</option>
                        <option>New York</option>
                        <option>North Carolina</option>
                        <option>North Dakota</option>
                        <option>Ohio</option>
                        <option>Oklahoma</option>
                        <option>Oregon</option>
                        <option>Pennsylvania</option>
                        <option>Rhode Island</option>
                        <option>South Carolina</option>
                        <option>South Dakota</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Utah</option>
                        <option>Vermont</option>
                        <option>Virginia</option>
                        <option>Washington</option>
                        <option>West Virginia</option>
                        <option>Wisconsin</option>
                        <option>Wyoming</option>
                    </select>
                    <div id="error_contact_state"></div>
                </div>

                <div class="form-group col-md-2">
                    <label for="contact_zip">Zip</label>
                    <input type="text" name="contact_zip" class="form-control" id="contact_zip">
                    <div id="error_contact_zip"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="contact_comments">Questions and/or Comments</label>
                <textarea name="contact_comments" class="form-control" id="contact_comments" rows="3"></textarea>
                <div id="error_contact_comments"></div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name= "contact_norobot" id="contact_norobot">
                    <label class="form-check-label" for="contact_norobot">
                        I'm not a robot
                    </label>
                    <div id="error_contact_norobot"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="contact_submit">Submit</button>
        </form>
        <!-- Close container -->
    </div>
    <!-- Close middle -->
</section>
<script src="js/contactForm.js"></script>

<?php
    include 'includes/footer.inc.php';
?>