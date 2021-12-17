<?php include('server.php') ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: 1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password_1"] {
            margin-bottom: 1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin input[name="password_2"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .main-header {
            font-family: "Courier New";
        }
    </style>
</head>

<body>

    <main class="form-signin">
        <h1 class=" main-header text-center">Recipe</h1>
        <form method="post" action="register.php">


            <img class="rounded mx-auto d-block" src="images/drawing.svg" alt="" width="100" height="90">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username" value="<?php echo $username; ?>">
                <label for="floatingInput">Username</label>

            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password_1" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password_2" id="floatingPassword" placeholder="Confirm Password">
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <div class="text-danger"><?php include('errors.php'); ?></div>
            <button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="reg_user">Sign Up</button>
            <p>
                Already having an account?
                <a href="login.php">
                    Click here to Log In!
                </a>
            </p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>