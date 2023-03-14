<?php
    require '../database.php';

   $getid = $_GET['id'];

   $delete = "DELETE FROM tbl_about WHERE id = $getid";
   $reqult = mysqli_query($db_connection, $delete);

   header('location:about.php');
?>