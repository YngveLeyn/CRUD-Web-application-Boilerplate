<?php
     
    require '../config/database.php';
 
    if ( !empty($_POST)) {
        
         
        // keep track post values
        $name = $_POST['name'];
        $description = $_POST['description'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter a name';
            $valid = false;
        }
         
        if (empty($description)) {
            $descriptionError = 'Please enter a description';
            $valid = false;
        }
         
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO entries (name,description) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$description));
            Database::disconnect();
            header("Location: ../index.php");
        }
    }
?>