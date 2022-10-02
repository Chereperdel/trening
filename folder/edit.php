<?php

$id = $_GET['id'];

$connect = mysqli_connect('localhost', 'root', 'root', 'gay');

$query = 'SELECT * FROM users WHERE id = '.$id;

$result = mysqli_query($connect, $query);

mysqli_close($connect);

$fetch = mysqli_fetch_row($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
</head>
<body>
<h1>
    <?php
    echo "$fetch[1] $fetch[2]";
    ?>

</h1>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fetch[0]?>">
    <input type="text" name="username">
    <input type="text" name="lastname">
    <input type="submit" value="Обновить">
</form>


</body>
</html>
