<?php

include_once 'header.php';

?>

<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
     style="min-height: 600px; background-image: url(images/157.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
        <?php
        if(!isset($_SESSION['cart'])){
            echo '  <h1 class="display-2 text-white">Seu Carrinho está vazio</h1>';
            echo " <p class=\"text-white mt-0 mb-5\">Vá comprar</p>";

            echo ' </div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Código</th>';
            echo '<th>Nome</th>';
            echo '<th>Quantidade</th>';
            echo '<th>Preço</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity;
                $total = $total + $cost; //adicionando o custo total

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">  <i class="ni ni-fat-add"></i></a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'"><i class="ni ni-fat-delete"></i></a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button">Esvaziar carrinho</a>&nbsp;<a href="products.php" class="button ">Continuar Comprando</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;"><i class="fa fa-cart-plus"></i></button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }





          echo '</div>';
          echo '</div>';
          ?>



          <?php
include_once 'log_footer.php';
?>
