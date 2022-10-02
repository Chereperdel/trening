<?php

$firstname = $_POST['username'];
$lastname = $_POST['lastname'];

$connect = mysqli_connect('localhost','root','root','gay');

$query = "INSERT INTO users (username, lastname) VALUES ('$firstname', '$lastname')";


$result = mysqli_query($connect, $query);
mysqli_close($connect);

 ?>

 <meta http-equiv="refresh" content="1; url=../internetmagazin.php">