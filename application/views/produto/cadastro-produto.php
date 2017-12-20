<?php
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
            <h4 class="title">Cadastrar Produto</h4>
            <p class="category">Cadastre seus produtos, para que eles apareçam na loja</p>
        </div>
        <div class="card-content">
        <form action="<?php base_url()?>../produtos/cadastrar" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group label-floating">
                <label class="control-label">Nome do Produto</label>
                <input type="text" name="nome" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <select class="form-control" name="categoria" id="sel1">
                    <option>-- Categoria --</option>
                    <?php foreach ($categoria as $row) { ?>
                    <option value="<?php echo $row->categoria; ?>"><?php echo $row->nome; ?></option>
                <?php } ?>
              </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group label-floating">
                <label class="control-label">Peso</label>
                <input type="text" name="peso" class="form-control">
            </div>
        </div></div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group label-floating">
                    <label class="control-label">Preço</label>
                    <input type="text" name="preco" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <select class="form-control" name="ativo" id="sel1">
                    <option>-- Visibilidade --</option>
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
            </div></div>
            <div class="col-md-3">
                <select class="form-control" name="raridade" id="sel1">
                    <option>-- Raridade --</option>
                    <option value="7">Comum</option>
                    <option value="1">Rara</option>
                    <option value="2">Super Rara</option>
                    <option value="3">Ultra Rara</option>
                    <option value="4">Secreta Rara</option>
                    <option value="5">Ultimate Rare</option>
                    <option value="6">Ghost Rare</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="estado" id="estado">
                    <option>-- Estado do produto --</option>
                    <option value="Novo">Novo</option>
                    <option value="Semi-novo">Semi-novo</option>
                    <option value="Usado">Usado</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descrição do Produto</label>
                    <div class="form-group label-floating">
                        <label class="control-label"> Digite aqui dados sobre o produto.</label>
                        <textarea class="form-control" maxlength="500" name="descricao" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
            <a href="./listar" style="color: #fff"><input type="button" class="btn btn-success pull-left" value="Ver Todos"></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-profile">
        <div class="card-avatar">
            <a href="#"><?php echo $this->session->flashdata('retorno'); ?>
                <img class="img-responsive" src="../assets/img/faces/semfoto.jpg" />
            </a>
        </div>
        <div class="content">
            
            <h4 class="card-title"></h4>
            <p class="card-content">
                Clique em "Escolher arquivo" para escolher a imagem do seu produto.
            </p>
             <input type="file" style="margin: 15px" name="userfile">
        </div>
        </form>
    </div>
</div>
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