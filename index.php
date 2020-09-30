<?php
session_start();
require_once('./app/database.php');

$query = 'SELECT * FROM cegek';

$results = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="resources/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
   
    <link rel="stylesheet" href="resources/css/tokenize/tokenize2.min.css">
    <script src="resources/css/bootstrap/bootstrap.min.js"></script>
</head>

<body>
    <?php include_once('./resources/views/navigation.php'); ?>

    <div class="container" id="default-data">
        <?php if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'home':
                    $page = 'home';
                    break;
                case 'login':
                    $page = 'login';
                    break;
                case 'register':
                    $page = 'register';
                    break;
                case 'insert':
                    $page = 'insert';
                    break;
                case 'admin':
                    $page = 'admin';
                    break;
                case 'update':
                    $page = 'update';
                    break;
                case 'adv';
                    $page = 'show';
                    break;
                default:
                    $page = 'home';
                    break;
            }
        } else {
            $page = 'home';
        } ?>

        <?php include_once('./resources/views/' . $page . '.php'); ?>
    </div>

    <script src="resources/js/tokenize/tokenize2.min.js"></script>
    <script src=" resources/js/app.js"> </script>
</body>

</html>