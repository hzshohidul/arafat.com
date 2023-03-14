<?php
    require '../database.php';

    $name           = $_POST['name'];
    $country        = $_POST['country'];
    $freelance      = $_POST['freelance'];
    $university     = $_POST['university'];
    $languages      = $_POST['languages'];
    $address        = $_POST['address'];

    $insert = "INSERT INTO tbl_about(name, country, freelance, university, languages, address) VALUES ('$name','$country','$freelance','$university','$languages','$address')";
    $reqult = mysqli_query($db_connection, $insert);



    

    header('location:about.php');
?>