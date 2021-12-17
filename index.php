<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .carousel-control-next,
    .carousel-control-prev

    /*, .carousel-indicators */
      {
      filter: invert(100%);
    }

    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
      width: 100%;
      /* use this, or not */
      margin: auto;
    }

    .main-header {
      font-family: "Courier New";
    }

    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }
  </style>
</head>

<body>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="bi me-2" src="images/drawing.svg" width="50" height="50">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="recipe.php" class="nav-link px-2 text-white">My Recipes</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Bookmarks</a></li>
        </ul>

        <form class="col-12 col-lg-3 mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a class="" href="index.php?logout='1'"><button type="button" class="btn btn-outline-light me-2">Log out</button></a>
        </div>
      </div>
    </div>
  </header>
  <!-- section 2-Carousel-->
  <div class="container">
    <?php if (isset($_SESSION['username'])) : ?>
      <h4 class="py-3 main-header">Welcome <?php echo $_SESSION['username']; ?></h4>
    <?php endif ?>
    <div class="container">
      <h2 class="py-3 text-center main-header">The Cookbook</h2>
      <div class="row py-3">
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner p-5">
              <div class="carousel-item active">
                <img src="images/drink.svg" class="d-block m-auto" width="200p" height="100px" alt="...">
                <div class=" d-none text-dark text-center d-md-block ">
                  <h5>&nbsp&nbsp&nbsp Drinks</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>

              </div>

              <div class="carousel-item">
                <img src="images/fruit-basket.svg" class="d-block m-auto" width="200p" height="100px" alt="...">
                <div class=" d-none text-dark text-center d-md-block ">
                  <h5>Vegetarian</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/meatball.svg" class="d-block m-auto" width="200p" height="100px" alt="...">
                <div class=" d-none text-dark text-center d-md-block ">
                  <h5>Non-Vegetarian</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

    </div>
    <div class="container">
      <h3 class="py-3 main-header text-decoration-underline">Browse</h3>

      <!-- categories -->
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="bi me-2" src="images/fruit-basket.svg" width="140" height="140">
            <h2>Vegetarian</h2>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>

            <h2>Non Vegetarian</h2>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>

            <h2>Drinks</h2>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



      </div>










    </div>
    <!-- section 3-cards -->
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Cards start -->
          <?php $i = 0;
          while ($i < 15) { ?>
            <div class="col"><a href="#" class="nav-link px-2 text-black">
                <div class="card shadow-sm">
                  <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tumbnailh</text></svg> -->
                  <img src="images/fruit-basket.svg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225" focusable="false">
                  <div class="card-body">
                    <p class="fw-bold fs-5"><a href="#" class="nav-link px-2 text-black">Title</p>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- card end -->
          <?php $i++;
          } ?>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>