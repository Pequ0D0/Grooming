<?php

session_start();
require_once 'connect.php';

$A_MAIL = $_POST['auth_mail'];
$A_PASS = $_POST['auth_pass'];
$sql="SELECT * FROM `users` WHERE `Email`='$A_MAIL' AND`Password`='$A_PASS'";
$check_user = mysqli_query($connect, $sql);
if (mysqli_num_rows($check_user) > 0) {
    $role="SELECT * FROM `users` WHERE `Email` = '$A_MAIL'";
    $check_role = mysqli_query($connect, $role);
    $res = $check_role->fetch_array();
 if (($res['Role']) == 3)
{
        header('Location: http://localhost/Site_09/Admin_panel.php');
    }
    else{
        header('Location: http://localhost/Site_09/Main_page.php');
    }
} 

else {
    $_SESSION['message'] = 'Неверный логин или пароль.';
    header('Location: http://localhost/Site_09/Index.php');
}


?>
