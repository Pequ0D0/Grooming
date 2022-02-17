<?php
session_start();
 require_once 'connect.php';

 $EMAIL = $_POST['E-mail'];
 $LOG = $_POST['Login'];
 $PASS = $_POST['Password'];
 $PASS_CH = $_POST['Password_ch'];

 if ($PASS === $PASS_CH) 
 {
 mysqli_query($connect, "INSERT INTO `users`(`ID`, `Email`, `Login`, `Password`, `Role`) VALUES (NULL,'$EMAIL','$LOG','$PASS_CH','1')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
      header('Location: http://localhost/Site_09/Index.php');
      
 }


 else
 {
     $_SESSION['message'] = 'Пароли не совпадают.';
     header('Location: http://localhost/Site_09/Index.php');
 }

 ?>