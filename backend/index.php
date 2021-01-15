<?php
session_start();

require_once '../app/Database.php';

$messages = [];

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $result = $connection->select('users', 'id, email, password', [
        'email' => $email,
    ]);

    $result->execute();

    if ($result->rowCount() === 1) {
        $data = $result->fetch();
        if (password_verify($password, $data['password'])) {
            $_SESSION['email'] = $data['email'];
            $_SESSION['id'] = $data['id'];
            $_SESSION['logged_in'] = true;
            $messages['success'] = "Logged in successfully";

            header('Location: dashboard/dashboard.php');
        }else{
            $messages['warning'] = "Wrong password";
        }
    } else {
        $messages['warning'] = "User not found";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · PHP7Ecom</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">

        <?php include_once 'partials/message.php'; ?>

        <form method="post" action="" enctype="multipart/form-data">
            <img class="mb-4" src="assets/images/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Admin Login</h1>
            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>
    </main>



</body>

</html>