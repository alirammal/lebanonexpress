
<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>USer -registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
        <div class="col-lg-12 col-xl-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <!-- username field -->
                <label for="user_username" class="form-label">Username</label>
                <input type="text" id="user_name" class="form-control"
                placeholder="Enter your username"autocomplete="off"
                required="required" name="user_username"/>
            </div>
            <!-- password field -->
            <div class="form-outline mb-4">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" id="user_password" class="form-control"
                placeholder="Enter your password"
                autocomplete="off" required="required" name="user_password"/>
</div>
            <div class="mt-4 pt-2">
            <input type="submit" value="Login" class="bg-info py-2 px-3 
            border-0" name="user_login">
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? ?<a 
            href="user_registration.php"class="text-danger"> Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>