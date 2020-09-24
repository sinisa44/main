<?php 
    if( isset( $_POST['logout'] ) ) {
        session_destroy();
        header( 'location:index.php?page=home' );
    }

?>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-secondary ">
    <a class="navbar-brand" href="?page=home">
        <h4>Poslovni Adresar</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ml-auto">
            <?php if( isset( $_SESSION['user']['login'] ) && $_SESSION['user']['is_admin'] ) : ?>
                <li class="nav-item">
                    <a class="btn btn-outline-light my-2 mr-1 my-sm-0" href="?page=admin">Admin</a>
                </li>
            <?php endif; ?>

            <?php if( ! isset( $_SESSION['user']['login'] ) ) : ?>
               
                <li class="nav-item">
                    <a class="btn btn-outline-light my-2 mr-1 my-sm-0" href="?page=login">Prijava</a>
                </li>
              
            <?php else : ?>
                <li class="nav-item">
                    <a class="btn btn-outline-light my-2 mr-1 my-sm-0" href="?page=insert">Novi Unos</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class=" btn btn-outline-light my-2 mr-1 my-sm-0" href="?page=register">Registracija</a>
            </li>
        </ul>
        <?php if( isset( $_SESSION['user']['login'])) : ?>
            <form class="form-inline my-2 my-lg-0" method="POST">

                <input type="submit" class="btn btn-outline-light my-2 my-sm-0" value="Odjava" name="logout">
            </form>
        <?php endif; ?>
    </div>
</nav>