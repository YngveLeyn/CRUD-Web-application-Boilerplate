<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <title>Web Application Boilerplate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body> 
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->   

        <?php
            include 'config/database.php';
            $pdo = Database::connect();
            $sql = 'SELECT * FROM entries ORDER BY id DESC';
           
                foreach ($pdo->query($sql) as $row) {
                        echo '<tr>';
                        echo '<td>'. $row['id'] . '</td>';
                        echo '<td>'. $row['name'] . '</td>';
                        echo '<td>'. $row['description'] . '</td>';
                        echo '</tr>';
                }
            
            Database::disconnect();
        ?>
     
        <script src="js/app.js"></script>
    </body>
</html>

