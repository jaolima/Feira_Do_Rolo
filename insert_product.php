<?php
include 'config.php';

$code = $_POST["code"];
$titulo = $_POST["titulo"];
$desc = $_POST["desc"];
$qtd = $_POST["qtd"];
$price = $_POST["price"];

// verifica se foi enviado um arquivo
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];

    // Concatena a pasta com o nome
    $destino = 'images/' . $nome;

    // tenta mover o arquivo para o destino
    if( @move_uploaded_file( $arquivo_tmp, $destino  ))
    { }
    else
        echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
} else
{
    echo "Você não enviou nenhum arquivo!";
}

//Inserindo o usuário
if($mysqli->query("INSERT INTO comercio.products (product_code, product_name, product_desc, product_img_name, qty, price, imagem)
 VALUES('$code', '$titulo ', '$desc', 'default.jpg', '$qtd', '$price','$destino');")){
    echo 'Data inserted';
    echo '<br/>';
    header("location:products.php");
}

