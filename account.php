<?php

include_once 'header.php';


?>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
         style="min-height: 600px; background-image: url(images/rolezeiro.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white"> <?php echo 'Olá ' . $_SESSION['fname']; ?></h1>
                    <p class="text-white mt-0 mb-5">Sua página de login</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <?php

                                   if ($result) {
                                            $obj = $result->fetch_object();
                                            ?>
                                    <img  class="rounded-circle" src="images/<?= $obj->imagem ?>" />
                                    <?php } ?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">Seguir</a>
                            <a href="#" class="btn btn-sm btn-default float-right">Mensagem</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Amigos</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Fotos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Comentários</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <?php echo '<h3>' . $_SESSION['fname'] . '<span class="font-weight-light">,27</span></h3>'; ?>

                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Brazil
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Equipe de Software - Taguatinga sul
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Ciência da Computação
                            </div>
                            <hr class="my-4"/>
                            <p>Gosta de boteco e de cerveja de garrafa</p>
                            <a href="#">Mostrar Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Minha conta</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Configurações</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update.php"
                        <h6 class="heading-small text-muted mb-4">Informações do Usuário</h6>
                        <div class="pl-lg-4">
                            <!--                                    Nome-->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nome</label>
                                        <?php

                                        $result = $mysqli->query('SELECT * FROM users WHERE id=' . $_SESSION['id']);

                                        if ($result) {
                                            $obj = $result->fetch_object();

                                            echo '<input type="text" id="right-label" placeholder="' . $obj->fname . '" name="fname">';


                                            echo '</div>';
                                            echo '</div>';


                                            echo '  <div class="col-lg-6">';
                                            echo '  <div class="form-group">';
                                            echo '  <label class="form-control-label" for="input-email">Sobrenome</label>';


                                            echo '<input type="text" id="right-label" placeholder="' . $obj->lname . '" name="lname">';

                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';

                                            echo '<div class="row">';
                                            echo '  <div class="col-lg-6">';
                                            echo '  <div class="form-group">';
                                            echo '  <label class="form-control-label" for="input-email">E-mail</label>';

                                            echo '<input type="email" id="right-label" placeholder="' . $obj->email . '" name="email">';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '  <div class="col-lg-6">';
                                            echo '  <div class="form-group">';
                                            echo '  <label class="form-control-label" for="input-email">Alterar Senha</label>';

                                            echo '<input type="password" id="right-label" name="pwd">';

                                            echo '</div>';
                                            echo '</div>';
                                        }

                                        ?>
                                    </div>
                                </div>
                                <hr class="my-4"/>
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Informações para contato</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <?php
                                        echo '   <div class="col-md-12">';
                                        echo '  <div class="form-group">';
                                        echo '  <label class="form-control-label" for="input-email">Endereço</label>';

                                        echo '<input type="text" id="input-address" class="form-control form-control-alternative"  placeholder="' . $obj->address . '" name="address">';
                                        echo '</div>';
                                        echo '</div>';
                                        ?>

                                        <?php
                                        echo '  <div class="col-lg-4">';
                                        echo '  <div class="form-group">';
                                        echo '  <label class="form-control-label" for="input-email">Cidade</label>';

                                        echo '<input type="text" id="input-address" class="form-control form-control-alternative"  placeholder="' . $obj->city . '" name="city">';
                                        echo '</div>';
                                        echo '</div>';


                                        echo '  <div class="col-lg-4">';
                                        echo '  <div class="form-group">';
                                        echo '  <label class="form-control-label" for="input-email">Cep</label>';

                                        echo '<input type="text" id="input-address" class="form-control form-control-alternative"  placeholder="' . $obj->pin . '" name="pin">';
                                        echo '</div>';
                                        echo '</div>'; ?>
                                    </div>
                                </div>

                                <hr class="my-4"/>
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Sobre</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group">

                                        <textarea rows="4" class="form-control form-control-alternative"
                                                  placeholder="Algumas palavras sobre você ..."></textarea>
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <input type="submit" id="right-label" value="Editar Perfil" class="btn btn-info"/>
                                    <input type="reset" id="right-label" value="Limpar" class="btn btn-info"/>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'log_footer.php';?>
