<?php
 session_start();
 require_once 'connect.php';


 $login = $_POST['login'];
 $password1 = $_POST['password1'];

 $password1 = md5($password1);

 $check_user = mysqli_query($connect, "SELECT * FROM `rduusers` WHERE `login` = '$login' AND `password` = '$password1'");
    if(mysqli_num_rows($check_user) == 1){

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "day" => $user['day'],
            "month" => $user['month'],
            "year" => $user['year'],
            "male" => $user['dzen'],
            "email" => $user['email'],
			"login" => $user['login']
        ];


        header('Location: ../profile.php');

    } else{
        $_SESSION['message'] = "Не верный логин или пароль.";
        header('Location: /lab2ip/authorization/index.php');
    }

    if ($user['login'] === 'admin') {
        $_SESSION['admin2'] = 'admin';
        header('Location: /lab2ip/core/adminPanel.php'); 
    }     
 ?>