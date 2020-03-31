<?php

class Site
{
    static function afficherPage ($nomPage)
    {
        require_once "php/view/header.php";
        require_once "php/view/section-$nomPage.php";
        require_once "php/view/footer.php";
    }
}