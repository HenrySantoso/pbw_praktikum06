<?php
require_once("tabel.php");
extract($_POST);
$bhs = implode(",", $bahasa);
$sql = "INSERT INTO siswa VALUES('$nis','$nama','$gender','$agama', '$bhs', '$kota')";
$siswa = new Tabel("localhost", "root", "", "akademik", "siswa");
$siswa->executeSql($sql);
$siswa->showTable();
