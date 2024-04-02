<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Kepuasan Pelanggan</title>
</head>

<body>
    <?php
    require_once("form.php");
    $fav = array("Capcay", "Mie Goreng", "Bihun Goreng", "Nasi Goreng", "Kwetiauw Goreng");
    $pendidikan = array("SMP", "SMA", "Mahasiswa", "Pekerja", "Others");
    $gender = array("Pria", "Wanita");
    $form1 = new Form("proses_tambah_siswa.php", "Form Kepuasan Pelanggan");
    $form1->addTextBox("nama");
    $form1->addTextBox("telepon");
    $form1->addRadioButton("gender", $gender);
    $form1->addComboBox("Pendidikan", $pendidikan, "SMP");
    $form1->addCheckBox("Makanan Favorit", $fav);
    $form1->show();
    ?>
</body>

</html>