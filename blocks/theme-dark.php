<?php
if (array_key_exists("theme-dark", $_COOKIE) && $_COOKIE["theme-dark"] == "yes") {
    echo('bg-dark text-light');
} elseif (array_key_exists("theme-dark", $_COOKIE) && $_COOKIE["theme-dark"] == "no") {
    echo('bg-light text-dark');
}
?>
