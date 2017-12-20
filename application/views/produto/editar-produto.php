<?php //FLASH MESSAGE
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
            <div class="col-md-8">
    <div class="card">
        <div class="card-header" data-background-color="purple">
            <h4 class="title">Editar Produto</h4>
            <p class="category">Edite seus produtos</p>
        </div>
        <div class="card-content">
        <form action="<?php base_url()?>../alterar" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6"><?php foreach($produto as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Nome do Produto</label>
                <input type="text" name="nome" value="<?php echo $row->nome ?>" class="form-control">
                <input type="hidden" name="produto" value="<?php echo $row->produto ?>" class="form-control">
            </div></div>
            <div class="form-group col-md-6">
              <select class="form-control" name="raridade" id="sel1">
                    <option value="<?= $row->id ?>"><?= $row->nome_raridade ?></option>
                    <option value="7">Comum</option>
                    <option value="1">Rara</option>
                    <option value="2">Super Rara</option>
                    <option value="3">Ultra Rara</option>
                    <option value="4">Secreta Rara</option>
                    <option value="5">Ultimate Rare</option>
                    <option value="6">Ghost Rare</option>
              </select>
            </div>
        </div><input type="hidden" name="foto_antiga" value="<?php echo $row->foto;?>">


        <div class="row">
        <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" name="categoria" id="sel1">
                    <option value="<?= $row->categoria ?>"><?= $row->nome_cat ?></option>
                    <?php foreach ($categoria as $cat) { ?>
                    <option value="<?php echo $cat->categoria; ?>"><?php echo $cat->nome; ?></option>
                <?php } ?>
              </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" name="estado" id="sel1">
                    <option value="<?= $row->estado ?>"><?= $row->estado ?></option>
                    <option value="Novo">Novo</option>
                    <option value="Semi-novo">Semi-novo</option>
                    <option value="Usado">Usado</option>
              </select>
            </div>
        </div>
            <div class="col-md-3">
            <div class="form-group">
                <select class="form-control" name="ativo" id="sel1">
                    <option value="<?= $row->ativo?>"><?= ($row->ativo == 1)?"Ativo" : "Inativo" ?></option>
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
            </div></div>
            <div class="col-md-3">
                <div class="form-group label-floating">
                    <label class="control-label">Preço</label>
                    <input type="text" name="preco" value="<?php echo $row->preco ?>" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group label-floating">
                    <label class="control-label"> Digite aqui dados sobre o produto.</label>
                    <textarea class="form-control" maxlength="1000" name="descricao" rows="7"><?= $row->descricao ?></textarea>
                    </div>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
            <a href="../listar" style="color: #fff"><input type="button" class="btn btn-success pull-left" value="Ver Todos"></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-profile">
        <div >
            <?php echo $this->session->flashdata('retorno'); ?>
            <?php $foto = ($row->foto !== null) ? base_url('uploads/'.$row->foto) : base_url('assets/img/faces/no-image.png'); ?>
            <img class="img-rounded" width="304" height="236" style="padding: 20px" src="<?php echo $foto ?>"/>
        </div>
        <div class="content">
            <h4 class="card-title"></h4>
             <input type="file" style="margin: 15px" name="userfile">
        </div><?php } ?>
        </form>
    </div>
</div>
    </div>
</div>
</div>