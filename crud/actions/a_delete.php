<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM media WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<!DOCTYPE html>
<html>
<head>
   <title>Successfully Created</title>
   <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
   <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
</head>
<body class='bg-secondary text-white'>";
       echo "<div class='d-flex justify-content-center text-white p-5'>
       <h1>Successfully deleted!</h1>
       </div>";
       echo "<div class='row w-100 d-flex justify-content-center'>
       <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 m-3'>
       <a href='../index.php'><button class='btn btn-primary p-5 w-100' type='button'><h2>Home</h2></button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>