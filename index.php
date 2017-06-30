<?php

require 'vendor/autoload.php';

use ActivismeBe\Parlement\Euro;

$debatten = new \ActivismeBe\Parlement\Documenten();

print $debatten->vind(1);
