<div class="row justify-content-center">
            <div class="col-md-6">
                <form action="insert.php" method="POST" enctype="multipart/form-data" id="add-form">
                <hr class="new5">
                    <div class="form-group">
                        <label for="name">Naziv Firme</label>
                        <input name="Naziv_Firme" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input name="Email" type="mail" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="name">Reklam leve strane</label>
                        <input name="Reklam_2" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="name">Reklam srednje strane</label>
                        <input name="Reklam_1" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <hr class="new5">
                    <div class="form-group">
                        <label for="website">Web Page</label>
                        <input type="text" name="Web_Page" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="about">O nama</label>
                        <input type="text" name="O_nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="worktime">Radno Vreme</label>
                        <input name="Radno_Vreme" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gallery">Galerija</label>
                        <input type="text" name="Galerija" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="info">Podaci Firme</label>
                        <input type="text" name="Podaci_Firme" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Gde smo (Google maps):</label>
                        <input type="text" name="Gde_smo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="contact">Kontakt</label>
                        <input type="text" name="Kontakt" class="form-control">
                    </div>
                    <hr class="new5">
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="Instagram" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="Facebook" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="text" name="Youtube" class="form-control">
                    </div>




                    <div class="form-group">
                        <label for="newsletter">News Letter:</label>
                        <input type="text" name="News_Letter" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="RSS">RSS</label>
                        <input type="text" name="RSS" class="form-control">
                    </div>

                    <hr class="new5">

                    <div class="form-group">
                        <label for="Opstina">Opstina</label>
                        <select name="Opstina" id="area" class="form-control">
                        <option value="" selected>&nbsp</option>
                            <?php
                            $db = mysqli_connect('localhost', 'root', '', 'advertiser');

                            $q = mysqli_query($db, 'SELECT * FROM area ');

                            while ($areas = mysqli_fetch_assoc($q)) : ?>
                                <option value="<?php echo $areas['name'] ?>"> <?= $areas['name'] ?></option>

                            <?php endwhile ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="mesto">Grad</label>
                        <select name="mesto" id="city" class="form-control">
                        <option value="" selected>&nbsp</option>
                            <!-- <option value="test" selected>Izaberite grad</option> -->
                        </select>
                    </div>

                    <hr class="new5">

                    <div class="form-group">
                        <label for="Kategorija">Kategorija</label>
                        <select name="Kategorija" id="category" class="form-control">
                            <option value="" selected>&nbsp</option>
                                <?php
                                $res = mysqli_query($db, 'SELECT * FROM category');

                                while ($row = mysqli_fetch_assoc( $res ) ) : ?>
                                    <option value="<?php echo $row['name']  ?>"> <?php echo $row['name'] ?></option>
                                <?php endwhile ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Podkategorija">Podkategorija</label> 
                        <select name="Podkategorija" id="subcategory" class="form-control">
                        <option value="" selected>&nbsp</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Pod_Delatnost">Pod Delatnost 1</label>
                        <!-- <input type="text" name="Pod_Delatnost_1" class="form-control"> -->
                        <select name="Pod_Delatnost" id="tokenize-1" class="form-control" multiple>
                            <?php
                            $res = mysqli_query( $db , 'SELECT * FROM podkategorija' );

                            while( $row = mysqli_fetch_assoc( $res ) ) : ?> 
                                <option value="<?php echo $row['podkategorija']; ?>"><?php echo $row['podkategorija']; ?></option>
                            <?php endwhile ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="widedata">00-24</label>
                        <select name="Radno_Vreme_2" id="" class="form-control">
                            <option value=""></option>
                            <option value="00-24">00-24</option>
                            
                        </select>
                    </div>

                    <hr class="new5">

                    <div class="form-group">
                        <label for="image_1">Visit card Page 1</label>
                        <input type="file" class="form-control" name="image_1">
                    </div>
                    <div class="form-group">
                        <label for="image_2">Visit card Page 2</label>
                        <input type="file" class="form-control" name="image_2">
                    </div>

                    <hr class="new5">

                    <div class="form-group">
                        <label for="widedata">Prošireni podaci</label>
                        <select name="Prosireni_Podaci" id="" class="form-control">
                            <option value="ne">NE</option>
                            <option value="da">Da</option>
                            
                        </select>
                    </div>

                    <hr class="new5">


                    <button type="submit" class="btn btn-primary" name="upload">Dodaj</button>
                </form>
            </div>
        </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="resources/js/tokenize/tokenize2.min.js"></script>
        <script src="resources/js/app.js"></script>
        <script>
         
        </script>