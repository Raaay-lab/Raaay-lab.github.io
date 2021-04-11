<?php
    include ("connect.php");

    $id = mysqli_real_escape_string($connect, $_GET['id']);

    mysqli_query($connect, "DELETE FROM `rduusers` WHERE `id` = $id"); 
    mysqli_close($connect);
    header('Location: adminPanel.php');
?>