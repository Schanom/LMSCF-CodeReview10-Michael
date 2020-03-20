<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Delete Media</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
<div class="d-flex justify-content-center text-white p-5">
<h1>Do you really want to delete this Media?</h1>
</div>
<form action ="actions/a_delete.php" method="post" class="justify-content-center">
   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>">
   <div class="d-flex justify-content-center m-3">
   <button class="btn btn-danger d-flex justify-content-center p-5" type="submit"><h2>Yes, delete it!</h2></button>
   </div>
   <div class="d-flex justify-content-center m-3">
   <a href="index.php"><button class="btn btn-primary d-flex justify-content-center p-5" type="button"><h2>No, go back!</h2></button ></a>
   </div>
</form>

</body>
</html>

<?php
}
?>