<?php

require_once( '../database.php' );

// print_r( $_POST );
// die();

$naziv_firme = mysqli_real_escape_string( $connection , $_POST['Naziv_Firme'] );
$email = mysqli_real_escape_string( $connection , $_POST['Email'] );
$web_page = mysqli_real_escape_string( $connection , $_POST['Web_Page'] );
$o_nama = mysqli_real_escape_string( $connection , $_POST['O_nama'] );
$radno_vreme = mysqli_real_escape_string( $connection , $_POST['Radno_Vreme'] );
$galerija = mysqli_real_escape_string( $connection , $_POST['Galerija'] );
$podaci_firme = mysqli_real_escape_string( $connection , $_POST['Podaci_Firme'] );
$gde_smo = mysqli_real_escape_string( $connection , $_POST['Gde_smo'] );
$kontakt = mysqli_real_escape_string( $connection , $_POST['Kontakt'] );
$instagram = mysqli_real_escape_string( $connection , $_POST['Instagram'] );
$facebook = mysqli_real_escape_string( $connection , $_POST['Facebook'] );
$youtube = mysqli_real_escape_string( $connection , $_POST['Youtube'] );
$newsletter = mysqli_real_escape_string( $connection , $_POST['News_Letter'] );
$rss = mysqli_real_escape_string( $connection , $_POST['RSS'] );
$opstina = mysqli_real_escape_string( $connection , $_POST['Opstina'] );
$mesto = mysqli_real_escape_string( $connection , $_POST['mesto'] );
$kategorija = mysqli_real_escape_string( $connection , $_POST['Kategorija'] );
$podkategorija = mysqli_real_escape_string( $connection , $_POST['Podkategorija'] );
$pod_delatnost = mysqli_real_escape_string( $connection , $_POST['Pod_Delatnost'] );
$prosireni_podaci = mysqli_real_escape_string( $connection, $_POST['Prosireni_Podaci'] );
$post_id = $_POST[ 'post_id' ];

$query = "UPDATE cegek SET
          naziv_firme='$naziv_firme',
          email='$email',
          opstina='$opstina',
          mesto='$mesto',
          kategorija='$kategorija',
          pod_kategorija='$podkategorija',
          pod_delatnost='$pod_delatnost',
          radno_vreme='$radno_vreme',
          galerija='$galerija',
          podaci_firme='$podaci_firme',
          gde_smo='$gde_smo',
          kontakt='$kontakt',
          facebook='$facebook',
          web_page='$web_page',
          prosireni_podaci='$prosireni_podaci',
          instagram='$instagram',
          youtube='$youtube',
          news_letter='$newsletter',
          RSS='$rss'
          
          WHERE id=$post_id";


echo $query;

if( mysqli_query( $connection, $query ) ) {
    echo 'update ok';
} else {
    echo 'Error: ' . $query . "<br>" . mysqli_error( $connection );
}