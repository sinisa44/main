<?php
session_start();
    require_once( './app/database.php' );  

    $query = 'SELECT * FROM cegek';

    $results = mysqli_query( $connection, $query );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="resources/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/tokenize/tokenize2.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <?php include_once( './resources/views/navigation.php' ); ?>

    <div class="container" id="default-data">
    <?php if( isset( $_GET['page'] ) ) {
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
            default:
                $page = 'home';
                break;
        }
    } else { $page = 'home';} ?>

<?php include_once( './resources/views/'. $page .'.php'); ?>
    </div>

    <script src="resources/js/tokenize/tokenize2.min.js"></script>
    <script src = " resources/js/app.js"> </script>
</body>
</html>