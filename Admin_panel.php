<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/RegAuthorisation.css">
    <title>Добавление книги.</title>
</head>

<div class = "header">
        <div class="header_in">
            <div class="logo_in">
                <div class="container">
                    <img class = "logo_pic" src="PIC/Logo.png" alt="">
                         <div class="header_logo">Grooming<br>
                        <div class="header_logo_d">Панель добавления услуг</div></div>  
                        <div class="header_but">
                        </div>
                   </div>
               </div>
          </div>
    </div>
</div>

<body>

<div class = "reg_form">
<form action="PHP/addBook.php" method="post" enctype="multipart/form-data">
<div class="input__text">Наименование услуги:</div>
                        <input name = "Book_name" class = "input" required>
                        <div class="Book_description">Описание услуги:</div>
                        <textarea name="Book_description" id="" cols="50" rows="12" required></textarea>
                        <div class="input__text">Цена услуги:</div>
                        <textarea name="Author" id="" cols="50" rows="2" required></textarea>
                        <div class="input__text">Обложка:</div>
                        <input type="file" name = "img_upload">
                        <input type="submit" name="upload" id="" value = "Загрузить">
                        </div>
    <br>
    </form>

</body>

