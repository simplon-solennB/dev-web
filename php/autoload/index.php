<?php

spl_autoload_register(function($class){
    include "app/".$class.".php";
} );

$p = new Project();
$p->title = "Page profils";
print_r( $p );

$t = new Task();
$t->id = 1;
$t->title = "acheter du pain";

print_r( $t );