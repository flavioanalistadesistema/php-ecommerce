<?php

if (isset($_COOKIE['USER'])) {

    $obj = json_decode($_COOKIE['USER']);
    echo $obj->username;
}

?>