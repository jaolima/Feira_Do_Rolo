<?php
include 'config.php';

$code = $_POST["code"];
$titulo = $_POST["titulo"];
$desc = $_POST["desc"];
$qtd = $_POST["qtd"];
$price = $_POST["price"];

//Inserindo o usuário
if($mysqli->query("INSERT INTO comercio.products (product_code, product_name, product_desc, product_img_name, qty, price)
 VALUES('$code', '$titulo ', '$desc', 'default.jpg', '$qtd', '$price');")){
    echo 'Data inserted';
    echo '<br/>';
}
