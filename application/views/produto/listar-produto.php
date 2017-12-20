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
        <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
            <thead class="text-primary">
                <th>Foto</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estado</th>
                <th>Ativo</th>
                <th style="text-align: right">Ações</th>
            </thead>
        <tbody>
        <?php if($produto){ ?>
        <?php foreach($produto as $row){ ?>
        <?php $foto = ($row->foto !== null) ? base_url('uploads/'.$row->foto) : base_url('assets/img/faces/no-image.png'); ?>
            <tr>
                <td><img src="<?php echo $foto ?>" class="img-responsive"></td>
                <td><?php echo ($row->nome_raridade)?$row->nome." (".$row->nome_raridade.")":$row->nome ?></td>
                <td><?php echo $row->categoria ?></td>
                <td><?php echo substr_replace($row->descricao,(strlen($row->descricao) > 10 ? '...' : ''), 10); ?></td>
                <td><?php echo "R$ ".$row->preco ?></td>
                <td><?php echo $row->estado ?></td>
                <td><?php  echo ($row->ativo == 0)?"Inativo":"Ativo" ?></td>
                <td style="text-align: right"><i class="material-icons">
                        <a href="./alteracao/<?php echo $row->produto ?>" style="color: orange">edit</a>
                        <a href="./promocao/<?php echo $row->produto ?>" style="color: green">money_off</a>
                        <a href="./estoque/<?php echo $row->produto ?>" style="color: #ab47bc">swap_horiz</a>
                    </i></td>
            </tr><?php } } ?>
        </tbody>
    </table>
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