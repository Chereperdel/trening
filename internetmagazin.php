<?php


$connect = mysqli_connect('localhost', 'root', 'root', 'gay');

$query = 'SELECT * FROM users';
$result = mysqli_query($connect, $query);
$users = mysqli_fetch_all($result);

foreach ($users as $key => $user) {


	$query = 'SELECT * FROM books WHERE user_id='.$user[0].' ORDER BY name DESC';
	$result = mysqli_query($connect, $query);
	$books = mysqli_fetch_all($result);
	$users[$key]['books'] = $books;
	//print_r($user['books']).'<br>';
	/*foreach ($users[$key]['books'] as $gay => $value) {
		echo $value[1] .'<br>';
	}*/




	/*echo '<a href="edit.php?id='.$user[0].'"> '.$user[1].' '.$user[2].' </a>
	<form action="delete.php" method="post">
        <input type="hidden" name="id" value="'.$user[0].'">
        <input type="submit" value="Удалить">
        </form>
         <br>';*/



}
 echo '<form action="folder/insert.php" method="post">
 	<input type="text" name="username"> <br>
 	<input type="text" name="lastname"> <br>
 	<input type="submit" value="Создать"><br>
 	</form>';


mysqli_close($connect);





 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> Таблица </title>
 </head>


 <body>
 <h1> Имена </h1>


<?php
foreach ($users as $key => $user) {
	echo "<ul> <b> <a href='folder/author.php?id=$user[0]'> $user[1] $user[2]</a> </b> </ul>";
foreach ($user['books'] as $arrau => $book) {
		echo "<li> $book[1]  <br> ";
	}
	echo '<br>';

	}


 ?>
<a href="admin/regsite.php">Вход в састему</a>






 </body>
 </html>


 <!--

редачить
  echo '<a href="update.php?id='.$user[0].'"> '.$user[1]. ' ' . $user[2] .' </a>
        <form action="delete.php" method="post">
        <input type="hidden" name="id" value="'.$user[0].'">
        <input type="submit" value="Удалить">
        </form>

создать
         <form action="insert.php" method="post">
 	<input type="text" name="username"> <br>
 	<input type="text" name="lastname"> <br>
 	<input type="submit" value="Создать"><br>

<br>';
 -->