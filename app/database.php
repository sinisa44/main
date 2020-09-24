<?php

try{
    $connection =  mysqli_connect( 'localhost', 'root', '', 'main' );
} catch ( Exception $e ) {
    echo $e->getMessage();
}