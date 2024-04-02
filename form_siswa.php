<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Siswa</title>
</head>

<body>
    <?php
    require_once("form.php");
    $bahasa = array("Indonesia", "Inggris", "Mandarin", "Jepang", "Korea");
    $agama = array("Kristen", "Islam", "Katholik", "Buddha", "Hindu", "Kong Hu Cu");
    $gender = array("Pria", "Wanita");
    $form1 = new Form("proses_tambah_siswa.php", "Form Menambah Data Siswa");
    $form1->addTextBox("nis", 5);
    $form1->addTextBox("nama");
    $form1->addRadioButton("gender", $gender, "Pria");
    $form1->addComboBox("agama", $agama, "Kristen");
    $form1->addCheckBox("bahasa", $bahasa, "Indonesia");
    $form1->addTextBox("kota", 15);
    $form1->show();
    ?>
</body>

</html>