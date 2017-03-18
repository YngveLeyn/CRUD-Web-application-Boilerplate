        <section class="page">
            <div class="page__container">
                <h1 class="title--hero">Our database</h1>
        <div class="entries table">
            <div class="row">
                <div class="col-2">ID</div>
                <div class="col-3">Name</div>
                <div class="col-4">Description</div>
                <div class="col-3">Actions</div>

            </div>
        <?php
            include 'config/database.php';
            $pdo = Database::connect();
            $sql = 'SELECT * FROM entries ORDER BY id DESC';
            
                foreach ($pdo->query($sql) as $row) {
                        echo '<div class="row">';
                        echo '<div class="col-2">'. $row['id'] . '</div>';
                        echo '<div class="col-3">'. $row['name'] . '</div>';
                        echo '<div class="col-4">'. $row['description'] . '</div>';
                        echo '<div class="col-3"> 
                                <a href="../pages/read.php?id='.$row['id'].'">
                                    <i class="fa fa-folder-open-o"></i> 
                                </a>
                                <a href="../pages/update.php?id='.$row['id'].'">
                                    <i class="fa fa-pencil-square-o"></i> 
                                </a>
                                <a href="../pages/delete.php?id='.$row['id'].'">
                                    <i class="fa fa-trash"></i> 
                                </a>
                        </div>';
                        echo '</div>';
                } 

            Database::disconnect();
        ?>
        </div>
     </div>
     <div class="admin-panel">
        <p><a href="pages/create.php" class="btn--round"> <i class="fa fa-plus"></i> New entry </a></p>
     </div>
     </section>