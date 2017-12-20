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
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Lista de Categorias</h4>
        <p class="category">Aqui você vê todas as categorias de produtos cadastradas no sistema.</p>
    </div>
    <div class="card-content table-responsive">
    <table class="table">
            <thead class="text-primary">
                <th>Nome</th>
                <th>Descrição</th>
                <th>Menu</th>
                <th style="text-align: right">Ações</th>
            </thead>
        <tbody><?php foreach($categoria as $row){ ?>
            <tr>
                <td><?php echo $row->nome ?></td>
                <td><?php echo $row->descricao ?></td>
                <td><?php echo $row->nome_menu ?></td>
                <td style="text-align: right"><i class="material-icons">
                    <a href="<?= base_url();?>categorias/listar_categoria/<?= $row->categoria?>" style="color: green">edit</a>
                    <a href="<?= base_url();?>categorias/deletar_categoria/<?= $row->categoria?>" style="color: orange">delete</a>
                    </i></td>
            </tr><?php } ?>
        </tbody>
    </table>
</div></div></div></div></div></div>