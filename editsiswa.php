<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$siswa = new Siswa();
if(!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload file');
}
$data['input_name'] = addcslashes($_POST['in_name']);
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['input_foto'] = 'img/'.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);
//print_r($_FILES);

echo "siswa berhasil di update<br>";
//echo "<a href="usiswa.php?a=".$_POST['in_nis'].">"
?>