<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Menus da Loja</h4>
            <p class="category">Edite os menus que vão aparecer na loja</p>
        </div>
        <div class="card-content">

    <form action="<?php base_url()?>cadastra_menus" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3"><?php foreach($menu_1 as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Menu 1</label>
                <input type="text" name="menu" value="<?php echo $row->nome ?>" class="form-control">
                <input type="hidden" name="id" value="1" class="form-control">
            </div>
        </div><div class="col-md-9" style="margin-top: 35px">
            <input type="file" name="banner">
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
        </div><?php } ?>
    </div></form>

    <form action="<?php base_url()?>cadastra_menus" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3"><?php foreach($menu_2 as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Menu 2</label>
                <input type="text" name="menu" value="<?php echo $row->nome ?>" class="form-control">
                <input type="hidden" name="id" value="2" class="form-control">
            </div>
        </div><div class="col-md-9" style="margin-top: 35px" >
            <input type="file" name="banner">
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
        </div><?php } ?>
    </div></form>

    <form action="<?php base_url()?>cadastra_menus" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3"><?php foreach($menu_3 as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Menu 3</label>
                <input type="text" name="menu" value="<?php echo $row->nome ?>" class="form-control">
                <input type="hidden" name="id" value="3" class="form-control">
            </div>
        </div><div class="col-md-9"  style="margin-top: 35px">
            <input type="file" name="banner">
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>        </div><?php } ?>
    </div></form>

    <!-- LINKEDIN -->
    <form action="<?php base_url()?>cadastra_menus" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3"><?php foreach($menu_4 as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Menu 4</label>
                <input type="text" name="menu" value="<?php echo $row->nome ?>" class="form-control">
                <input type="hidden" name="id" value="4" class="form-control">
            </div>
        </div><div class="col-md-9" style="margin-top: 35px">
            <input type="file"  name="banner">
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
        </div><?php } ?>
    </div></form>

        </div>
    </div>
</div>
    </div>
</div>
</div>