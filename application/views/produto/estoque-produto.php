<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Lista de Produtos</h4>
        <p class="category">Aqui você vê todos os produtos cadastrados no sistema.</p>
    </div>
    <div>
        <div class="col-md-12"><?= "Você está visualizando o estoque de ".$produto[0]->nome ?></div>
        <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
            <thead class="text-primary">
                <th>Idioma</th>
                <th>Entrada Total</th>
                <th>Saída Total</th>
                <th>Saldo Total</th>
            </thead>
        <tbody>

        <?php if ($portugues){ ?>
        <tr>
            <td><?= @$portugues[0]->nome ?></td>
            <td><?= @$portugues[0]->resultado ?></td>
            <td><?= @$portugues[1]->resultado ?></td>
            <td><?= @$portugues[0]->resultado - @$portugues[1]->resultado ?></td>
        </tr><?php } if ($ingles){ ?>
        <tr>
            <td><?= @$ingles[0]->nome ?></td>
            <td><?= @$ingles[0]->resultado ?></td>
            <td><?= @$ingles[1]->resultado ?></td>
            <td><?= @$ingles[0]->resultado - @$ingles[1]->resultado ?></td>
        </tr><?php } if ($padrao){ ?>
        <tr>
            <td><?= @$padrao[0]->nome ?></td>
            <td><?= @$padrao[0]->resultado ?></td>
            <td><?= @$padrao[1]->resultado ?></td>
            <td><?= @$padrao[0]->resultado - @$padrao[1]->resultado ?></td>
        </tr><?php } ?>

        </tbody>
    </table>
    <form action="<?php base_url()?>../movimentar_estoque" method="POST" enctype="multipart/form-data" style="margin-left: 15px">
    <div class="row">
    <div class="col-sm-3">
        <div class="form-group label-floating">
            <label class="control-label">Quantidade</label>
            <input type="number" name="qtd" class="form-control">
            <input type="hidden" name="produto" value="<?= $produto[0]->produto ?>" class="form-control">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
          <select class="form-control" name="idioma" id="idioma">
                <option>-- Selecione o Idioma --</option>
                <option value="0">Padrão</option>
                <option value="2">Inglês</option>
                <option value="1">Português</option>
          </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
          <select class="form-control" name="operacao" id="operacao">
            <option>-- Selecione a Operação --</option>
            <option value="1">Entrada</option>
            <option value="2">Saída</option>
          </select>
        </div>
    </div>
    <div class="col-sm-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div></div></form>

</div></div></div></div></div></div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script> 