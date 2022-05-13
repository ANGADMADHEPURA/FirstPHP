<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of polymorphism </title>
</head>
<body>
    <h1>Learning of polymorphism</h1>
    <?php
    class fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "A {$this->name} is a fruit and the  color of the fruit  is {$this->color}.";
        }
    }
    class Cherry extends fruit {
        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro() {
            echo "This fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";

        }
    }
    $cherry= new Cherry ("Cherry", "bright pink", 20);
    $cherry->intro();
    ?>
</body>
</html>