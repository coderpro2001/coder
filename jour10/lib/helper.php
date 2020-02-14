<?php

function debug($variable)
{
    // instructions à exécuter
    // echo gettype($variable);
    if ('array' === gettype($variable)) {
        echo '<pre>';
        print_r($variable);
        echo '</pre>';
    } else {
        var_dump($variable);
    }
}
