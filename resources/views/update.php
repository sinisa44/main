<?php
if (!isset($_SESSION['user']['login'])) {
    header('Location:index.php?page=home');
}

$row_id = $_GET['p_id'];

$query = "SELECT * FROM cegek where id = $row_id ";

if ($res = mysqli_query($connection, $query)) {
    $row = mysqli_fetch_assoc($res);
}

?>

<div class="row justify-content-center">
    <h1>Ažuriranje</h1>
    <div class="col-md-6">
        <form action="app/ajax/update.php" method="POST" id="update-form" enctype="multipart/form-data">
            <input type="hidden" name="post_id" value="<?php echo $row['id'] ?>">

            <div class="form-group">
                <label for="name">Naziv Firme</label>
                <input name="Naziv_Firme" type="text" class="form-control" id="exampleInputEmail1" value=" <?php echo $row['naziv_firme']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input name="Email" type="mail" class="form-control" id="exampleInputEmail1" value="<?php echo $row['email']; ?>">
            </div>
            <hr class="new5">
            <div class="form-group">
                <label for="website">Web Page</label>
                <input type="text" name="Web_Page" class="form-control" value="<?php echo $row['web_page']; ?> ">
            </div>

            <div class="form-group">
                <label for="about">O nama</label>
                <input type="text" name="O_nama" class="form-control" value="<?php echo $row['o_nama']; ?>">
            </div>
            <div class="form-group">
                <label for="worktime">Radno Vreme</label>
                <input name="Radno_Vreme" type="text" class="form-control" value="<?php echo $row['radno_vreme_1']; ?>">
            </div>

            <div class="form-group">
                <label for="gallery">Galerija</label>
                <input type="text" name="Galerija" class="form-control" value="<?php echo $row['galerija']; ?>">
            </div>


            <div class="form-group">
                <label for="info">Podaci Firme</label>
                <input type="text" name="Podaci_Firme" class="form-control" value="<?php echo $row['podaci_firme']; ?>">
            </div>

            <div class="form-group">
                <label for="address">Gde smo (Google maps):</label>
                <input type="text" name="Gde_smo" class="form-control" value="<?php echo $row['gde_smo']; ?>">
            </div>

            <div class="form-group">
                <label for="contact">Kontakt</label>
                <input type="text" name="Kontakt" class="form-control" value="<?php echo $row['kontakt']; ?>">
            </div>
            <hr class="new5">
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" name="Instagram" class="form-control" value="<?php echo $row['kontakt']; ?>">
            </div>


            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="Facebook" class="form-control" value="<?php echo $row['facebook']; ?>">
            </div>


            <div class="form-group">
                <label for="youtube">Youtube</label>
                <input type="text" name="Youtube" class="form-control" value="<?php echo $row['youtube']; ?>">
            </div>
            <div class="form-group">
                <label for="newsletter">News Letter:</label>
                <input type="text" name="News_Letter" class="form-control" value="<?php echo $row['news_letter']; ?>">
            </div>

            <div class="form-group">
                <label for="RSS">RSS</label>
                <input type="text" name="RSS" class="form-control" value="<?php echo $row['RSS']; ?>">
            </div>

            <hr class="new5">

            <div class="form-group">
                <label for="Opstina">Opstina</label>
                <select name="Opstina" id="area" class="form-control">
                    <option value="<?php echo $row['opstina']; ?>" selected><?php echo $row['opstina']; ?></option>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'advertiser');

                    $q = mysqli_query($connection, 'SELECT * FROM area ');

                    while ($areas = mysqli_fetch_assoc($q)) : ?>
                        <option value="<?php echo $areas['name'] ?>"> <?= $areas['name'] ?></option>

                    <?php endwhile ?>
                </select>
            </div>


            <div class="form-group">
                <label for="mesto">Grad</label>
                <select name="mesto" id="city" class="form-control">
                    <option value="<?php echo $row['mesto']; ?>" selected><?php echo $row['mesto']; ?></option>
                    <!-- <option value="test" selected>Izaberite grad</option> -->
                </select>
            </div>

            <hr class="new5">

            <div class="form-group">
                <label for="Kategorija">Kategorija</label>
                <select name="Kategorija" class="form-control" id="category">
                    <option value="<?php echo $row['kategorija']; ?>" selected><?php echo $row['kategorija']; ?></option>
                    <?php
                    $ress = mysqli_query($connection, 'SELECT * FROM category');

                    while ($rows = mysqli_fetch_assoc($ress)) : ?>
                        <option value="<?php echo $rows['name'];  ?>"> <?php echo $rows['name']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="Podkategorija">Podkategorija</label>
                <select name="Podkategorija" class="form-control" id="subcategory">
                    <option value="<?php echo $row['pod_kategorija']; ?>" selected><?php echo $row['pod_kategorija'] ?></option>
                </select>
            </div>

            <div class="form-group">
                <label for="Pod_Delatnost">Pod Delatnost 1</label>
                <!-- <input type="text" name="Pod_Delatnost_1" class="form-control"> -->
                <select name="Pod_Delatnost" id="tokenize-1" class="form-control" multiple>
                    <option value="<?php echo $row['pod_delatnost'] ?>" selected><?php echo $row['pod_delatnost'] ?></option>
                    <?php
                    $resa = mysqli_query($db, 'SELECT * FROM subcategory');

                    while ($roww = mysqli_fetch_assoc($resa)) : ?>
                        <option value="<?php echo $roww['name']; ?>"><?php echo $roww['name']; ?></option>
                    <?php endwhile ?>
                </select>
            </div>

            <hr class="new5">

            <div class="form-group">
                <label for="image_1">Visit card Page 1</label>
                <input type="file" class="form-control" name="image_1" value=""><span><?php echo $row['slika_1'] ?></span>
            </div>
            <div class="form-group">
                <label for="image_2">Visit card Page 2</label>
                <input type="file" class="form-control" name="image_2" value="<?php echo $row['slika_2']; ?>">
                <span><?php echo $row['slika_2']; ?></span>
            </div>

            <hr class="new5">

            <div class="form-group">
                <label for="widedata">Prošireni podaci</label>
                <select name="Prosireni_Podaci" id="" class="form-control">
                    <option value="<?php echo $row['prosireni_podaci']; ?>" selected><?php echo strtoupper($row['prosireni_podaci']); ?></option>
                    <option value="ne">NE</option>
                    <option value="da">Da</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="upload">Azuriraj</button>
        </form>
    </div>

    <div class="update-modal modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Uspešno ste ažurirali podatke</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
             
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>
</div>