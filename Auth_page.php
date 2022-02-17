<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/RegAuthorisation.css">
    <title>Форма авторизации.</title>
</head>

<div class = "header">
        <div class="header_in">
            <div class="logo_in">
                <div class="container">
                    <img class = "logo_pic" src="PIC/Logo.png" alt="">
                        <div class="header_logo">groomer studio<br>
                        <div class="header_logo_d">& shop</div></div>  
                        <div class="header_but">
                        </div>
                   </div>
               </div>
          </div>
    </div>
</div>


<body>

<div class = "reg_form">
</br><br>
<form action="PHP/authorisation.php" method="post" enctype="multipart/form-data">
    <label> Адрес электронной почты: </label><br>
    <input type ="text" name="auth_mail" placeholder="Введите Email."><br><br>
    <label> Пароль: </label><br>
    <input type="password" name="auth_pass" placeholder="Введите пароль."><br><br>
    <button type="submit">Войти.</button>
    <br><br><br>
    Отсутствует аккаунт? - &nbsp<a href="index.php">Зарегистрируйтесь.</a>
    <br>
    <?php
        if($_SESSION['message'])
        {
            echo '<p class="msg"> ' . $_SESSION['message'] . '   </p>';
        }
         unset($_SESSION['message']);
    ?>
    </form>

</body>



<footer>
    <div class="footer">
        <div class="container">
            
        </div>
    </div>
    </footer>