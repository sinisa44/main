<?php

require_once( '../database.php' );

print_r( $_POST );

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
$post_id = $_POST[ 'post_id' ];
