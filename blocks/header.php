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
                        <?php
                        if(array_key_exists("mail",$_SESSION)){
                            echo ('<a class="nav-link active" aria-current="page" href="home.php">Home</a>');
                        }
                        ?>
                    </li>
                    <div class="navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn btn-dark dropdown-toggle no-border ps-0 <?php
                                if(!array_key_exists("mail",$_SESSION)){
                                    echo("disabled");
                                }
                                ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <?php
                                    if(array_key_exists("mail",$_SESSION)) {
                                        echo('<li><a class="dropdown-item" href="ajouter_image.php">Ajouter une image</a></li>
                                              <li><a class="text-decoration-none d-flex flex-column dropdown-item" href="panier.php">Panier</a></li>
                                              <li><a class="dropdown-item" href="destroy.php">Se déconnecter</a></li>');
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul
                    </div>
                </ul>
                <ul class="navbar-nav align-items-lg-end">
                    <li class="nav-item text-lg-center text-start">
                        <?php
                        if(array_key_exists("dark", $_GET)) {
                            setcookie("theme-dark",$_GET ["dark"], time()+60*60*24);
                            $urlR = $_SERVER ["REQUEST_URI"];
                            $urlR = explode("?","$urlR")[0];
                            header('Location:'.$urlR);
                            exit();
                        }
                        if(array_key_exists("consent", $_COOKIE)){
                            if (array_key_exists("theme-dark", $_COOKIE) && $_COOKIE["theme-dark"]  == "yes") {
                                echo('<a href="?dark=no"><svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M12 7a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"></path>
                                      <path d="M12 1v2"></path>
                                      <path d="M12 21v2"></path>
                                      <path d="m4.22 4.22 1.42 1.42"></path>
                                      <path d="m18.36 18.36 1.42 1.42"></path>
                                      <path d="M1 12h2"></path>
                                      <path d="M21 12h2"></path>
                                      <path d="m4.22 19.78 1.42-1.42"></path>
                                      <path d="m18.36 5.64 1.42-1.42"></path>
                                    </svg></a> <a class="nav-link" href="?dark=no">Light Mode</a>');
                            }elseif(array_key_exists("theme-dark", $_COOKIE) && $_COOKIE["theme-dark"]  == "no"){
                                echo('<a class="nav-link" href="?dark=yes"><svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"></path>
                                    </svg></a><a class="nav-link" href="?dark=yes">Dark Mode</a>');
                            }else{
                                echo('<li class="nav-item text-lg-center text-start"><a class="nav-link" href="?dark=no"><svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M12 7a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"></path>
                                      <path d="M12 1v2"></path>
                                      <path d="M12 21v2"></path>
                                      <path d="m4.22 4.22 1.42 1.42"></path>
                                      <path d="m18.36 18.36 1.42 1.42"></path>
                                      <path d="M1 12h2"></path>
                                      <path d="M21 12h2"></path>
                                      <path d="m4.22 19.78 1.42-1.42"></path>
                                      <path d="m18.36 5.64 1.42-1.42"></path>
                                    </svg></a><a class="nav-link" href="?dark=no">Light Mode</a></li>');
                                echo('<li class="nav-item text-lg-center text-start"><a class="nav-link" href="?dark=yes"><svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"></path>
                                    </svg></a><a class="nav-link" href="?dark=yes">Dark Mode</a></li>');
                            }
                        }
                        ?>
                    </li>
                    <li class="nav-item text-lg-center text-start">
                        <?php
                        include "variable.php";
                        if(array_key_exists("mail",$_SESSION)) {
                            echo ('<img class="img-moi" src="assets/Jose_avatar.png" alt="">
                                    <a class="nav-link" href="admin.php">Mon compte</a>');
                        }else {
                            echo ('<svg width="46" height="46" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2Zm0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2Zm0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4Zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4Z"></path>
                                    </svg><a class="nav-link" href="connection.php">Me connecter</a>');
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>