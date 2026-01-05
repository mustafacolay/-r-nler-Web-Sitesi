<?php
header("Content-Type: text/html; charset=UTF-8");
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

include 'config.php';


$filePath = "kiyafet.xlsx"; 
$spreadsheet = IOFactory::load($filePath);
$sheetData = $spreadsheet->getActiveSheet()->toArray();

foreach ($sheetData as $index => $row) {
    if ($index == 0) continue;
    
    $urun_adi        = mysqli_real_escape_string($conn, $row[0]);
    $renk_kod        = mysqli_real_escape_string($conn, $row[1]);
    $kumas_malzeme   = mysqli_real_escape_string($conn, $row[2]);
    $model_kilo      = mysqli_real_escape_string($conn, $row[3]);
    $model_bacak_boy = mysqli_real_escape_string($conn, $row[4]);
    $model_ust_beden = mysqli_real_escape_string($conn, $row[5]);
    $urun_boy        = mysqli_real_escape_string($conn, $row[6]);
    $urun_bel        = mysqli_real_escape_string($conn, $row[7]);
    $urun_ic_bacak   = mysqli_real_escape_string($conn, $row[8]);
    $fiyat           = mysqli_real_escape_string($conn, $row[9]);
    $resim           = mysqli_real_escape_string($conn, $row[10]);
    $urun_bilgi      = mysqli_real_escape_string($conn, $row[11]);

    $check = $conn->query("SELECT * FROM kiyafetler WHERE urun_adi='$urun_adi'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO kiyafetler 
        (urun_adi, renk_kod, kumas_malzeme, model_kilo, model_bacak_boy, model_ust_beden, urun_boy, urun_bel, urun_ic_bacak, fiyat, resim, urun_bilgi)
        VALUES
        ('$urun_adi', '$renk_kod', '$kumas_malzeme', '$model_kilo', '$model_bacak_boy', '$model_ust_beden', '$urun_boy', '$urun_bel', '$urun_ic_bacak', '$fiyat', '$resim', '$urun_bilgi')";
        
        if ($conn->query($sql)) {
            echo " $urun_adi eklendi.<br>";
        } else {
            echo " $urun_adi eklenemedi: " . $conn->error . "<br>";
        }
    } else {
        echo " $urun_adi zaten mevcut, atlandı.<br>";
    }
}

$conn->close();
echo "<br><b>İşlem tamamlandı!</b>";
?>
