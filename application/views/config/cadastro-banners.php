<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Cadastrar Banners</h4>
            <p class="category">Cadastre seus banners, para que eles apareçam na loja</p>
        </div>
        <div class="card-content">
    
<form action="<?php base_url()?>../cadastrar" method="POST" enctype="multipart/form-data">
    <div class="row">
        <input type="hidden" name="banner" value="1" class="form-control" disabled>
        <div class="col-md-12">
            <input type="file" style="margin: 15px" name="userfile1" class="pull-left">
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php if($config){ ?>
            <?php foreach($config as $row){ ?>
            <input type="hidden" value="<?php echo $row->banner ?>" name="id" id="id">
            <?php $foto = ($row->foto !== null) ? base_url('uploads/banners/'.$row->foto.'.jpg') : base_url('assets/img/faces/no-image.png'); ?>
                <img src="<?php echo $foto;}} ?>" class="img-responsive" style="max-height: 500px">
            </div>
    </form>
        </div></div></div></div></div></div></div></div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>