<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <title>Index</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary text-white">
<div>
   <div class="d-flex justify-content-center m-5">
   <a href= "create.php"><button class=" p-5 btn btn-primary" type="button"><h1>Click Here To Add Media</h1></button></a>
   </div>
  <div class="d-flex justify-content-center mb-5">
   <table border="1" class="mw-100 mx-5">
       <thead>
           <tr class="bg-info">
               <th class="text-center"><h3>Type</h3></th>
               <th class="text-center"><h3>Title</h3></th>
               <th class="text-center"><h3>Image</h3></th>
               <th class="text-center"><h3>Author</h3></th>
               <th class="text-center"><h3>ISBN</h3></th>
               <th class="text-center"><h3>Short Description</h3></th>
               <th class="text-center"><h3>Publish Date</h3></th>
               <th class="text-center"><h3>Publisher</h3></th>
               <th class="text-center"><h3>Edit</h3></th>
               <th class="text-center"><h3>Delete</h3></th>
           </tr>
       </thead>
       <tbody class="bg-success text-dark">
        <?php
           $sql = "SELECT * FROM media";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td class='text-center'>" .$row['type']."</td>
                       <td class='text-center'>" .$row['title']."</td>
                       <td class='text-center'><img src= ' " .$row['image']." ' width='150px'></td>
                       <td class='text-center'>" .$row['author']."</td>
                       <td class='text-center'>" .$row['ISBN']."</td>
                       <td class='text-center'>" .$row['short_description']."</td>
                       <td class='text-center'>" .$row['publish_date']."</td>
                       <td class='text-center'>" .$row['publisher']."</td>
                       <td class='text-center'>
                           <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary' type='button'>Edit</button></a>
                       </td>
                       <td class='text-center'>
                           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger'  type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'>No Data Avaliable</td></tr>";
           }
            ?>
       </tbody>
   </table>
   </div>
</div>
</body>
</html>