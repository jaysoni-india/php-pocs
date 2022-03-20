<?php
session_start();

if (isset($_POST['submit_btn'])){
//        $_SESSION = $_POST;
        $full_name = $_POST['user_full_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        $_SESSION['fn'] = $full_name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: ./dashboard.php');
//    print_r($_POST);
}
