<?php
include "variable.php";
?>
    <nav class="navbar navbar-expand-lg  position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Mon Pressing de ouf</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn btn-dark dropdown-toggle no-border ps-0" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">PHP</a></li>
                                    <li><a class="dropdown-item" href="#">PYTHON</a></li>
                                    <li><a class="dropdown-item" href="#">JAVA</a></li>
                                </ul>
                            </li>
                        </ul
                    </div>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item text-lg-center text-start">
                        <?php
                        include "variable.php";
                        if(array_key_exists("mail",$_SESSION)) {
                            echo ('<img class="img-moi" src="assets/Jose_avatar.png" alt="">
                                    <a class="nav-link" href="admin.php">Mon compte</a>');
                            echo ('<a class="" href="destroy.php">Se déconnecter</a>');
                        }else {
                            echo ('<svg width="46" height="46" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2Zm0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2Zm0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4Zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z"></path>
                                    </svg><a class="" href="connection.php">Me connecter</a>');
                        }
                        ?>
                    </li>
                    <li class="nav-item ms-5 me-3">
                        <?php
                        if(array_key_exists("mail",$_SESSION)){
                            echo ('<a class="text-decoration-none d-flex flex-column" href="panier.php"> <svg width="46" height="46" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" d="M22 9h-4.79l-4.39-6.57a1 1 0 0 0-1.66 0L6.77 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1ZM11.99 4.79 14.8 9H9.18l2.81-4.21ZM10 15c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2Z" clip-rule="evenodd"></path>
                        </svg>Panier</a>');
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>