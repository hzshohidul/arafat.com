<?php
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $password  = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password  = $_POST['confirm_password'];
    $image = $_POST['image'];
?>