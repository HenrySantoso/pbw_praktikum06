<?php
require_once("tabel.php");
$nis = $_GET['delete'];
$sql = "DELETE FROM siswa WHERE nis='$nis'";
$siswa = new Tabel("localhost", "root", "", "akademik", "siswa");
$siswa->executeSql($sql);
$siswa->showTable();
