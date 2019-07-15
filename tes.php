<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$siswa[1] = "naufal";
	$siswa[2] = "yusron";
	$siswa[3] = "dll";

	$siswa = ["naufal", "yusron", "dll"];
	var_dump($siswa);
	?>

	<br>
	<br>

	<?php 
	$siswa1["nama"] = "NAUFAL";
	$siswa1["nama"] = "YUSRON";

	$siswa1["kelas"] = "A12";
	$siswa1["kelas"] = "B12";

	foreach ($siswa1 as $value) {
		echo $value. " ";
	}
	?>

	<br>
	<br>

	<?php
	$siswa2["nama"][0] = "NAUFAL";
	$siswa2["nama"][1] = "YUSRON";

	$siswa2["kelas"][0] = "A12";
	$siswa2["kelas"][1] = "B12";

	foreach ($siswa2 as $key => $value) {
		echo $value[0]. " ";	
	}
	?>

	<br>
	<br>

	<?php 
	$siswa3 = "NAUFAL";
	if (empty($siswa3)) {
		echo "TIDAK ADA ISI";
	} else {
		echo "ADA ISI";
	}
	?>

	<br>
	<br>

	<?php 
	$siswa4 = NULL;
	$siswa4 = "";
	$siswa4 = array();

	if (isset($siswa4)) {
		echo "ADA DATA";
	} else {
		echo "TIDAK ADA DATA";
	}
	?>

	<br>
	<br>

	<?php
	$siswa5 = array(
		'kelas' => "A12",
		'nama' => "Rahmad");
	unset($siswa5['nama']);
	var_dump($siswa5);
	?>

	<br>
	<br>

	<?php
	$file = "rahmat.txt";
	unlink($file);
	?>

	<br>
	<br>

	<?php
	$siswa6 = array(
		'kelas' => "A12",
		'nama' => "Rahmad");

	if (is_array($siswa6)) {
		echo "INI ARRAY";
	} else {
		echo "INI BUKAN ARRAY";
	}
	?>

	<br>
	<br>

	<?php
	echo substr("Hello World", 0, 7);
	?>

	<br>
	<br>

	<?php
	echo str_replace("world", "Peter", "Hello world");
	?>

	<br>
	<br>

	<?php
	$str = "Hello world. It's a beautiful day.";
	print_r(explode(" ", $str))
	?>

	<br>
	<br>

	<?php
	$arr = array('Hello','World!','Beautiful','Day!');
	echo implode(" ", $arr);
	?>

	<br>
	<br>

	<?php
	$explode = "GANAR";

	$strtolower = strtolower($explode);
	echo $strtolower;

	$strtoupper = strtoupper($explode);
	echo $strtoupper;
	?>

	<br>
	<br>

	<?php
	$siswa7 = array(
		'kelas' => "A12",
		'nama' => "Rahmad");

	if (array_key_exists("kelas", $siswa7)) {
		echo "ada key kelas";
	}
	?>

	<br>
	<br>

	<?php
	$siswa8 = array(
		'kelass' => "A12",
		'nama' => "Rahmad");
	echo json_encode($siswa8);
	?>

	<br>
	<br>

	<?php
	$siswa9 = array(
		'kelass' => "A12",
		'nama' => "Rahmad");
	$json = json_encode($siswa9);
	var_dump(json_decode($json));
	?>
</body>
</html>