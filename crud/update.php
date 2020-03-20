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
   <title>Edit User</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">

<fieldset>
   <legend class="d-flex justify-content-center text-white p-5"><h1>Update Media</h1></legend>

   <form action="actions/a_update.php"  method="post">
       <table class="d-flex justify-content-center" cellspacing="0" cellpadding= "0">
        <tbody class="p-3 bg-success">
           <tr>
               <th>Title</th>
               <td><input class="m-3 text-center" type="text"  name="title" placeholder ="Title" value="<?php echo $data['title'] ?>"></td>
           </tr >    
           <tr>
               <th>Cover</th>
               <td><input class="m-3 text-center" type= "text" name="image"  placeholder="Cover" value ="<?php echo $data['image'] ?>"></td >
           </tr>
           <tr>
               <th >Author</th>
               <td><input class="m-3 text-center" type ="text" name= "author" placeholder= "Author" value= "<?php echo $data['author'] ?>"></td>
           </tr>
           <tr>
               <th >ISBN</th>
               <td><input class="m-3 text-center" type ="number" name= "ISBN" placeholder= "ISBN" value= "<?php echo $data['ISBN'] ?>"></td>
           </tr>
           <tr>
               <th >Description</th>
               <td><input class="m-3 text-center" type ="text" name= "short_description" placeholder= "description" value= "<?php echo $data['short_description'] ?>"></td>
           </tr>
           <tr>
               <th >Publish Date</th>
               <td><input class="m-3 text-center" type ="text" name= "publish_date" placeholder= "Publish Date" value= "<?php echo $data['publish_date'] ?>"></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input class="m-3 text-center" type ="text" name= "publisher" placeholder= "Publisher" value= "<?php echo $data['publisher'] ?>"></td>
           </tr>
           <tr>
               <th >Type</th>
               <td><input class="m-3 text-center" type ="text" name= "type" placeholder= "type" value= "<?php echo $data['type'] ?>"></td>
           </tr>
           
           <tr class="d-flex justify-content-between m-3">
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button class="btn btn-primary" type= "submit">Save Changes</button ></td>
               <td><a href= "index.php"><button class="btn btn-primary"  type="button">Back</button></a></td >
           </tr>
         </tbody>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>