<?php
session_start();

if (isset($_POST['submit_btn'])){
//        $_SESSION = $_POST;
        $full_name = $_POST['user_full_name'];
        $email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        require_once './mysql.php';

        $sql = "INSERT INTO users (name, email, password) VALUES ('$full_name', '$email', '$user_password')";

        if ($conn->query($sql) === TRUE) {
            // TODO get newly registered $id using SQL "select id from users where email = $email";
            // mysql fetch $id = $row['id'];
            // TODO save this id in Session with key id
            $_SESSION['fn'] = $full_name;
            $_SESSION['email'] = $email;
            header('Location: ./dashboard.php');
        } else {
            header('Location: ./register.php');
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

//    print_r($_POST);
}
