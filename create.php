  <?php
         include "config.php";

         if(isset($_POST['submit'])) {
             $first_name = $_POST['firstname'];
             $last_name = $_POST['lastname'];
             $email = $_POST['email'];
             $password = $_POST['password'];
             $gender = $_POST['gender'];
         }

         $sql = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'password', 'gender') VALUE  ('$first_name', '$last_name', '$email', '$password', '$gender')";

         