<?php include_once('../api/read.php') ?>

<?php include_once('../inc/header.php') ?>
<section class="page">
    <div class="page__container">
        <div class="row">
            <h3>Entry Details</h3>
        </div>
        <div class="form" >
            <div class="form__field">
                <label class="field__title">Name</label>
                <p class="field__content"><?php echo $data['name'];?></p>
            </div>
            <div class="form__field">
                <label class="field__title">Description</label>
                <p class="field__content"><?php echo $data['description'];?></p>
            </div>
        </div>
        <div class="form__actions">
            <a class="btn" href="../index.php">Back</a>
        </div>
    </div>
</section>

<?php include_once('../inc/footer.php') ?>