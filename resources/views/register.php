<?php
    require_once( 'app/config.php' );
    require_once( 'app/database.php' );
    require ( 'app/send_e.php' );


    if( isset( $_POST['register'] ) ) {
        // verificationEmailSend($email,$mail_body);
        
        $name     = mysqli_real_escape_string( $connection, $_POST['name'] );
        $password = password_hash( $_POST['password'], PASSWORD_BCRYPT );
        $email    = mysqli_real_escape_string( $connection, $_POST['email'] );
        $token = rand();
        $token = password_hash( $token, PASSWORD_DEFAULT );
        $url  = "http://" . $_SERVER[ 'SERVER_NAME' ] . "/main/index.php?page=login&confirmation=" . $token;
        $message   = "Hi " . $name . " please confirm your email click on the below link ". $url ;
        $status = 0;

        $query = "INSERT INTO users( name, email, password, token, status) VALUES ( '$name', '$email', '$password', '$token', '$status' )";
       
        if( mysqli_query( $connection, $query ) ) {
           verificationEmailSend( $email, $message );
        //    header( 'location:index.php?page=login&confirmation=Molimo vas' );
            $_SESSION['register_message'] = 'Molimo Vas da pogledate vas E-mail';
        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
    }
?>

<div class="row justify-content-center">
    <div class="col-sm-6 mt-5 bg-primary" >

        <?php if( isset( $_SESSION['register_message'] ) ) : ?>
            <div class="alert alert-success mt-2" role="alert">
                 <p class="text-center"><?php echo $_SESSION['register_message']; ?></p>
            </div>
        <?php endif ; ?>

        <h4 class="text-center" style="color:white; text-decoration:underline;">Registracija</h4>
        <form action=""  method="POST">
        <div class="form-group">
                <label for="name" style="color:white">Naziv Firme:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="email" style="color:white">E-mail:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password" style="color:white">Šifra:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-success" name="register" value="Prijava &rarr;">
            </div>
        </form>
    </div>
</div>

