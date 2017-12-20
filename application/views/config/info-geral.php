<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Redes Sociais</h4>
            <p class="category">Edite seus links de redes sociais</p>
        </div>
        <div class="card-content">

    <!-- FACEBOOK -->
    <form action="<?php base_url()?>cadastra_info" method="POST">
    <div class="row">
        <div class="col-md-7"><?php foreach($cidade as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Cidade</label>
                <input type="text" name="cidade" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>

        <div class="col-md-5"><?php foreach($estado as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Estado</label>
                <input type="text" name="estado" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <div class="row">
        <div class="col-md-5"><?php foreach($rua as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Rua</label>
                <input type="text" name="rua" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>

        <div class="col-md-5"><?php foreach($bairro as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Bairro</label>
                <input type="text" name="bairro" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>

        <div class="col-md-2"><?php foreach($numero as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Número</label>
                <input type="text" name="numero" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- DESCRICAO -->
    <div class="row">
        <div class="col-md-7"><?php foreach($loja as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Nome da Loja</label>
                <input type="text" name="loja" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- DESCRICAO -->
    <div class="row">
        <div class="col-md-12"><?php foreach($descricao as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Descrição da Loja</label>
                <input type="text" name="descricao" value="<?php echo $row->descricao ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>
        <button type="submit" class="btn btn-primary pull-right">Salvar</button></div>
    </div>
</div></form>
    </div>
</div>
</div>