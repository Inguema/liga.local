<?php

function w($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}

function d($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}