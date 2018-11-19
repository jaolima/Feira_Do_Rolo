<?php
include_once 'header.php';

?>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Produtos a venda</h3>
            </div>
            <div class="card-body" style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);">
                <?php
                $i = 0;
                $product_id = array();
                $product_quantity = array();

                $result = $mysqli->query('SELECT * FROM products');

                if ($result) {
                    while ($obj = $result->fetch_object()) {

                        echo '<div class="large-4 columns card">';
                        echo '<p><h3>' . $obj->product_name . '</h3></p>';
                        echo '<img src="' . $obj->imagem . '"/>';
                        echo '<p><strong>Descrição</strong>: ' . $obj->product_desc . '</p>';
                        echo '<p><strong>Código</strong>: ' . $obj->product_code . '</p>';
                        echo '<p><strong>Unidades disponíveis</strong>: ' . $obj->qty . '</p>';
                        echo '<p><strong>Preço unitário</strong>: ' . $currency . $obj->price . '</p>';


                        if ($obj->qty > 0) {
                            echo '<p><a class="btn btn-outline-info" href="update-cart.php?action=add&id=' . $obj->id . '">  <i class="fa fa-cart-plus"></i> </a>  </p>';
                        } else {
                            echo 'Tem nada!';
                        }
                        echo '</div>';

                        $i++;
                    }

                }

                $_SESSION['product_id'] = $product_id;


                echo '</div>';
                echo '</div>';
                ?>

            </div>

        </div>
    </div>


<?php
include_once 'log_footer.php';
?>