<?php include_once('../inc/header.php') ?>
<section class="page">  
    <div class="page__container">
        <div class="row">
            <h2>New entry</h2>   
        </div>
    
        <form class="form" action="../api/create.php" method="post">
            <div class="form__field <?php echo !empty($nameError)?'error':'';?>">
            <label class="field__label">Name</label>
                <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
            </div>
            <div class="form__field <?php echo !empty($descriptionError)?'error':'';?>">
            <label class="field__label">Description</label>
                <input name="description" type="text" placeholder="Description" value="<?php echo !empty($description)?$description:'';?>">
            </div>                      
            <div class="form__actions">
                <button type="submit" class="btn">Create</button>
                <a class="btn" href="../index.php">Back</a>
            </div>
        </form>
</section>
                 

<?php include_once('../inc/footer.php') ?>
