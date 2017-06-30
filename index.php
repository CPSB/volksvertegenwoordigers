<?php

require 'vendor/autoload.php';

use ActivismeBe\Parlement\Euro;

$debatten = new \ActivismeBe\Parlement\SchriftelijkeVraag();

print $debatten->schriftelijkeVraag(1);
