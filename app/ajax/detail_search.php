<?php
require_once( '../database.php' );

if( isset( $_POST['search'] ) ) {
    $opstina = mysqli_real_escape_string($connection,$_POST['area']);
    $search = mysqli_real_escape_string($connection,$_POST['search']);
    // $search = $_POST['search'];
    $query =  "SELECT * FROM cegek WHERE opstina = '".$opstina."'
                AND naziv_firme LIKE '%".$search."%'
                OR mesto LIKE '%".$search."%'
                OR kategorija LIKE '%".$search."%'
                OR pod_kategorija LIKE '%".$search."%'
                OR pod_delatnost LIKE '%".$search."%'";
              

    if( $result = mysqli_query( $connection, $query ) ) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo json_encode($row);
        }        
    } else {
        echo 'Error ' . $query . '<br>' . mysqli_error( $connection );
    }

}