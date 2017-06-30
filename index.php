<?php

require 'vendor/autoload.php';

use ActivismeBe\Parlement\Euro;

$debatten = new \ActivismeBe\Parlement\Statistieken();

print $debatten->getStatistieken(1, '2011-2012');
