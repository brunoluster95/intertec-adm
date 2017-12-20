<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BERSERK - Faça seu login </title>

    <!-- Bootstrap core CSS -->

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="./assets/css/custom.css" rel="stylesheet">

    <script src="./assets/js/jquery.min.js"></script>

</head>
<body class="bglogin">
        <div id="wrapper">
            <div id="login" class="animate form" style="padding: 30px;background: #fff;" >
                <section class="login_content">
                    <form action="<?php echo base_url('login/entrar')?>" method="POST">
                        <h1><b>NOME</b></h1>
                        <div>
                            <input type="text" class="form-control" value="administrador@adm.com.br" placeholder="E-mail" name="email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" value="adm" name="senha" placeholder="Senha" required="" />
                        </div>
                        <div>
                            <input type="submit" class="btn btn-dark" value="Entrar">
                            <a class="reset_pass" href="#">Esqueceu sua senha?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Novo por aqui?
                                <a href="#toregister" class="to_register"> Crie sua conta! </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
        </div>

</body>

</html>