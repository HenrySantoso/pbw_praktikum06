<?php
//import
require_once("tabel.php");
require_once("form.php");

//dapatkan data lama
$nis = $_GET['update'];
$siswa = new Tabel("localhost", "root", "", "akademik", "siswa");
$data_lama = $siswa->getRow("SELECT * FROM siswa WHERE nis='$nis'");
extract($data_lama);

//form
$bhs = array("Indonesia", "Inggris", "Mandarin", "Jepang", "Korea");
$agm = array("Kristen", "Islam", "Katholik", "Buddha", "Hindu", "Kong Hu Cu");
$gdr = array("Pria", "Wanita");
$form1 = new Form("proses_update.php", "Form Menambah Data Siswa");
$form1->addTextBox("nis", 5, $nis);
$form1->addTextBox("nama", "", $nama);
$form1->addRadioButton("gender", $gdr, $gender,);
$form1->addComboBox("agama", $agm, $agama);
$form1->addCheckBox("bahasa", $bhs, $bahasa);
$form1->addTextBox("kota", 15, $kota);
$form1->show();
