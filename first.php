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
             echo "<br>";
    }
                //    Example of Loop
                echo  "<br>";
                $var = 2;
                while ($var  <=30) {
                    echo "Number: $var <br>";
                    $var++;
                   
                }
                // Example of do while loop
                echo "<br>";
                $var1 = 1345;
                do {
                    echo "Number: $var1 <br>";
                    $var1++;

                } while ($var1 <= 2524)
    ?>
</body>
</html>