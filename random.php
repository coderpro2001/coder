<?php

$tableau = [ "A", "B", "C", "D", "E", "F" ];

// ON MELANGE LES ELEMENTS
// https://www.php.net/manual/fr/function.shuffle.php
shuffle($tableau);

print_r($tableau);