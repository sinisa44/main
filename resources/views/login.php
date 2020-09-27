<?php
    require_once( 'app/database.php' );

    if( isset( $_GET['confirmation'] ) ) {
        $confirmation = $_GET['confirmation'];

        $query = "SELECT * FROM users where token = '$confirmation'";

        $res = mysqli_query( $connection, $query );

        while( $row = mysqli_fetch_assoc( $res ) ) {

          $update  = "UPDATE users SET status=1 WHERE token = '$confirmation'";
          
          if( mysqli_query( $connection, $update )) {
            $conf = true;
          }else {
            $conf = false;
          }
        }

    }


    if( isset( $_POST['login'] ) ) {
        $email = $_POST['email'];
        // $password = password_hash( $_POST['password'], PASSWORD_BCRYPT );
        $password = $_POST['password'];

        $find_user = "SELECT * FROM users WHERE email='$email'";
        
        $res = mysqli_query( $connection, $find_user );

        if( mysqli_num_rows( $res ) > 0 ) {
        while( $row = mysqli_fetch_assoc( $res ) ) {
            if( password_verify( $password, $row['password'] ) ) {
             $_SESSION['user']['token'] = $row['token'];
             $_SESSION['user']['id'] = $row['id'];
             $_SESSION['user']['login'] = true;
             $_SESSION['user']['is_admin'] = $row['is_admin'];

             header( 'location:index.php?page=home');
            }else {
                echo 'nok';
            }
        }
    }


    print_r( $_SESSION['user']);
    }
?>

<div class="row justify-content-center">

    <div class="col-sm-6 mt-5 bg-primary" >

    <?php if( isset($conf) ) : ?>
    
        <div class="alert alert-success mt-2" role="alert">
        <p class="text-center">Uspešno ste se registrovali</p>
        </div>

    <?php endif; ?>
        

    <h4 class="text-center" style="color:white; text-decoration:underline;">Prijava</h4>
    <form action="" method="post" class="bg-primary"">
        <div class="form-group">
            <label for="email" style="color:white">E-mail:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password" style="color:white">Šifra:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-success" name="login" value="Prijava">
        </div>
    </form>
</div>
</div>