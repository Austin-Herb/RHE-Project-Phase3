<?php
    $title = "Rolling Hills Estates: Home";
    include 'includes/header.inc.php';
    //include 'includes/dbconnect.inc.php';
    //include 'includes/register.inc.php';

    
?>

  <!-- Jumbotron -->
  <div class="jumbotron"
    style="background-image: url(https://images.pexels.com/photos/259280/pexels-photo-259280.jpeg?cs=srgb&dl=agriculture-countryside-crop-259280.jpg&fm=jpg); background-size: 100%; height: 500px; background-repeat: no-repeat;">
    <div class="container">
      <h1 class="display-4">Welcome to Rolling Hills Estates</h1>
      <p class="lead">A proud member of the United Mobile Homes family.</p>
      <!-- Close container -->
    </div>
    <!-- Close jumbotron -->
  </div>

  <!-- Middle container -->
  <div class="middle">
    <div class="container">
      <div class="row">

        <div class="col-sm">
          <img src="images/RHE_sign.png" alt="about">
          <div class="col-head">
            <h3>About Us</h3>
            <!-- Close col-head -->
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi deleniti quidem nisi recusandae maxime
            sapiente veniam consequatur dolores, assumenda, vero, obcaecati perferendis molestiae eius laboriosam rem
            aperiam iste harum earum.</p>
          <div id="more_about" style="text-align:center;">
            <a class="btn btn-large btn-info" href="about.php">More</a>
            <!-- Close more -->
          </div>
          <!-- Close col-sm -->
        </div>

        <div class="col-sm">
          <img src="images/properties.png" alt="properties">
          <div class="col-head">
            <h3>Our Properties</h3>
            <!-- Close col-head -->
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi deleniti quidem nisi recusandae maxime
            sapiente veniam consequatur dolores, assumenda, vero, obcaecati perferendis molestiae eius laboriosam rem
            aperiam iste harum earum.</p>
          <div id="more_properties" style="text-align:center;">
            <a class="btn btn-large btn-info" href="properties.php">More</a>
            <!-- Close more -->
          </div>
          <!-- Close col-sm -->
        </div>

        <div class="col-sm">
          <img src="images/contact.png" alt="contact">
          <div class="col-head">
            <h3>Contact Us</h3>
            <!-- Close col-head -->
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi deleniti quidem nisi recusandae maxime
            sapiente veniam consequatur dolores, assumenda, vero, obcaecati perferendis molestiae eius laboriosam rem
            aperiam iste harum earum.</p>
          <div id="more_contact" style="text-align:center;">
            <a class="btn btn-large btn-info" href="contact.php">More</a>
            <!-- Close more -->
          </div>
          <!-- Close col-sm -->
        </div>
        <!-- Close row -->
      </div>
      <!-- Close container -->
    </div>
    <!-- Close middle -->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

<?php
  include 'includes/footer.inc.php';
?>