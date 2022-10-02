<?php


$connect = mysqli_connect('localhost', 'root', 'root', 'gay');
/*$query = 'SELECT * FROM ';
$result = mysqli_query($connect, $query);
$users = mysqli_fetch_all($result);*/

$query = 'SELECT * FROM goods';
$result = mysqli_query($connect, $query);
$goods = mysqli_fetch_all($result);

foreach ($goods as $key => $product) {


	$query = 'SELECT * FROM files WHERE good_id='.$product[0];
	$result = mysqli_query($connect, $query);
	$files = mysqli_fetch_all($result);
	$goods[$key]['files'] = $files;

}



mysqli_close($connect);





 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> Таблица </title>
 </head>


 <body>
 <h1> Товары </h1>


<?php
foreach ($goods as $key => $product) {
	echo "<h3> $product[1]<h3>";

	foreach ($product['files'] as $key => $file) {
        if ($file[3]==1){
            echo "<img src='porn/$file[1]' height='100'>"."  ";
        }


}
    echo "
		<form action='folder/createf.php' method='POST' enctype='multipart/form-data'><br>
 	<input type='hidden' name='goods_id' value='$product[0]'> <br>
 	<input type='file' name='file'> <br>
 	<input type='submit' name='add' value='Добавить'><br>
 	</form>";

}
/*echo '<form action="folder/createf.php" method="post" enctype="multipart/form-data">
 	<input type="hidden" name="goods_id" value="$product[0]"> <br>
 	<input type="file" name="file"> <br>
 	<input type="submit" value="Создать"><br>
 	</form>';*/



 ?>



 </body>
 </html>


