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
    <div class="row">
    <form action="<?php base_url()?>cadastra_sociais" method="POST">
        <div class="col-md-7"><?php foreach($facebook as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Facebook</label>
                <input type="text" name="facebook" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- INSTAGRAM -->
    <div class="row">
        <div class="col-md-7"><?php foreach($instagram as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Instagram</label>
                <input type="text" name="instagram" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- TWITTER -->
    <div class="row">
        <div class="col-md-7"><?php foreach($twitter as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Twitter</label>
                <input type="text" name="twitter" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- LINKEDIN -->
    <div class="row">
        <div class="col-md-7"><?php foreach($linkedin as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Linked In</label>
                <input type="text" name="linkedin" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- EMAIL -->
    <div class="row">
        <div class="col-md-7"><?php foreach($email as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">E-mail</label>
                <input type="text" name="email" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>

    <!-- WHATSAPP -->
    <div class="row">
        <div class="col-md-7"><?php foreach($whatsapp as $row){ ?>
            <div class="form-group label-floating">
                <label class="control-label">Whatsapp</label>
                <input type="text" name="whatsapp" value="<?php echo $row->link ?>" class="form-control">
            </div>
        </div><?php } ?>
    </div>
        <button type="submit" class="btn btn-primary pull-right">Salvar</button></div>
    </div>
</div></form>
    </div>
</div>
</div>