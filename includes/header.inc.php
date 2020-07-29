<!-- Start or resume the session -->
<?php
    //session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <title>
    <?php
      echo "$title";
    ?>
  </title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light navColor">
    <a class="navbar-brand" href="#">Rolling Hills Estates</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <!-- Home -->
        <li class="nav-item
          <?php
            if($title == "Rolling Hills Estates: Home"){
              echo "active";
            }
          ?>
        ">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <!-- About -->
        <li class="nav-item
          <?php
            if($title == "Rolling Hills Estates: About Us"){
              echo "active";
            }
          ?>
        ">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <!-- Properties -->
        <li class="nav-item
          <?php
            if($title == "Rolling Hills Estates: Properties"){
              echo "active";
            }
          ?>
        ">
          <a class="nav-link" href="properties.php">Properties</a>
        </li>

        <!-- Contact -->
        <li class="nav-item
          <?php
            if($title == "Rolling Hills Estates: Contact Us"){
              echo "active";
            }
          ?>
        ">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

        <!-- Existing Users Page -->
        <li class="nav-item">
          <a class="nav-link disabled" id="userprofile" href="userhome.php" tabindex="-1" aria-disabled="true">My
            Account</a>
        </li>

        <!-- Welcome the current user -->
        <li>
          <?php
            if(isset($_SESSION['currentUser'])){
              echo "Welcome ".$_SESSION['currentUser'];
            }
          ?>
        </li>

      </ul>

      <!-- Register Modal Trigger -->
      <?php
            if(isset($_SESSION['currentUser'])){
              echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
              Account
            </button>';
            } else {
              echo'<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">
              Register
            </button>';
            }
      ?>

      <!-- Login Modal Trigger -->
      <?php
            if(isset($_SESSION['currentUser'])){
              echo '<a href="includes/logout.inc.php">
              <button type="button" class="btn btn-primary">
              Logout
              </button></a>';
            } else {
              echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
              Login
              </button>';
            }
      ?>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</body>