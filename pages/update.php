<?php include_once('../api/update.php') ?>
<?php include_once('../inc/header.php') ?>
<section class="page">
    <div class="page__container">
        <div class="row">
            <h3>Update an entry</h3>
        </div>
        
        <form class="form" action="update.php?id=<?php echo $id?>" method="post">
            <div class="form__field <?php echo !empty($nameError)?'error':'';?>">
                <label class="field__label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                    <?php if (!empty($nameError)): ?>
                    <span class="input__notification"><?php echo $nameError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form__field <?php echo !empty($descriptionError)?'error':'';?>">
                <label class="field__label">Description</label>
                <div class="controls">
                    <input name="description" type="text" placeholder="Description" value="<?php echo !empty($description)?$description:'';?>">
                    <?php if (!empty($descriptionError)): ?>
                    <span class="input__notification"><?php echo $descriptionError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" href="../index.php">Back</a>
            </div>
        </form>
    </div>
</section>
<?php include_once('../inc/footer.php') ?>