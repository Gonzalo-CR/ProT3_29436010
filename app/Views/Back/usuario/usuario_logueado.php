<div class="container mt-5">
    <div class="row justify-content-md-center">
        < class="col-5">
        <?php if (session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>
            <br><br>
            <?php if(session()->perfil_id == 1):?>
                <div>
                 <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/admin.png');?>" alt="User Admin">
                </div>
            <?php elseif(session()->perfil_id == 2):?>
                <div>
                 <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/cliente.png');?>" alt="User Cliente">
                </div>    
                <?php endif;?>
        </div>
    </div>

</div>