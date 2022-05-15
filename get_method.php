<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of get method in php </title>
</head>
<body>
    <?php
    <form action="<?php $_PHP_SELF ?>" method="GET">
    Name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="submit" />
        </form>
    
    if(isset($_GET["name"])  || isset($_GET["age"]))  {
        echo "Hi" . $_GET ['name']. "<br/>";
        echo "Your age is " . $_GET['age']. "years";
        exit(); 
    }
    ?>
</body>
</html>