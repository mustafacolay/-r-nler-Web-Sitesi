<?php
session_start();
include "config.php";
$sql = "SELECT * FROM kiyafetler ORDER BY id ";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maestrostüdyo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    
   <?php include 'partials/_navbar.php'; ?>  
    
  

    <!-- <div class="row" style="margin-left: 5px;">
        <div class="card col-4" style="margin-top: 15px;">
            <a href="urundetay1.php"><img src="img/Şort.jpeg" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Premium Kalite Beli Lastikli Geniş Kalıp Keten Şort-Bej</h5>
            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <a href="urundetay2.php"><img src="img/Takım elbise.jpeg" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Zamansız Şıklık Elit Tarzda Klasik Takım Elbise-Füme</h5>

            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <a href="urundetay3.php"><img src="img/Kıyafet1.png" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Özel Koleksiyon Oversize Kalıp Kanguru Cep Çıtçıt Detay İçi Astarlı Gabardin Kumaş Ceket-Gri</h5>

            </div>
        </div>
    </div>
    <div class="row" style="margin-left: 5px;">
        <div class="card col-4" style="margin-top: 15px;">
            <a href="urundetay4.php"><img src="img/gömlek.jpeg" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Yüksek Kalite Oversize Kalıp Cep Detay Yazlık Kumaş Gömlek-Lacivert</h5>
            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <a href="urundetay5.php"><img src="img/Kıyafet2.png" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Pileli Baggy Beli Lastikli Kumaş Pantolon-Bej</h5>

            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <a href="urundetay6.php"><img src="img/mont.png" class="card-img-top"></a>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Yüksek Kalite Cep Detaylı Ribanalı Oversize Mont-Beyaz</h5>

            </div>
        </div>
    </div> -->
    <br>
    <div class="row">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="card col-4" style="margin-top: 15px;">
                <a href="urun_detay.php?id=<?= $row['id'] ?>">
                    <img src="img/<?= $row['resim'] ?>" class="card-img-top">
                </a>
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 16px;">
                        <?= $row['urun_adi'] ?>
                    </h5>
                </div>
            </div>
        <?php } ?>

    </div>
</div>



   <?php include 'partials/_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>