<?php

if ($msg == 1){
    echo "
        <script type='text/javascript'>
            demo.showNotification('top','right');
        </script>";
}

?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Cadastrar Categoria</h4>
            <p class="category">Cadastre seus tipos e categorias de produtos</p>
        </div>
        <div class="card-content">
        <form action="<?php base_url()?>../categorias/cadastrar" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group label-floating">
                <label class="control-label">Nome da Categoria</label>
                <input type="text" name="nome" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <select class="form-control" name="menu" id="sel1">
                    <option>Selecione o Menu</option>
                    <?php foreach ($menu as $row) { ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
                <?php } ?>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Descrição do Produto</label>
                <div class="form-group label-floating">
                    <label class="control-label"> Digite aqui dados sobre a categoria.</label>
                    <textarea class="form-control" name="descricao" rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
            <a href="./listar" style="color: #fff"><input type="button" class="btn btn-success pull-left" value="Ver Todos"></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

        </form>

    </div>
</div>
</div>
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