<?php
require_once( '../database.php' );
// $connection = mysqli_connect( 'localhost', 'root', '', 'cegek' );
// print_r( $_POST['search'] );
if( isset( $_POST['search'] ) ) {
    $search = $_POST['search'];
    // $search = mysqli_real_escape_string( $connection, $_POST['search'] );

    // print_r( $search );
    $query = "SELECT * FROM cegek 
            WHERE naziv_firme LIKE '%".$search."%'
            OR opstina LIKE '%".$search."%' 
            OR mesto LIKE '%".$search."%' 
            OR kategorija LIKE '%".$search."%' 
            OR podkategorija LIKE '%".$search."%'
            ";
} else {
    $query = 'SELECT * FROM cegek ORDER BY id';
}

$result = mysqli_query( $connection, $query );

while( $row = mysqli_fetch_assoc( $result ) ) {

    
    // echo json_encode( $row );
    $markup =' 
    <div class="border border-secondary mb-2 p-1 rounded-sm">
        <div class=" row mt-4">
            <div class="col-sm-12">
                <h1 class="text-center text-light bg-dark">Mesto: '. $row['mesto'].'</h1>
                <h1 class="text-center text-light bg-dark">Delatnost: '.$row['podkategorija']. '</h1>
                <h1 class="text-center text-light bg-dark">Naziv Firme: '.$row['naziv_firme'].'</h1>

                '. ($row['client_type'] !== 1 ? 
                    '<div class="row justify-content-center">'

                        .($row['slika_1'] ?
                            '<img src="resources/images/'.$row['slika_1'].' "style="width:355px; height:255px">'
                        : "" ) . '

                        '.($row['slika_2'] ?
                            '<img src="resources/images/'.$row['slika_2'].' "style="width:355px; height:255px">'
                        : "" ) . 
                    '</div>'
                    : "" ) . '
            </div>
        </div>
    </div>
'; 
    echo $markup;
}
