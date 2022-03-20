<?php

session_start();


if (count($_SESSION)){
    $_SESSION = [];
    session_destroy();
    header('Location: /register.php');
}else{
    echo "you are not logged in, go to registeration using below link";
    echo<<<std
        <hr>
        <a href="./register.php">Go to Register</a>    
std;

}


