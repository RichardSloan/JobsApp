<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/flaticon.css">

  <title>JobListers</title>

</head>

<body>

    <div class="header clearfix">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#">
        <img src="" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li><a class="nav-link" href="index.php">Home </a></li>
          <li><a class="nav-link" href="create.php">Create New Listing </a></li>
          <li><a class="nav-link" href="createcategory.php">Manage Categories </a></li>
          <li><a class="nav-link" href="#">Contact </a></li>
        </ul>

        <?php
        if (isset($_SESSION['userId'])) {
          echo ' <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
          </form>';
        } else {
          echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post"> 
            <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username or Email!">
            <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
          </form><button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="signup.php">Sign Up</button>';
        }
        ?>



      </div>
    </nav>
    </div>
    <div class="container">

    <?php displayMessage() ?>