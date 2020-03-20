<!DOCTYPE html>
<html>
<head>
   <title>Add User</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">

<div>
   <legend class="d-flex justify-content-center text-white p-5"><h1>Add User</h1></legend>

   <form action="actions/a_create.php" method="post">
       <table class="d-flex justify-content-center">
        <tbody class="p-3 bg-success">
           <tr>
               <th>Type</th>
               <td><input class="m-3 text-center" type="text" name="type"  placeholder="Type"></td>
           </tr>    
           <tr>
               <th>Title</th>
               <td><input class="m-3 text-center" type="text" name= "title" placeholder="Title"></td>
           </tr>
           <tr>
               <th>Image(URL)</th>
               <td><input class="m-3 text-center" type="text" name= "image" placeholder="Image"></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input class="m-3 text-center" type="text" name= "author" placeholder="Author"></td>
           </tr>
            <tr>
               <th>ISBN</th>
               <td><input class="m-3 text-center" type="text" name= "ISBN" placeholder="ISBN"></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><input class="m-3 text-center" type="text" name= "short_description" placeholder="Short Description"></td>
           </tr>
          <tr>
               <th>Publish Date</th>
               <td><input class="m-3 text-center" type="text" name= "publish_date" placeholder="Publish Date"></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input class="m-3 text-center" type="text" name="publisher" placeholder="Publisher"></td>
           </tr>
           <tr class="d-flex justify-content-between m-3">
               <td><button class="btn btn-primary" type="submit">Insert Media</button></td>
               <td><a href= "index.php"><button class="btn btn-primary" type="button">Back</button></a></td>
           </tr>
        </tbody>
       </table>
   </form>
</div>
</body>
</html>