<h4 class="display-5 text-secondary mt-4 text-center"><?php echo ucfirst($page) ?></h4>
<div class="row justify-content-center text-white mt-1">
    <?php foreach ($list as $li){?>
        <div class="col-6 col-sm-5 text-left text-info mb-2 pt-1 border-bottom">
            <span><?php echo $li['name'];?></span>
        </div>
        <div class="col-6 col-sm-3 text-center mb-2 border-bottom">
            <a href="delete_<?php echo $page?>&id=<?php echo $li['id'];?>" class="btn btn-light btn-sm btn-block" role="button" aria-pressed="true"><strong class="text-danger">X</strong></a>
        </div>
    <?php  } ?>
</div>
<form action="new_<?php echo $page?>" method="post">
    <div class="row justify-content-center text-dark mt-2">
        <div class="col-6 col-sm-5 text-left mt-2 mb-2">
            <span>add new:</span>
        </div>
        <div class="col-6 col-sm-3 text-center">
            <input type="text" name="new" maxlength="30" class="form-control pt-1 pb-1"><span class="msg text-danger"><?php if(array_key_exists('new', $errors)) echo $errors['new']?></span>
        </div>
    </div>
    <div class="row justify-content-center text-white mt-2">
        <div class="col-6 col-sm-5 text-left">
        </div>
        <div class="col-6 col-sm-3 text-center">
            <button class="btn btn-sm btn-secondary btn-block" type="submit" name="page" value="confirm">Add new</button>
        </div>
    </div>
</form>
