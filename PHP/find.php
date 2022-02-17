<?php 
    require_once('connect.php');

$find = $_POST('find');
$base = mysqli_query("SELECT * FROM `books` WHERE `Author` = '$find'");

