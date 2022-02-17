<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Main_stage.css">
    <link rel="stylesheet" href="CSS/scroll_menu.css">
    <title>Главная страница.</title>
</head>

<div class = "header">
        <div class="header_in">
            <div class="logo_in">
                <div class="container">
                    <img class = "logo_pic" src="PIC/Logo (2).svg" alt=""></img>
                        <div class="header_logo">groomer studio<br>
                        <div class="header_logo_d">& shop</div></div>  
                        <div class="header_but">
                        </div>
                   </div>
               </div>
          </div>
    </div>
</div>

<body link="gray" vlink="white" alink="gray">

<div class="scrollmenu">
<div class = "Info_2">
<?php
 $connect = mysqli_connect("localhost", "root", "","SITE_09") or die ("Ошибка". mysqli_error($conn));
        $vivod = mysqli_query($connect, "SELECT * FROM `books` WHERE 1");
        $tu = mysqli_fetch_assoc($vivod);
        while($row = $vivod->fetch_assoc()){
            ?>

  <a href="Books"><div class = "Book_name"> 
                <?php echo $row['Book_name']; ?>  
        </div>
              <div class = "Book_description">   
                <?php echo $row['Book_description']; ?>     
        </div>
        
        <div class = "Picture_book">
            <?php $show_img = base64_encode($row['Picture']);?>         
<img src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""></img>
<div class = "Book_Author">   
                <?php echo $row['Author']; ?> 
                
        </div>
</div>
</a>

<?php
}
           
        ?>
</div>
</div>
</div>
</div>
<br><br>
</div>

</body>
<br>
<footer>
    <div class="footer">
        <div class="container">
            
        </div>
    </div>