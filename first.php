<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body   {
            text-align: center;
            background-color: wheat;
            font-size: 35px;
        }
    </style>
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
    echo "<br>";
                //    Example of Loop
                echo  "<br>";
                $var = 2;
                while ($var  <=10) {
                    echo "Number: $var <br>";
                    $var++;
                   
                }
                 echo "<br>";
                //Example of function in PHP
                function name(){
                    for ($var2 = 1; $var2 <= 6; $var2++) {
                        echo "angad: $var2  <br>";
                    }
                }

              //Example of function 2nd 
              function familyName($fname) {
                echo "$fname <br>";
              }
              
              familyName("Angad mandal");
              familyName("Kolkata");
              familyName("Delhi");
              familyName("Mumbai");
              familyName("Patna");


                // For loop in PHP 
                echo "<br>";
                for ($x = 0; $x <= 100; $x+=10) {
                    echo "The number is a for loop: $x <br>";
                  }

                  //Foreach loop in PHP
                  echo "<br>";
                  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                  foreach($age as $x => $val) {
                  echo "$x = $val<br>";
                              }
                  
                // Example of do while loop
                echo "<br>";
                $var1 = 1345;
                do {
                    echo "Number: $var1 <br>";
                    $var1++;

                } while ($var1 <= 2524)


                // Example of For function In PHP
        
              
                  ?> 
</body>
</html>