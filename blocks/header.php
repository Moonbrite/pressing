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
                            echo ('<svg width="46" height="46" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M16 15.62a1.12 1.12 0 1 0 0-2.24 1.12 1.12 0 0 0 0 2.24Z"></path>
                                      <path fill-rule="evenodd" d="M16 16.5c-.73 0-2.19.36-2.24 1.08.5.71 1.32 1.17 2.24 1.17.92 0 1.74-.46 2.24-1.17-.05-.72-1.51-1.08-2.24-1.08Z" clip-rule="evenodd"></path>
                                      <path fill-rule="evenodd" d="M17 10.09V5.27L9.5 2 2 5.27v4.91c0 4.54 3.2 8.79 7.5 9.82.55-.13 1.08-.32 1.6-.55A5.973 5.973 0 0 0 16 22c3.31 0 6-2.69 6-6 0-2.97-2.16-5.43-5-5.91ZM10 16c0 .56.08 1.11.23 1.62-.24.11-.48.22-.73.3-3.17-1-5.5-4.24-5.5-7.74v-3.6l5.5-2.4 5.5 2.4v3.51c-2.84.48-5 2.94-5 5.91Zm6 4c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4Z" clip-rule="evenodd"></path>
                                    </svg><a class="nav-link" href="admin.php">Mon compte</a>');
                            echo ('<a class="" href="destroy.php">Se déconnecter</a>');
                        }else {
                            echo ('<svg width="46" height="46" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2Zm0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2Zm0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4Zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z"></path>
                                    </svg><a class="" href="connection.php">Me connecter</a>');
                        }
                        ?>
                    </li>
                    <li class="nav-item ms-5">
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