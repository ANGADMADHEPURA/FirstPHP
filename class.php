<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i am learning php class</title>
</head>
<body>
    <h1>The fruit Progress </h1>
    <?php
    class  fruit {
        public $name;
        public $color;
        function set_name ($name) {
            $this -> name = $name;
        }
        function get_name () {
            return $this -> name;
        }
    }
    ?>
</body>
</html>