<?php
if (empty($_GET['username']) || empty($_GET['password'])){
    header("Location: login.php?result=vide");
    exit;
}
else{
    echo('impossible');
}
?>