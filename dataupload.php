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




<form action="upload.php" method="POST">

    <div class="col-auto">
        <label for="exampleInputEmail1" class="form-label">Nameofstudent:- </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="col-auto">

        <label for="year" class="form-label">year:-</label>
        <input type="text" name="year" class="form-control">

    </div>
    <div class="col-auto">
        <label for="sem" class="form-label">sem:-</label>


        <select name="sem">
            <option value="1stsem">1stsem</option>
            <option value="2ndsem">2ndsem</option>
            <option value="3rdsem">3rdsem</option>
            <option value="4thsem">4thsem</option>
            <option value="5thsem">5thsem</option>
            <option value="6thsem">6thsem</option>


        </select>

    </div>
    <div class="col-auto">
        <label for="rollno" class="form-label">Rollno:-</label>
        <input type="text" name="roll" class="form-control">

    </div>
    <div class="col-auto">
        <label for="contact" class="form-label">contact:-</label>
        <input type="text" name="contact" class="form-control">

    </div>
    <div class="col-auto">
        <label for="adress" class="form-label">adress:-</label>
        <td> <input type="text" name="adress" class="form-control"></td>
    </div>

    <div class="col-auto">


        <td> <input type="submit" name="submit"></td>

    </div>





</form>


<nav aria-label="...">
    <ul class="pagination justify-content-end">


        <li class="page-item">
            <a href="dashboard.php" class="btn btn-light">BACK</a>
        </li>
    </ul>
</nav>