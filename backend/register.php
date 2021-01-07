<?php
session_start();

require_once '../app/Database.php';

$messages = [];

if (isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $username = trim($_POST['username']);
    $mobile_number = trim($_POST['mobile_number']);

    $result = $connection->insert('users', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'mobile_number' => $mobile_number,
        'username' => $username,
    ]);

    if ($result) {
        $messages['success'] = "Data inserted successfully";
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
    <title>Registration · PHP7Ecom</title>

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

        <form action="" method="post" enctype="multipart/form-data">
            <img class="mb-4" src="assets/images/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

            <label for="username" class="visually-hidden">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>

            <label for="mobile_number" class="visually-hidden">Mobile Number</label>
            <input type="phone" id="mobile_number" name="mobile_number" class="form-control" placeholder="Mobile Number" required>


            <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>
    </main>



</body>

</html>