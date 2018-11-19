<?php

include_once 'header.php';

?>
<?php
if($_SESSION["type"]!="admin") {
    header("location:index.php");
}

?>
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">Novo Produto</h1>
                    <p class="text-lead text-light">Cadastrar novo produto</p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>


<!-- Page content -->
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-transparent pb-5">

                </div>

                <!--Formulário-->
                <form method="POST" role="form" action="insert_product.php" style="margin-top:30px;" enctype="multipart/form-data">
                    <!--Nome Do produto-->
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Título Do Produto" id="right-label"  type="text" name="titulo">
                        </div>
                    </div>

                    <!--CODE-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control"  id="right-label" placeholder="Código" type="text" name="code">
                        </div>
                    </div>

                    <!--Descrição -->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control"  id="right-label" placeholder="Descrição" type="text" name="desc">
                        </div>
                    </div>

                    <!--Unidades Disponíveis-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Quantidade" type="text" id="right-label" name="qtd">
                        </div>
                    </div>

                    <!--Preço-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" type="number"   id="right-label" placeholder="Preço" type="text" name="price">
                        </div>
                    </div>

                    <!--Imagem-->
                    <input type="file" name="arquivo" >

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary my-4" id="right-label" value="Cadastrar" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                        <input type="reset" class="btn btn-primary my-4" id="right-label" value="Limpar" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>


<?php
include_once 'log_footer.php';
