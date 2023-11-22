<?php
if(array_key_exists("cookie", $_GET) && $_GET ["cookie"] == "yes") {
    setcookie("consent","yes", time()+60*60*24);
    $urlR = $_SERVER ["REQUEST_URI"];
    $urlR = explode("?","$urlR")[0];
    header('Location:'.$urlR);
    exit();
}
if (!array_key_exists("consent", $_COOKIE)) {
    echo ('<div class="cookie-card col-md-4">
        <span class="title">🍪 Cookie Notice</span>
        <p class="description">We use cookies to ensure that we give you the best experience on our website. <a href="#">Read cookies policies</a>. </p>
        <div class="actions">
            <button class="pref">
                Manage your preferences
            </button>
            <a href="?cookie=yes">
                <button class="accept">
                    Accept
                </button>
            </a>
        </div>
    </div>');
}
?>