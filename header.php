<?php
require "dbcon.php";
if (!isset($_SESSION['email'])) {
	header('location:login.php');
}
$result=mysqli_query($con,"select * from user where email='".$_SESSION['email']."'");
?>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>SauravGaming</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <!-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> -->
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" <?php if($active=='home') echo "class='active'"; ?>>Home</a></li>
                        <li><a href="browse.php" <?php if($active=='browse') echo "class='active'"; ?>>Browse</a></li>
                        <li><a href="details.php" <?php if($active=='details') echo "class='active'"; ?>>Details</a></li>
                        <!-- <li><a href="streams.php" <?php if($active=='streams') echo "class='active'"; ?>>Streams</a></li> -->
                        <?php
                        if (!isset($_SESSION['email'])) {
                        ?>
                        <li><a href="signup.php"><i class="fa fa-user"></i> Account</a></li>
                        <?php
                        }else{
                        ?>
                        <li><a href="profile.php" <?php if($active=='profile') echo "class='active'"; ?>>Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                        <?php
                        }
                        ?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

  <!-- ***** Header Area End ***** -->