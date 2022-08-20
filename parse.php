<?php
error_reporting(E_ALL);
set_time_limit(0);
date_default_timezone_set('Europe/Prague');
?>

<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');

include 'PHPExcel/IOFactory.php';

if (isset($_POST['delete_history'])) {
	$fileMemory = 'cisla_polozek.txt';

	if (file_exists($fileMemory))
		unlink($fileMemory);
}

if (isset($_POST['submit'])) {
	$creationDate = $_POST['datumVytvoreni'];
	$creationDate = date('Ymd', strtotime($creationDate));
	$dueDate = $_POST['datumSplatnosti'];
	$dueDate = date('Ymd', strtotime($dueDate));
	$tmpName = $_FILES["source"]["tmp_name"];
	$fileName = $_FILES["source"]["name"];
	move_uploaded_file($tmpName, "$fileName");

	if (isset($_POST['toggle'])) {
		$val = isset($_POST['toggle']);
	} else {
		$val = 0;
	}

	$objPHPExcel = PHPExcel_IOFactory::load($fileName);
	$sheetData = $objPHPExcel->getActiveSheet()->getCreationDate($creationDate)->getDueDate($dueDate)->getAccountFromInput($_POST['cisloUctu'])->getToogleValue($val)->toArray(null, true, true, true);
	unlink($fileName);

	exit;
}
?>
