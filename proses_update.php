<?php
require_once("tabel.php");
extract($_POST);
$bhs = implode(",", $bahasa);
$sql = "UPDATE siswa SET nama='$nama', gender='$gender', agama='$agama', bahasa='$bhs', kota='$kota' WHERE nis='$nis'";
$siswa = new Tabel("localhost", "root", "", "akademik", "siswa");
$siswa->executeSql($sql);
$siswa->showTable();
