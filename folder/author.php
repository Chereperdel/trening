<?php

$id = $_GET['id'];

$connect = mysqli_connect('localhost', 'root', 'root', 'gay');

$query = 'SELECT * FROM users WHERE id ='.$id;
$result = mysqli_query($connect, $query);
$user = mysqli_fetch_row($result);

$query = 'SELECT * FROM books WHERE user_id ='.$id;
$result = mysqli_query($connect, $query);
$books = mysqli_fetch_all($result);


mysqli_close($connect);

?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> Таблица </title>
 </head>


 <body>
 <h1>
 	<?php
 		echo "  $user[1] $user[2] ";
  	?>
 </h1>


<?php
echo "<ul>";
foreach ($books as $arrau => $book) {
		echo "<li> <a href='book.php?id=$book[0]'> $book[1]</a>  <br> ";
	}
	echo "</ul>";
 ?>


 </body>
 </html>