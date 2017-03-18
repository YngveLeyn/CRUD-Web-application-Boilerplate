<?php include_once('../api/read.php') ?>
 
<?php include_once('../inc/header.php') ?>

    <section class="page">
     
                <div class="page__container">
                    <div class="row">
                        <h3>Entry Details</h3>
                    </div>
                     
                    <div class="form" >
                      <div class="form__field">
                        <label class="field__label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="form__field">
                        <label class="field__label">Description</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['description'];?>
                            </label>
                        </div>
                      </div>                     
                      </div>
                        <div class="form__actions">
                          <a class="btn" href="../index.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
            
            </section>
                 
    </div> <!-- /container -->
  </body>
</html>