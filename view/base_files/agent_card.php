<?php foreach ($list as $pom){?>
<div class="col text-dark">
    <div class="col text-white mb-2">
        <div class="row mr-0 ml-0">
            <div class="col mt-2 mb-3">
                <span class="small text-info">ID:</span>
                <input type="text" placeholder="<?php echo $pom['id_users']?>" class="form-control form-control-sm" readonly>
            </div>
            <div class="col mt-2 mb-3">
                <span class="small text-info">Username:</span>
                <input type="text" placeholder="<?php echo $pom['username']?>" class="form-control form-control-sm" readonly>
            </div>
        </div>
    </div>
    <div class="row mt-4 border border_color">
        <div class="col mt-3 mb-3">
            <div class="form-group">
                <a class="btn btn-outline-secondary form-control form-control mb-2" href="delete&id=<?php echo $pom['id_users'];?>&class=agent">Delete</a>
                <a class="btn btn-outline-secondary form-control form-control mb-2" href="#">Print</a>
                <a class="btn btn-outline-secondary form-control form-control mb-2" href="agent_card&id_users=<?php echo $pom['id_users']?>&action=edit">Update</a>
            </div>
        </div>
        <div class="col-2 mt-2">
            <span class="small text-dark">Name surname:</span>
            <input type="text" placeholder="<?php echo $pom['name_surname']?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 mt-2">
            <span class="small text-dark">Phone:</span>
            <input type="text" placeholder="<?php echo $pom['phone']?>" class="form-control form-control-sm">
        </div>
        <div class="col-3 mt-2 mb-3">
            <span class="small text-dark">e-mail:</span>
            <input type="text" placeholder="<?php echo $pom['e_mail']?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 mt-2">
            <span class="small text-dark">Adresa:</span>
            <input type="text" placeholder="<?php echo $pom['address']?>" class="form-control form-control-sm">
        </div>
        <div class="col-2 mt-2">
        </div>

    </div>
    <?php }?>
</div>