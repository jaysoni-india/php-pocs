<?php

session_start();

if(count($_SESSION) > 0){
    $name = $_SESSION['fn'];
    $email = $_SESSION['email'];
//    print_r($_SESSION);
?>
<html>
<body>

<nav>
    <h1>
        PHP POC
    </h1>
    <br>
    <a href="./logout.php">Logout</a> (<?php echo $name; ?>, <?php echo $email; ?> )
</nav>
<br>
<br>
<div id="content">

</div>
</body>
</html>

<?php
}else{
    header('Location: ./register.php');
}

?>


