<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of post method in php</title>
</head>
<body>
    <?php
    if(isset($_POST["name"]) || isset($_POST["age"])) {
        if(preg_match("Aa-Zz", $_POST['name'])) {
            die("Invalid name . name should be alphabet");
        }
        echo "Hello". $_POST['name'] . "<br/>"; 
        echo "Your age is". $_POST['age']. "<br/>";
        exit();
    }
    ?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    <center>
         Name: <input type="text" name="name"  /> <br>  
         Age: <input type="text" name="age" /> <br>
       <input type="submit"  /> </center> 
         </form>
</body>
</html>