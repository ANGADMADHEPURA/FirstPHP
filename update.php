<?php
        include "config.php";

         if(isset($_POST['update'])) {
             $firstname = $_POST['firstname'];
             $user_id = $_POST['id'];
             $lastname = $_POST['lastname'];
             $email = $_POST['email'];
             $gender = $_POST['gender'];
             $password = $_POST['password'];

            $sql = "UPDATE 'users' SET 'firstname' = '$firstname', 'lastname' = '$lastname', 'email' = '$email', 'password' = '$password', 'gender' = '$gender' WHERE 'id' = '$user_id' ";

            $result = $conn->query($sql);

            if($result == TRUE) {
                echo "Record updated successfully";
            }
            else {
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
         }

         if (isset($_GET['id'])) {
             $user_id = $_GET['id'];

             $sql = "SELECT * FROM 'users' WHERE 'id'= '$user_id' ";

             $result = $conn->query($sql);

             if
         }