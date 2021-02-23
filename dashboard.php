<h1><a href="dataupload.php">data Upload</a></h1>




<?php

session_start();

require_once('db.php');

if (isset($_SESSION['uname'])) {

  $sql = "SELECT * FROM `tbl_student` ";
  $result = mysqli_query($conn, $sql);

  if ($_SESSION['uname'] == "Admin") {
?>



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





    <table class="table table-dark table-striped">
      <th>Student id</th>
      <th>Student name</th>
      <th>batch</th>
      <th>Semester</th>
      <th>Student roll_no</th>
      <th>contact</th>
      <th>Adress</th>
      <th>Action</th>



      <?php
      while ($row = mysqli_fetch_object($result)) {
      ?>
        <tr>
          <td><?php echo $row->std_id; ?></td>
          <td><?php echo $row->std_name; ?></td>
          <td><?php echo $row->std_year; ?></td>
          <td><?php echo $row->std_sem; ?></td>
          <td><?php echo $row->std_roll; ?></td>
          <td><?php echo $row->std_contact; ?></td>
          <td><?php echo $row->std_adress; ?></td>
          <td>
            <a class="btn btn-success" href="edit-form.php?id=<?php echo $row->std_id; ?>">Edit</a>
            <a class="btn btn-danger" href="delet.php?id=<?php echo $row->std_id; ?>" onClick="return confirm('Are you Sure?');">Delete</a>
          </td>

        </tr>



      <?php }
    } else {
      ?>

      <table class="table table-dark table-striped">
        <th>Student id</th>
        <th>Student name</th>
        <th>batch</th>
        <th>Semester</th>
        <th>Student roll_no</th>
        <th>contact</th>
        <th>Adress</th>




        <?php
        while ($row = mysqli_fetch_object($result)) {
        ?>
          <tr>
            <td><?php echo $row->std_id; ?></td>
            <td><?php echo $row->std_name; ?></td>
            <td><?php echo $row->std_year; ?></td>
            <td><?php echo $row->std_sem; ?></td>
            <td><?php echo $row->std_roll; ?></td>
            <td><?php echo $row->std_contact; ?></td>
            <td><?php echo $row->std_adress; ?></td>


          </tr>


    <?php
        }
      }
    }

    ?>
      </table>

      <br>
      <strong><a href="logout.php">Logout</a></strong>