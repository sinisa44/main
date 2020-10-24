<?php
require_once('../database.php' );

if( $_POST['type']  == 'allow' ) {
    $id = $_POST['data'];

    $query = "UPDATE cegek SET dozvoljeno=1 where id='{$id}'";

    if( $res = mysqli_query( $connection, $query ) ) {
        echo json_encode( 'ok' );
    }
}

if(  $_POST['type'] == 'category'  ) {

    $array = array();

    $category_name = $_POST['data'];
    
    $query = "SELECT * FROM subcategory WHERE category_name = '{$category_name}'";
    
    $res = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $res ) ) {

        $id   = $row['id'];
        $name = $row['name'];
        $cat_name = $row['category_name'];

        $array[] = array( 'id'      => $id, 
                          'name'    => $name,
                          'cat_name'=> $cat_name   
                        );
      
    }

    echo json_encode( $array );
 
}

 if( $_POST['type']  == 'area' ) {
    $areas = array();

    $area_name = $_POST['data' ];

    $query = "SELECT * FROM city WHERE area_name = '{$area_name}'";

    $res = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $res ) ) {
        $areas[] = array( 
            'id'        => $row['id'],
            'name'      => $row['name'],
            'area_name' => $row['area_name']
        );
    }

    echo json_encode( $areas );
}