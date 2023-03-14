<?php
    require '../database.php';

   $getid = $_GET['id'];

   $delete = "DELETE FROM tbl_banner WHERE id = $getid";
   $reqult = mysqli_query($db_connection, $delete);

   header('location:banner.php');
?>