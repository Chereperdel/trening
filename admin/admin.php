<?php
session_start();
print_r($_SESSION['admin']);

if ($_SESSION['admin']){
    $user = $_SESSION['admin'];
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>
    <body>
    <h1>Приветствую <?php echo "$user[1] $user[2]"; ?></h1>
    <a href="../internetmagazin.php" >Пользователи</a>
    <a href="books.php">Книги</a>
    <a href="logout.php">Выйти</a>



    </body>
    </html>



<?php

}

