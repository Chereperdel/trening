<?php

$id = $_GET['id'];

$connect = mysqli_connect('localhost', 'root', 'root', 'gay');



$query = 'SELECT * FROM books WHERE id ='.$id;
$result = mysqli_query($connect, $query);
$books = mysqli_fetch_row($result);


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
 		echo "  $books[1] ";
  	?>
 </h1>


<?php
echo "  $books[3] ";

 ?>


 </body>
 </html>