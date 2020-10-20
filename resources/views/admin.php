<?php
    if( ! $_SESSION['user']['is_admin'] == 1 && ! $_SESSION['user']['login'] == 1 ) {
        die();
    }
?>

<div class="row">
   <div class="col-md-12">
        <h1 class="text-center">Odobravanje prikaza</h1>
       <table class="table ">
           <tr>
               <th>ID</th>
               <th>Naziv Firme</th>
               <th>E-mail</th>
               <th>Opstina</th>
               <th>Mesto</th>
               <th>Kategorija</th>
               <th>Potkategorija</th>
               <th>Odobri</th>
           </tr>

           <?php 
                $aproved_q = mysqli_query( $connection, 'SELECT * FROM cegek WHERE dozvoljeno = 0' );

                while( $aproved = mysqli_fetch_array( $aproved_q ) ) :

           ?>
           <tr >
               <td><?php echo $aproved['id'] ?></td>
               <td><?php echo $aproved['naziv_firme']; ?></td>
               <td><?php echo $aproved['email']; ?></td>
               <td><?php echo $aproved['opstina']; ?></td>
               <td><?php echo $aproved['mesto']; ?></td>
               <td><?php echo $aproved['kategorija'] ?></td>
               <td><?php echo $aproved['pod_kategorija']; ?></td>
               <td class="text-center"><button class="btn btn-sm btn-success btn-allow" data-id="<?php echo $aproved['id']; ?>">O</button></td>
           </tr>
           <?php endwhile; ?>
       </table>
    </div>
</div>