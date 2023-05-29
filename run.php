<?php

require __DIR__ . '/vendor/autoload.php';

use Artwielogorski\TestyMichal\ReportGenerator;

$rg = new ReportGenerator();

// read csv from exampleData.csv to variable
$csv = fopen('exampleData.csv', 'r');

$d = fgetcsv($csv);

$f = function () use ($csv) {
    return fgetcsv($csv);
};
$rg = new ReportGenerator();
$rg->setReadFunction($f);

echo "\n" . $rg->sumWirelessItemsValue();

//var_dump($d);