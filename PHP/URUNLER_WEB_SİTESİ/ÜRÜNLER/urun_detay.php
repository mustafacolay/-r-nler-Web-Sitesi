<?php
session_start(); 
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM kiyafetler WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $urun = mysqli_fetch_assoc($result);
} else {
    die("Ürün bulunamadı!");
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Detay</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
        <?php include 'partials/_navbar.php'; ?> 
<div class="row">
            <div class="col-md-6">
                <img src="img/<?= $urun['resim'] ?>" class="img-fluid" style="width: 700px; margin-left: 100px;">
            </div>
            <div class="col-md-6" style="margin-top: 150px;">
                <div class="card-body">
                    <h4><?= $urun['urun_adi'] ?></h4>
                    <br>
                    <p><strong>Renk:</strong> <?= $urun['renk_kod'] ?></p>
                    <p><strong>Kumaş:</strong> <?= $urun['kumas_malzeme'] ?></p>

                    <h5 class="mt-4">Model Ölçüleri</h5>
                    <ul>
                        <li>Kilo: <?= $urun['model_kilo'] ?></li>
                        <li>Bacak Boyu: <?= $urun['model_bacak_boy'] ?></li>
                        <li>Üst Beden: <?= $urun['model_ust_beden'] ?></li>
                    </ul>

                    <h5 class="mt-4">Ürün Ölçüleri</h5>
                    <ul>
                        <li>Boy: <?= $urun['urun_boy'] ?></li>
                        <li>Bel: <?= $urun['urun_bel'] ?></li>
                        <li>İç Bacak: <?= $urun['urun_ic_bacak'] ?></li>
                        <li>Ürün Bilgisi: <?= $urun['urun_bilgi'] ?></li>
                        <br>
                    <p style="font-size: 30px;"><strong>Fiyat:</strong> <?= $urun['fiyat'] ?> TL</p>
                  <a href="sepet_ekle.php?id=<?= $urun['id'] ?>" class="btn btn-primary">Sepete Ekle</a>
                    
                    
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
