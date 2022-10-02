<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
    <title>Регистрация</title>
</head>
<body>
<h1>Логин</h1>

<form action="regsite.php" method="post">
    <label for="login">Логин</label>
    <input type="text" name="login">
    <label for="password">Пароль</label>
    <input type="text" name="password">
    <input type="submit" value="Войти"><br>
</form>


<form action="regsite.php" method="post">
<label for="pass">Шифрование пароля</label>
<input type="text" name="pass">
<input type="submit" value="Сгенерировать">
<?php if ($_POST['pass'])echo crypt($_POST['pass']); ?>
</form>
</body>
</html>

<?php

if ($_SESSION['admin']){
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];

    $connect = mysqli_connect('localhost', 'root', 'root', 'gay');
    $query = "SELECT * FROM users WHERE login='$login'";
    $result = mysqli_query($connect, $query);
    $user = mysqli_fetch_row($result);
    mysqli_close($connect);

    if (!$user)
    {
        echo "Нет такого юзера";
        die();
    }

    $pass = $user[4];

    if ($password==$pass){

        $_SESSION['admin'] = $user;
        echo '<meta http-equiv="refresh" content="0; url=admin.php">';
    }
}

$login = $_POST['login'];
$password = $_POST['password'];


     if (!$login){
         echo "Введи логин, быдло";
         die();
     }
     if (!$password){
         echo "Введи пароль, быдло";
         die();
     }

$connect = mysqli_connect('localhost', 'root', 'root', 'gay');
$query = "SELECT * FROM users WHERE login='$login'";
$result = mysqli_query($connect, $query);
$user = mysqli_fetch_row($result);
mysqli_close($connect);

if (!$user)
{
    echo "Нет такого юзера";
    die();
}


   $pass = $user[4];

   if (crypt($password,$pass)==$pass){
       echo "пароль верен";
       $_SESSION['admin'] = $user;
       echo '<meta http-equiv="refresh" content="2; url=admin.php">';

   }
   else{
       echo "саси быдло, пароль не верен";
       die();
   }



?>