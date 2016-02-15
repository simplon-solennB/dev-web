<?php

require_once "app/autoload.php";

use bz\rxla\donatello\Donatello as App;
use bz\rxla\donatello\model\Task;

$app = new App();
print_r($app);

$t = new Task();
$t->id = 1;
$t->title = "test tache1";
print_r($t);



