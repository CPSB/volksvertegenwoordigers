<?php 

require 'vendor/autoload.php';

use ActivismeBe\Parlement\Commissie;

$debatten = new Commissie();

print $debatten->lijst('560540,560547');