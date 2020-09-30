<?php
if (!$_SESSION['user']['login']) {
    header('Location:index.php?page=home');
}

require_once('app/database.php');

$id = $_GET['id'];

$query = "SELECT * FROM cegek WHERE id = $id ";

if ($res = mysqli_query($connection, $query)) {
    $row = mysqli_fetch_assoc($res);
}

?>

<div class="row justify-content-center pt-1">
    <div class="col-md-9 bg-secondary p-1">
        <h2 class="text-center text-light"><u><?php echo $row['naziv_firme']; ?></u></h2>
        <div class="row justify-content-around">
            <img src="resources/images/<?php echo $row['slika_1']; ?>" style="width:355px; height:255px">
            <img src="resources/images/<?php echo $row['slika_2']; ?>" style="width:355px; height:255px">
        </div>
        <div class="row justify-content-center">
            <table class="table">
                <tr>
                    <th class="text-center">Naziv Firme</th>
                    <td class="text-center"><?php echo $row['naziv_firme']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Email</th>
                    <td class="text-center"><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Opstina</th>
                    <td class="text-center"><?php echo $row['opstina']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Mesto</th>
                    <td class="text-center"><?php echo $row['mesto']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Kategorija</th>
                    <td class="text-center"><?php echo $row['kategorija']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Potkategorija</th>
                    <td class="text-center"><?php echo $row['pod_kategorija']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Delatnost</th>
                    <td class="text-center"><?php echo $row['pod_delatnost']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Radno Vreme</th>
                    <td class="text-center"><?php echo $row['radno_vreme']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Galerija</th>
                    <td class="text-center"><?php echo $row['galerija']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Podaci Firme</th>
                    <td class="text-center"><?php echo $row['podaci_firme']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Gde Smo</th>
                    <td class="text-center"><?php echo $row['gde_smo']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Kontakt</th>
                    <td class="text-center"><?php echo $row['kontakt']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Facebook</th>
                    <td class="text-center"><?php echo $row['facebook']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Youtube</th>
                    <td class="text-center"><?php echo $row['youtube']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">Instagram</th>
                    <td class="text-center"><?php echo $row['instagram']; ?></td>
                </tr>
                <tr>
                    <th class="text-center">News Letter</th>
                    <td class="text-center"><?php echo $row['news_letter'] ?></td>
                </tr>
                <tr>
                    <th class="text-center">RSS</th>
                    <td class="text-center"><?php echo $row['RSS']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>