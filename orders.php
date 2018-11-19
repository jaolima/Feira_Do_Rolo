<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
include_once 'header.php';
?>



    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>MEUS PEDIDOS</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<p><h4>ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Data</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Código</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Nome</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Preço Unitário</strong>: '.$obj->price.'</p>';
              echo '<p><strong>UUnidades Compradas</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Custo total</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>

<?php
include_once 'log_footer.php';