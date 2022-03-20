<?php
session_start();

if (isset($_POST['submit_btn'])){
//        $SESSION = $_POST;
        $full_name = $_POST['user_full_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        $SESSION['fn'] = $full_name;
        $SESSION['email'] = $email;
        $SESSION['password'] = $password;
        header('Location: ./dashboard.php');
//    print_r($_POST);
}
