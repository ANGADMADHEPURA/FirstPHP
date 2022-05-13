<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIS IS A CONSTRUCTOR IN PHP</title>
</head>
<body>
    <?php
    class fruit {
        public $name;
        public $color;

        function _construct($name, $color) {
            $this ->name = $name;
            $this ->color = $color;
        }
        function get_name() {
            return $this -> name;

        }
         function get_color() {
             return $this -> color;
         }
        }
        $strawberry = new Fruit ("strawberry", "pink");
        echo $strawberry -> get_name();
        echo "<br>";
        echo $strawberry ->  get_color();
        
      ?>
      <h1>This is a constructor example of PHP</h1>
</body>
</html>