<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <?php
include('header.php');

?>
  <body>
     <?php
   if( $_GET["name"] || $_GET["request"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "Your request is ". $_GET['request']. ". Thank you for your request.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Request: <input type = "text" name = "request" />
         <input type = "submit" />
      </form>
 <?php
include('footer.php');

?>
   </body>

</html>
