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
                    <li><a href="#" class="nav-link px-2 text-white">Bookmarks</a></li>
                </ul>

                <div class="text-start">
                    <a class="" href="index.php?logout='1'"><button type="button" class="btn btn-outline-light me-2">Log out</button></a>
                </div>
            </div>
        </div>
    </header>

    <div class="add-rec d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a class="" href="#"><button type="button" class="btn btn-outline-dark me-2">Add Recipe</button></a>
    </div>
    <!-- section 2-cards -->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- Cards start -->
                <?php $i = 0;
                while ($i < 15) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tumbnailh</text></svg> -->
                            <img src="images/fruit-basket.svg" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225" focusable="false">
                            <div class="card-body">
                                <p class="fw-bold fs-5"><a href="#" class="nav-link nav-link px-2 text-black">Title</a></p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                <?php $i++;
                } ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>