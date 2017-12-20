<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Editar Categoria</h4>
            <p class="category">Edite suas categorias de produtos</p>
        </div>
        <div class="card-content">
        <form action="<?php base_url()?>../salvar_alteracao" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group label-floating">
            <?php foreach($categoria as $row) { ?>
                <input type="hidden" name="id" value="<?= $row->categoria ?>" class="form-control">
                
                <label class="control-label">Nome da Categoria</label>
                <input type="text" name="nome" value="<?= $row->nome ?>" class="form-control">
            <?php } ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <select class="form-control" name="menu" id="sel1">
                    <option> -- Selecione o Menu --</option>
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
                <div class="form-group label-floating">
                <?php foreach($categoria as $row) { ?>
                    <label class="control-label">Descrição da Categoria</label>
                    <input type="text" name="descricao" value="<?= $row->descricao ?>" class="form-control">
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
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