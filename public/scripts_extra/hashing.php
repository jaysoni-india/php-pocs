<?php

function hasher($pass){
    echo 'password->' . $pass . ' , hashed value -> ' . hash('sha256', hash('sha256', $pass));
}

$pass = 'a';
$pass1 = 'a';

hasher($pass);
hasher($pass1);
