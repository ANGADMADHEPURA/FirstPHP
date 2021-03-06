<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of destructor in php</title>
</head>
<body>
    <?php
class Fruit {
    // Properties
    var $name;
    var $color;
  
    // Methods
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  $apple = new Fruit("Apple", "red");
          ?>
          <h1>This is a destructor example of PHP</h1>
          <h2>Welcome to the future my account</h1>

</body>
</html>