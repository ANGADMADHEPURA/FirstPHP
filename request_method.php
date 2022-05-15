<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of request method in php (Hypertext pre-processor)</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["name"]) || isset($_POST["age"])) {
        echo "Hi". $_REQUEST['name']. "<br/>";
        echo "Your age is ". $_REQUEST['age']. "years";
        exit();
    }
    ?>
    <center bg-color="greenyellow">
    <form action="<?php $_PHP_SELF ?>" method="POST">
       Name: <input type="text" name="name" />
       Age: <input type="text" name="age" />
       <input type="submit" />
       </center>
       </form>
</body>
</html>