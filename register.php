<?php
include_once 'header.php';

?>

<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">Cadastrar!</h1>
                    <p class="text-lead text-light">Pagina de login</p>
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
                <form name="form1ulario" method="POST" role="form" action="insert.php" style="margin-top:30px;"  onsubmit="envia()" enctype="multipart/form-data">
                    <!--Primeiro Nome-->
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control" placeholder="Primeiro Nome" id="right-label"  type="text" name="fname">
                        </div>
                    </div>

                    <!--Último Nome-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control"  id="right-label" placeholder="Último Nome" type="text" name="lname">
                        </div>
                    </div>

                    <!--Endereço-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control"  id="right-label" placeholder="Endereço" type="text" name="address">
                        </div>
                    </div>

                    <!--Cidade-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control" placeholder="Cidade" type="text" id="right-label" name="city">
                        </div>
                    </div>

                    <!--CEP-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control" type="number"   id="right-label" placeholder="Cep" type="text" name="pin">
                        </div>
                    </div>

                    <!--email-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control"  id="right-label" placeholder="E-mail" type="email"  name="email">
                        </div>
                    </div>

                    <!--Password-->
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bold-right"></i></span>
                            </div>
                            <input class="form-control"  type="password" id="right-label" name="pwd" placeholder="Senha">
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

<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
