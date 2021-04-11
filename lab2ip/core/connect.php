<?php
    $connect = mysqli_connect('localhost', 'root','','lab4db');
    
    if(!$connect){
        die("Ошибка подключения к базе данных");
    }
?>