<script type="text/javascript">
    $(document).ready(function(){
        $('#tabela').DataTable();
    });
</script>
<style type="text/css">
    tbody :hover{
        background-color: #dcdcdc !important;
    }
    .odd{
        background-color: #f5f5f5 !important; 
    }
    .sorting_1{
        background-color: transparent !important;
    }
</style>
<style type="text/css" src="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Lista de Promoções</h4>
        <p class="category">Aqui você vê todas as promoções cadastradas no sistema.</p>
    </div>
    <div class="card-content table-responsive">
    <table class="table">
        <thead class="text-primary">
            <th></th>
            <th>Nome do Produto</th>
            <th>Valor em R$</th>
            <th>Data Início</th>
            <th>Data Final</th>
            <th style="text-align: center">Ações</th>
        </thead>
        
    <?php if ($produto){ ?>
    <tbody>
        <?php foreach($produto as $row){ ?>        
        <tr>
        <?php $foto = ($row->foto !== null) ? base_url('uploads/'.$row->foto) : base_url('assets/img/faces/no-image.png'); ?>
            <td class="col-md-1"><img src="<?php echo $foto ?>" class="img-responsive" style="width: 62px;height: 80px"></td>
            <td class="col-md-2"><?php echo $row->nome  ?></td>
            <td class="col-md-2"><?php echo "R$ ".$row->valor  ?></td>
            <td class="col-md-1"><?php echo $row->inicio ?></td>
            <td class="col-md-1"><?php echo $row->fim ?></td>
            <td class="col-md-1" style="text-align: center"><i class="material-icons">
                <a href="./excluirpromo/<?php echo $row->id ?>" style="color: red">delete</a>
            </i></td>
            
            </i></td>
        </tr><?php } ?>
        </tbody>
        
    </table>
    <?php } else {
        echo "<td>Não há dados.</td>"; } ?>
</div></div></div></div></div></div>