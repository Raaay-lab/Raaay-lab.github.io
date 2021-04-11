<?php
 session_start();
 require_once 'connect.php';

 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $day = $_POST['day'];
 $month = $_POST['month'];
 $year = $_POST['year'];
 $male = $_POST['dzen'];
 $email = $_POST['email'];
 $login = $_POST['login'];
 $password1 = $_POST['password1'];
 $password2 = $_POST['password2'];
 $flagPasswords = 0;
 $flagPass = 0;
 $flagMail = 0;
 $flagMale = 0;
 $flagName = 0;
 $flagSurname = 0;
 $flagLogin = 0;
 $flagRegisteredMail = 0;
 $flagRegisteredLogin = 0;

 
 if( $login == ""){
    $flagLogin++;
 }

 if( $surname == ""){
    $flagSurname++;
 }

 if( $name == ""){
    $flagName++;
 }

 if($male == ""){
    $flagMale++;
 }

 if($email == ""){
    $flagMail++;
 }

 if($password1 != $password2){
    $flagPasswords++;
 }

 if($password1 == "" || $password2 == ""){
    $flagPass++;
 }


 if($flagLogin != 0){
    $_SESSION['message'] = "Введите логин";
    header('Location: /lab2ip/registration/index.php');
 }

 if($flagSurname != 0){
    $_SESSION['message'] = "Назовитесь";
    header('Location: /lab2ip/registration/index.php');
 }

 if($flagName != 0){
    $_SESSION['message'] = "Назовитесь";
    header('Location: /lab2ip/registration/index.php');
 }

 if($flagMale != 0){
    $_SESSION['message'] = "Вы не указали пол";
    header('Location: /lab2ip/registration/index.php');
 }

 if($flagMail != 0){
    $_SESSION['message'] = "Вы не ввели почту";
    header('Location: /lab2ip/registration/index.php');
 }

 if($flagPass != 0){
    $_SESSION['message'] = "Вы не ввели пароль";
    header('Location: /lab2ip/registration/index.php');
 }

if($flagPasswords != 0){
    $_SESSION['message'] = "Пароли не совпадают";
    header('Location: /lab2ip/registration/index.php');
 }

  $check_userMail = mysqli_query($connect, "SELECT * FROM `rduusers` WHERE `email` = '$email'");

  if(mysqli_num_rows($check_userMail) != 0){
   $_SESSION['message'] = "Пользователь с такой почтой уже зарегистрирован";
   header('Location: /lab2ip/registration/index.php');
   $flagRegisteredMail++;

  }

  $check_userLogin = mysqli_query($connect, "SELECT * FROM `rduusers` WHERE `login` = '$login'");

  if(mysqli_num_rows($check_userLogin) != 0){
   $_SESSION['message'] = "Пользователь с таким логином уже зарегистрирован";
   header('Location: /lab2ip/registration/index.php');
   $flagRegisteredLogin++;

  }

 $password1 = md5($password1);

if(($flagRegisteredLogin == 0) && ($flagRegisteredMail == 0) && ($flagPasswords == 0) && ($flagPass == 0) && ($flagMail == 0) && ($flagMale == 0) && ($flagName == 0) && ($flagSurname == 0) && ($flagLogin == 0)){
  mysqli_query($connect, "INSERT INTO `rduusers` (`id`, `name`, `surname`, `dateBirthDay`, `dateBirthMonth`, `dateBirthYear`, `Male`, `email`, `login`, `password`) VALUES (NULL, '$name', '$surname', '$day', '$month', '$year', '$male', '$email', '$login', '$password1')");
  $_SESSION['message'] = "Поздравляю! Вы зарегистрированы.";
  header('Location: /lab2ip/authorization/index.php');

}
?>


    

