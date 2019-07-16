<?php 
require 'vendor/autoload.php';
use Carbon\Carbon;

$sekarang = Carbon::now();

echo "Sekarang: $sekarang <br>";
echo "Umur saya: " . Carbon::createFromDate(1999,10,04)->age . "<br>";
echo "Besok: " . $sekarang->addDay() . "<br>";
?>