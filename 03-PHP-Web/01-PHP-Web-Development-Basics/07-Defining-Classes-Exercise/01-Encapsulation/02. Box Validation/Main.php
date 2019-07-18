<?php

spl_autoload_register();

$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

$box = new Boxx($length, $width, $height);

$surface = sprintf('%0.2f', $box->calculateSurfaceArea());
$lateral = sprintf('%0.2f', $box->calculateLateralSurfaceArea());
$volume = sprintf('%0.2f', $box->calculateVolume());

echo "Surface Area - {$surface}\n";
echo "Lateral Surface Area - {$lateral}\n";
echo "Volume - {$volume}\n";