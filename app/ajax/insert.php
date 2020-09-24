<?php

require_once( '../config.php' );


    $image_1 = $_FILES['image_1']['name'];
    $Naziv_Firme      = mysqli_real_escape_string( $connection, $_POST['Naziv_Firme'] );
    $Opstina          = mysqli_real_escape_string( $connection, $_POST['Opstina'] ); 
    $mesto            = mysqli_real_escape_string( $connection, $_POST['mesto'] ); 
    $Kategorija       = mysqli_real_escape_string( $connection, $_POST['Kategorija'] );
    $Podkategorija    = mysqli_real_escape_string( $connection, $_POST['Podkategorija'] );
    $Facebook         = mysqli_real_escape_string( $connection, $_POST['Facebook'] );
    $Web_Page         = mysqli_real_escape_string( $connection, $_POST['Web_Page'] );
    $Prosireni_Podaci = mysqli_real_escape_string( $connection, $_POST['Prosireni_Podaci'] );
    $O_nama           = mysqli_real_escape_string( $connection, $_POST['O_nama'] );
    $Radno_Vreme      = mysqli_real_escape_string( $connection, $_POST['Radno_Vreme'] );
    $Galerija         = mysqli_real_escape_string( $connection, $_POST['Galerija'] );
    $Podaci_Firme     = mysqli_real_escape_string( $connection, $_POST['Podaci_Firme'] );
    $Gde_smo          = mysqli_real_escape_string( $connection, $_POST['Gde_smo'] );
    $Kontakt          = mysqli_real_escape_string( $connection, $_POST['Kontakt'] );
      $Instagram      = mysqli_real_escape_string( $connection, $_POST['Instagram'] );
    $Youtube          = mysqli_real_escape_string( $connection, $_POST['Youtube'] );
    $News_Letter      = mysqli_real_escape_string( $connection, $_POST['News_Letter'] );
    $RSS              = mysqli_real_escape_string( $connection, $_POST['RSS'] );
    $Reklam_1         = mysqli_real_escape_string( $connection, $_POST['Reklam_1'] );
    $Reklam_2         = mysqli_real_escape_string( $connection, $_POST['Reklam_2'] );
    $Email            = mysqli_real_escape_string( $connection, $_POST['Email'] );
    $Radno_Vreme_2    = mysqli_real_escape_string( $connection, $_POST['Radno_Vreme_2'] );
    $Pod_Delatnost    = mysqli_real_escape_string( $connection, $_POST['Pod_Delatnost'] );
    // $Pod_Delatnost_2 = mysqli_real_escape_string($connection, $_POST['Pod_Delatnost_2']);
    // $Pod_Delatnost_3 = mysqli_real_escape_string($connection, $_POST['Pod_Delatnost_3']);
    // $Pod_Delatnost_4 = mysqli_real_escape_string($connection, $_POST['Pod_Delatnost_4']);
    // $Pod_Delatnost_5 = mysqli_real_escape_string($connection, $_POST['Pod_Delatnost_5']);

    $target = 'images/' . basename($image_1);


    if( isset( $_FILES['image_1'] ) ) {
        $image_1 = $_FILES['image_1']['name'];

        if( move_uploaded_file( $_FILES['image_1']['tmp_name'], '../../resources/images/' . basename( $image_1 ) ) ) {
            echo 'upload ok';
        }else{
            echo 'nok';
        }
    }

    if( isset( $_FILES['image_2'] ) ) {
        $image_2 = $_FILES['image_2']['name'];

        if( move_uploaded_file( $_FILES['image_2']['tmp_name'], 'images/' . basename( $image_2 ) ) ) {
            echo 'upload ok';
        } else {
            echo 'upload nok';
        }
    }

    $query = "INSERT INTO cegek (Naziv_Firme, Opstina, mesto, Kategorija, Podkategorija, Pod_Delatnost, image_1, image_2, Facebook, Web_Page, Prosireni_Podaci, O_nama, Radno_Vreme, Galerija, Podaci_Firme, Gde_smo, Kontakt, Instagram, Youtube, News_Letter, RSS, Reklam_1, Reklam_2, Email, Radno_Vreme_2) VALUES ('$Naziv_Firme', '$Opstina', '$mesto', '$Kategorija', '$Podkategorija', '$Pod_Delatnost', '$image_1', '$image_2', '$Facebook', '$Web_Page', '$Prosireni_Podaci', '$O_nama', '$Radno_Vreme', '$Galerija', '$Podaci_Firme', '$Gde_smo', '$Kontakt', '$Instagram', '$Youtube', '$News_Letter', '$RSS', '$Reklam_1', '$Reklam_2', '$Email', '$Radno_Vreme_2')";
    
    //    $res = mysqli_query( $connection, $query );

    if (mysqli_query( $connection, $query ) ) {
        // header( 'Location:index.php' );
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
// }