<?php
if(array_key_exists("cookie", $_GET) && $_GET ["cookie"] == "yes") {
    setcookie("consent","yes", time()+60*60*24);
    $urlR = $_SERVER ["REQUEST_URI"];
    $urlR = explode("?","$urlR")[0];
    header('Location:'.$urlR);
    exit();
}
if (!array_key_exists("consent", $_COOKIE)) {
    echo ('<span class="mb-3 mb-md-0 text-body-secondary">Veuiller accecpter les cookie</span>
                  <a href="?cookie=yes"><button class="btn btn-success">Oui</button></a>');
}
?>