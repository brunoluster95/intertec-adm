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
        <h4 class="title">Painel de Configuração</h4>
        <p class="category">Aqui você configura a sua loja.</p>
    </div>
    <div class="card-content table-responsive">
    <table class="table">
            <thead class="text-primary">
                <th>Nome</th>
                <th>Descrição</th>
                <th style="text-align: right">Ações</th>
            </thead>
        <tbody>
        <?php foreach($config as $row){ ?>
            <tr>
                <td class="col-md-2"><?php echo $row->nome ?></td>
                <td class="col-md-4"><?php echo substr_replace($row->descricao,(strlen($row->descricao) > 140 ? '...' : ''), 140); ?></td>
                <td class="col-md-1" style="text-align: right"><i class="material-icons">
                        <a href="<?php echo base_url()?>config/cadastro/<?php echo $row->config ?>" style="color: orange">edit</a>
                    </i></td>
            </tr><?php } ?>
        </tbody>
    </table>
</div></div></div></div></div></div>