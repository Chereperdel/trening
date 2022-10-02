<?php
$id = $_POST['id'];
$firstname = $_POST['username'];
$lastname = $_POST['lastname'];

$connect = mysqli_connect('localhost','root','root','gay');

$query = 'UPDATE users SET username = "'.$firstname.'", lastname = "'.$lastname.'" WHERE id ='.$id;

//$query = 'UPDATE users SET firstname = "'.$firstname.'", lastname = "'.$lastname.'" WHERE id = '.$id;



$result = mysqli_query($connect, $query);
mysqli_close($connect);

 ?>
 <meta http-equiv="refresh" content="1; url=internetmagazin.php">