<?php if(isset($_SESSION['user']['login']) && $_SESSION['user']['login'] ) : ?>
    <div class="row mt-2 justify-content-center p-2 bg-secondary sticky-top" style="width:100%; margin:0 auto;">

        <div class="col-md-10">
            <h5 class="text-center text-light" style="text-decoration: underline;">Detaljna pretraga</h5>
            <form action="#" class="form form-inline" id="detail-search">
            <div class="col-md-4">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Opstina:</span>
                        </div>
                        <!-- <input name="location" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">  -->
                        <?php
                            $q = 'SELECT * FROM area';
                            $r = mysqli_query( $connection, $q );
                        ?>
                        <select name="location" class="form-control">
                            <?php while( $area= mysqli_fetch_assoc( $r )) : ?>
                             
                                <option value="<?php echo $area['name']; ?>"> <?php echo $area['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Mesto:</span>
                        </div>

                        <?php
                            $query = 'SELECT * FROM city';
                            $res = mysqli_query( $connection, $query );
                        ?>
                        <!-- <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"> -->
                        <select name="area" id="" class="form-control">
                            <?php while( $city = mysqli_fetch_assoc( $res ) ) : ?>
                                <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Pretraga:</span>
                        </div>
                        <input name="search" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-md-6 m-auto p-2">
                    <div class="form-group justify-content-center">
                        <input type="submit" class="btn btn-success" value="Pretraga">
                    </div>
                </div>
            </form>
        </div>

    </div>
<?php endif; ?>

<div id="content">
    <?php

    while ($row = mysqli_fetch_array($results)) :  
    if( $row['dozvoljeno'] == 1 ) :
    ?>
        <div class="border border-secondary mb-2 p-1 rounded-sm mt-4">
            <div class="row mt-4 ">
                <div class="col-sm-12">
                    <h1 class="text-center text-light bg-dark">Mesto: <?php echo $row['mesto']; ?></h1>
                    <h1 class="text-center text-light bg-dark">Delatnost: <?php echo $row['pod_kategorija']; ?></php>
                    </h1>
                    <h1 class="text-center text-light bg-dark">Naziv firme: <?php echo $row['naziv_firme']; ?></h1>

                    <?php if ($row['client_type'] == '1'  && isset($_SESSION['user']['login'])) : ?>
                        <div class="row justify-content-center">
                            <a href="?page=adv&id= <?php echo $row['id']; ?>" class="btn btn-secondary btn-large">Prikaži više</a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12 text-center">
                    <?php if ($row['slika_1']) : ?>
                        <img src="resources/images/<?php echo $row['slika_1']; ?> " style="width:355px; height:255px">
                    <?php endif; ?>
                    <?php if ($row['slika_2']) : ?>
                        <img src="resources/images/<?php echo $row['slika_2']; ?>" style="width:355px; height:255px">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; endwhile; ?>

</div>