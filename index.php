<?php

require 'vendor/autoload.php';

use ActivismeBe\Parlement\Euro;

$debatten = new \ActivismeBe\Parlement\Vergaderingen();

print $debatten->bezig();
