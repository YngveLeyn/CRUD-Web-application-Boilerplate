<?php include_once('../api/delete.php') ?>
<?php include_once('../inc/header.php') ?>
<section class="page">
  <div class="page__container">
    <div class="row">
      <h3>Delete an entry</h3>
    </div>
    
    <div class="row">
      <h3>Delete an entry</h3>
    </div>
    
    <form class="form" action="../api/delete.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id;?>"/>
      <p class="alert alert-error">Are you sure to delete ?</p>
      <div class="form-actions">
        <button type="submit" class="btn btn-danger">Yes</button>
        <a class="btn" href="../index.php">No</a>
      </div>
    </form>
  </div>
</section>
<?php include_once('../inc/footer.php') ?>