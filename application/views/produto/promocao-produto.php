<?php //FLASH MESSAGE
if ($msg == 1){
    echo "
        <script type='text/javascript'>
            demo.showNotification('top','right');
        </script>";
    }
?>
<style>
input[type=date]{
    height: 35px;
    width:100%;
    border-top:none;
    border-left:none;
    border-right:none !important
    }
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Promoção do Produto</h4>
            <p class="category">Crie promoções para seus produtos</p>
        </div>
        <div class="card-content">
    <form action="<?php base_url()?>../cadastropromocao" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-7"><?php foreach($produto as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Nome do Produto</label>
                <input type="text" name="nome" value="<?php echo $row->nome ?>" class="form-control" disabled>
                <input type="hidden" name="produto" value="<?php echo $row->produto ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group label-floating">
                <label class="control-label">Preço base</label>
                <input type="text" name="preco" value="<?php echo $row->preco ?>" class="form-control" disabled>
            </div>
        </div></div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">Preço de promoção</label>
                    <input type="text" name="valor" value="<?php echo $row->preco ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                <label class="control-label">Início da promoção</label>
                <input type="date" name="dataini"></div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                <label class="control-label">Fim da promoção</label>
                <input type="date" name="datafim"></div>
                </div>
        </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
            <a href="<?php base_url()?>../listarpromo/<?php echo $row->produto?>" style="color: #fff"><input type="button" class="btn btn-success pull-left" value="Ver Todos"></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-profile">
        <div >
            <?php $foto = ($row->foto !== null) ? base_url('uploads/'.$row->foto) : base_url('assets/img/faces/no-image.png'); ?>
            <img class="img-rounded" width="304" height="236" style="padding: 20px" src="<?php echo $foto ?>"/>
        </div>
        <div class="content">
            <h4 class="card-title"></h4>
        </div><?php } ?>
        </form>
    </div>
</div>
    </div>
</div>
</div>
<script>
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
</script>