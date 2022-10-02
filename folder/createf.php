<?php

$file = $_FILES['file'];
$filename = $file['name'];
$goods_id = $_POST['goods_id'];
if ($file['tmp_name']!=='') {

    $meme = explode('.', $filename);
    $uniq = uniqid();
    $filename = $uniq . '.' . $meme[count($meme) - 1];
    print_r($filename);
    move_uploaded_file($file['tmp_name'], '../porn/' . $filename);


    $connect = mysqli_connect('localhost', 'root', 'root', 'gay');

    $query = "INSERT INTO files (name, good_id, enabled) VALUES ('$filename', '$goods_id', 1)";


    $result = mysqli_query($connect, $query);
    mysqli_close($connect);
}
else {
    echo 'нет картинки';
}
 ?>

  <meta http-equiv="refresh" content="2; url=../magazin.php">