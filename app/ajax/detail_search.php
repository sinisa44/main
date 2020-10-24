<?php
require_once( '../database.php' );

if( isset( $_POST['search'] ) ) {


    $opstina = mysqli_real_escape_string($connection,$_POST['area']);
    $search = mysqli_real_escape_string($connection,$_POST['search']);
    $mesto = mysqli_real_escape_string( $connection, $_POST['location'] );
    // $search = $_POST['search'];
    $query =  "SELECT * FROM cegek WHERE opstina = '".$opstina."'
                AND mesto = '".$mesto."'
                AND naziv_firme LIKE '%".$search."%'
                OR mesto LIKE '%".$search."%'
                OR kategorija LIKE '%".$search."%'
                OR pod_kategorija LIKE '%".$search."%'
                OR pod_delatnost LIKE '%".$search."%'
                OR instagram LIKE '%".$search."%'";
              

    if( $result = mysqli_query( $connection, $query ) ) {
        while ($row = mysqli_fetch_assoc($result)) {
            $markup = ' 
                    <div class="border border-secondary mb-2 p-1 rounded-sm">
                        <div class=" row mt-4">
                            <div class="col-sm-12">
                                <h1 class="text-center text-light bg-dark">Mesto: ' . $row['mesto'] . '</h1>
                                <h1 class="text-center text-light bg-dark">Delatnost: ' . $row['pod_kategorija'] . '</h1>
                                <h1 class="text-center text-light bg-dark">Naziv Firme: ' . $row['naziv_firme'] . '</h1>

                                ' . ($row['client_type'] !== 1 ?
                                '<div class="row justify-content-center">'

                                . ($row['slika_1'] ?
                                    '<img src="resources/images/' . $row['slika_1'] . ' "style="width:355px; height:255px">'
                                    : "") . '

                                        ' . ($row['slika_2'] ?
                                    '<img src="resources/images/' . $row['slika_2'] . ' "style="width:355px; height:255px">'
                                    : "") .
                                '</div>'
                                : "") . '
                            </div>
                        </div>
                    </div>
                ';
            echo $markup;
        }        
    } else {
        echo 'Error ' . $query . '<br>' . mysqli_error( $connection );
    }

}