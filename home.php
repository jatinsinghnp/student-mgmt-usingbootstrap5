<h1> Student management system </h1>






<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title></title>
</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>

<div class="msg">

    <?php
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    session_destroy();
    ?>


</div>


<form action="log_check.php" method="POST" class="form-control">


    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">

        </div>
        <div class="col-auto">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-auto">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>

        </div>


    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>







<div class="mb-3 form-check">
    <a href="register_form.php">Register here</a>

</div>