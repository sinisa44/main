<?php if( isset( $_SESSION['user']['login'])) : ?>
    <div class="row mt-2 justify-content-center" style="width:100%; margin:0 auto">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Pretraga</span>
            </div>
            <input type="text" id="search" class="form-control" placeholder="Upis za pretragu" aria-label="Upis za pretragu" aria-describedby="basic-addon1">
        </div>
    </div>
<?php endif; ?>

<div id="content">
    <?php

    while( $row = mysqli_fetch_array( $results )) :  ?>
        <div class="border border-secondary mb-2 p-1 rounded-sm">
            <div class="row mt-4 ">
                <div class="col-sm-12">
                    <h1 class="text-center text-light bg-dark">Mesto: <?php echo $row['mesto']; ?></h1>
                    <h1  class="text-center text-light bg-dark">Delatnost: <?php echo $row['podkategorija']; ?></php></h1>
                    <h1  class="text-center text-light bg-dark">Naziv firme: <?php echo $row['naziv_firme']; ?></h1>

                    <?php if(  $row['client_type'] !== '1'  && isset( $_SESSION['user']['login'])) : ?>
                        <div class="row justify-content-center">
                            <a href="app/templates/client.php?client_id= <?php echo $row['id']; ?>"   class="btn btn-secondary btn-large"  >Prikaži više</a> 
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <?php if( $row['slika_1'] ) : ?>
                    <img src="resources/images/<?php echo $row['slika_1']; ?> " style="width:355px; height:255px">
                <?php endif; ?>
                <?php if( $row['slika_2'] ) : ?>
                    <img src="resources/images/<?php echo $row['slika_2']; ?>" style="width:355px; height:255px">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

</div>