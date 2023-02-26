<?php

@session_start();

$count=0;


if ( isset ( $_SESSION['cart'] ) ){
	$cart = $_SESSION['cart'];

	if  ( $cart ) {
		$items = explode(',', $cart);
		$count = count($items);
	}
}

$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
	$login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
	$role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
	$session_id = $_SESSION['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="background-image: url('images/headfoot.png'); background-size:auto;">
    <a class="navbar-brand" href="index.php"><h1>acti<span>UGI</span></h1><div>A glimpse of UGI activities</div></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
				if ($role == 1) : ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="glimpses.php">Glimpses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edstore.php">EdStore</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="aboutus.php">About Us</a>
              <a class="dropdown-item" href="developer.php">Developer Profile</a>
              <a class="dropdown-item" href="blogs.php">Blogs</a>
              <a class="dropdown-item" href="aboutus.php">Terms & Conditions</a>
              <a class="dropdown-item" href="aboutus.php">Privacy Policy</a>
              <a class="dropdown-item" href="aboutus.php">Contact Us</a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" class="text-capitalize" style="color: #3DCFD3;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome, <?php print_r($name); ?>!
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="addtoaccount.php">My Account</a>
              <a class="dropdown-item" href="actian.php">Become an actiAN!</a>
              <a class="dropdown-item" href="logout.php">Sign Out</a>
              
            </div>
        </li>
      </ul>
      
      <form class="form-inline my-1 my-lg-0">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <div class="btn-group mr-1" role="group" aria-label="First group">
              <a href="#" class="btn btn-outline-success">Search</a>  
            </div>
          </form>
      <?php
				endif;
				if ($role == 2) : ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="glimpses.php">Glimpses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edstore.php">EdStore</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="aboutus.php">About Us</a>
              <a class="dropdown-item" href="developer.php">Developer Profile</a>
              <a class="dropdown-item" href="blogs.php">Blogs</a>
              <a class="dropdown-item" href="aboutus.php">Terms & Conditions</a>
              <a class="dropdown-item" href="aboutus.php">Privacy Policy</a>
              <a class="dropdown-item" href="aboutus.php">Contact Us</a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" class="text-capitalize" style="color: #3DCFD3;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome, <?php print_r($name); ?>!
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="addtoaccount.php">My Account</a>
              <a class="dropdown-item" href="actian.php">Become an actiAN!</a>
              <a class="dropdown-item" href="logout.php">Sign Out</a>
              
            </div>
        </li>
      </ul>
      
      <form class="form-inline my-1 my-lg-0">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <div class="btn-group mr-1" role="group" aria-label="First group">
              <a href="#" class="btn btn-outline-success">Search</a>  
            </div>
          </form>
      <?php
				endif;
				if (empty($login)) : ?>
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="loginform.php">Sign In</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="registration.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="glimpses.php">Glimpses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="edstore.php">EdStore</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      More
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="aboutus.php">About Us</a>
                          <a class="dropdown-item" href="developer.php">Developer Profile</a>
                          <a class="dropdown-item" href="blogs.php">Blogs</a>
                          <a class="dropdown-item" href="aboutus.php">Terms & Conditions</a>
                          <a class="dropdown-item" href="aboutus.php">Privacy Policy</a>
                          <a class="dropdown-item" href="aboutus.php">Contact Us</a>
                        </div>
                    </li>
                  </ul>
                  <form class="form-inline my-1 my-lg-0">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <div class="btn-group mr-1" role="group" aria-label="First group">
              <a href="#" class="btn btn-outline-success">Search</a>  
            </div>
            <div class="btn-group mr-1" role="group" aria-label="Second group">
              <a href="actian.php" class="btn btn-outline-primary">actiAN?</a>  
            </div> 
          </form>
                  <?php endif; ?>
        </div>
  </nav>
 
