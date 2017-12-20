<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Loja - Painel Administrativo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url();?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
<div class="logo"><a href="http://www.creative-tim.com" class="simple-text">Painel</a></div><div class="sidebar-wrapper">
    <ul class="nav">
        <li class="active">
            <a href="<?php echo base_url();?>home/index"><i class="material-icons">dashboard</i><p>Home</p></a>
        </li>
        <li>
            <a href="<?php echo base_url();?>produtos/cadastro"><i class="material-icons">content_copy</i><p>Produtos</p></a>
        </li>
        <li>
            <a href="<?php echo base_url();?>categorias/cadastro"><i class="material-icons text-gray">bookmark</i><p>Categorias de Produto</p></a>
        </li>
        <li>
            <a href="<?php echo base_url();?>produtos/listarpromo"><i class="material-icons text-gray">subject</i><p>Promoções</p></a>
        </li>
        <li>
            <a href="<?php echo base_url();?>pedidos/listar"><i class="material-icons">shopping_cart</i><p>Pedidos</p></a>
        </li>
        <li>
            <a href="table.html"><i class="material-icons">content_paste</i><p>Relatórios</p></a>
        </li>
        <li>
            <a href="<?php echo base_url();?>config/index"><i class="material-icons">settings</i><p>Configurações</p></a>
        </li>
        <li>
            <a href="icons.html"><i class="material-icons">messages</i><p>Mensagens</p></a>
        </li>
    </ul>
</div>
</div>
<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">0</span>
                        <p class="hidden-lg hidden-md">Notifications</p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Nenhuma notificação</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url()?>login/sair" class="dropdown-toggle">
                        <i class="material-icons">exit_to_app</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url();?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url();?>./assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>./assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>