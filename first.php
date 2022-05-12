<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP web page</h1>
    <?php
    echo "Hello world";
    echo "<br>";
    echo "<br>";

                         //  This is a conditional statement & switch case
                        //  This is a conditional statement & switch case

    $level = 4;
    switch($level) {
        case 1:
            echo "You are playing at EASY level";
            break;
        case 2;
            echo "You are playing at MODERATE level";
            break;
        case 3;
             echo "You are playing at HARD level";
             break;
        case 4;
            echo "You are playing at EXTREME level";
            break;
        default:
             echo "Invalid Input ";
    }

    ?>
</body>
</html>