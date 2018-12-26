<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
include_once 'header.php';
?>



    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 600px; background-image: url(images/bacu.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->

    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
    <div class="row">
        <div class="col-lg-7 col-md-10">


        <?php
        echo '  <h1 class="display-2 text-white">Meus Pedidos</h1>
            <div class="card">
                <div class="card-header text-center">
                    <h3>pedidos realizados</h3>
                </div>  
                 <div class="card-body" style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);">
          ';

        $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
//              echo '<p><h4>ID ->'.$obj->id.'</h4></p>';
//              echo '<p><strong>Código</strong>: '.$obj->product_code.'</p>';
                echo '<p><strong>Nome</strong>: '.$obj->product_name.'</p>';
                echo '<p><strong>Data</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Preço Unitário</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Unidades Compradas</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Custo total</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>
        </div>
            </div>
      </div>
    </div>
    </div>
    </div>

<?php
include_once 'log_footer.php';