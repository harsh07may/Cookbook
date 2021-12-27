<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'regis');
$username = $_SESSION['username'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// create sql

//$sql = "SELECT rtitle FROM recipe where username='$username'";
$sql = "SELECT rtitle,rCookTimeh,rCookTimem,rintro FROM recipe where username='$username'";
$result = mysqli_query($conn, $sql);

// save to db and check


?>






<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .add-rec {
            margin: 20px;
            margin-left: 100px;
        }
    </style>
</head>
<!-- section 1 navbar -->

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" src="images/drawing.svg" width="50" height="50">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-secondary ">My Recipes</a></li>

                </ul>

                <div class="text-start">
                    <a class="" href="index.php?logout='1'"><button type="button" class="btn btn-outline-light me-2">Log out</button></a>
                </div>
            </div>
        </div>
    </header>

    <div class="add-rec d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a class="" href="add.php"><button type="button" class="btn btn-outline-dark me-2">Add Recipe</button></a>
    </div>
    <!-- section 2-cards -->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- Cards start -->


                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tumbnailh</text></svg> -->
                                <img src="images/fruit-basket.svg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225" focusable="false">
                                <div class="card-body">
                                    <p class="fw-bold fs-5"><a href="#" class="nav-link nav-link px-2 text-black"><?php echo $row["rtitle"] ?></a></p>
                                    <p class="card-text"><?php echo $row["rintro"] ?>.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                        </div>
                                        <small class="text-muted"><?php echo $row["rCookTimeh"] . "h " . $row["rCookTimem"] . "m " ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                <?php
                    }
                } else {
                    echo "You haven't added any Recipes";
                }
                ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>