<?php
if( ! $_SESSION['user']['login']) {
    header( 'Location:index.php?page=home' );
}

require_once( 'app/database.php' );

$id = $_GET['id' ];

$query = "SELECT * FROM cegek WHERE id = $id ";

if( $res = mysqli_query( $connection, $query ) ) {
    $row = mysqli_fetch_assoc( $res );
}

print_r( $row );
