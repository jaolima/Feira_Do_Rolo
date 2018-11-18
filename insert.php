
<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$arquivo = $_FILES['arquivo']['name'];

//Inserindo o usuário
if ($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")) {

}
$data = $mysqli->query("SELECT id FROM users WHERE fname =  '$fname'");
foreach ($data as $value) {
    $id_user = $value['id'];
}
print_r($id_user);

//if($mysqli->query("INSERT INTO users_imagem () VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
//    echo 'Data inserted';
//    echo '<br/>';
//}

//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'foto/';

//Tamanho maximo do arquivo em bytes
$_UP['tamanho'] = 1024 * 1024 * 100;  //smb

//Array com as extensões permitidas
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

//renomear
$_UP['renomeia'] = false;

//Array com os tipos de errors de upload do php
$_UP['errors'][0] = 'Não houve erro';
$_UP['errors'][1] = 'O arquivo no upload é maior que o limite';
$_UP['errors'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['errors'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['errors'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload. Se sim, exibe a mensagem de erro
if ($_FILES['arquivo']['error'] != 0) {
    die("Não foi posssível fazer o upload, erro: " . $_UP['errors'][$_FILES['arquivo']['error']]);
    exit;
}

//Faz a verificação da extensao do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
    echo "
	<META HTTP-EQUIV-REFRESH CONTENT = 'o; URL=http://localhost/register.php'>
		<script type=\"text/javascript\">
			alert(\"A imagem não foi cadastrada extensão inválida.\");
		</script>	
		";
} //Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    echo "
	<META HTTP-EQUIV-REFRESH CONTENT = 'o; URL=http://localhost/register.php'>
		<script type=\"text/javascript\">
			alert(\"Arquivo muito grande.\");
		</script>	
		";
} else {
    if ($_UP['renomeia'] == true) {
        $nome_final = time() . '.jpg';
    } else {
        $nome_final = $_FILES['arquivo']['name'];

    }
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

        $img_insert = mysqli_query($mysqli, "INSERT INTO imagem(
		nome) VALUES('$nome_final')");


        echo "
		<META HTTP-EQUIV-REFRESH CONTENT = 'o; URL=http://localhost/register.php'>
		<script type=\"text/javascript\">
			alert(\"foi cadastrado com sucesso.\");
		</script>	
		";
    } else {
        echo "
		<META HTTP-EQUIV-REFRESH CONTENT = 'o; URL=http://localhost/register.php'>
		<script type=\"text/javascript\">
			alert(\"A imagem não foi cadastrada com sucesso\");
		</script>	
		";
    }


    $data = $mysqli->query("SELECT id FROM imagem WHERE nome =  '$nome_final'");
    foreach ($data as $value) {
        $id_img = $value['id'];
    }
    print_r($data);
    $query = $mysqli->query($mysqli, "INSERT INTO users_imagem(
		id_user, id_img) VALUES('$id_user', '$id_img')");
}


header("location:login.php");

?>
