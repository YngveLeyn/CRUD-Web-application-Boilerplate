<?php include_once('../inc/header.php') ?>
<?php include_once('../api/create.php') ?>
<section class="page">  
    <div class="page__container">
        <div class="row">
            <h2>New entry</h2>   
        </div>
    
        <form class="form" action="../pages/create.php" method="post">
           <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($descriptionError)?'error':'';?>">
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <input name="description" type="text"  placeholder="Description" value="<?php echo !empty($description)?$description:'';?>">
                            <?php if (!empty($descriptionError)): ?>
                                <span class="help-inline"><?php echo $descriptionError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>       
            <div class="form__actions">
                <button type="submit" class="btn">Create</button>
                <a class="btn" href="../index.php">Back</a>
            </div>
        </form>
</section>
                 

<?php include_once('../inc/footer.php') ?>
