<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maestrostüdyo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>



<body>
    <?php include 'partials/_navbar.php'; ?>  
    <?php include 'gorsellestırme.php'; ?>  


    <div class="card mb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="img/logom.jpg" class="" style="width: 950px; height: 500px; ">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 30px;">Hakkımızda</h5>
                    <p class="card-text" style="font-size: 25px;">Maestro Stüdyo, modayı bir ifade biçimi olarak görenler için kuruldu. Her tasarımımız, özgün çizgiler ve kaliteli kumaşlarla, tarzını en iyi şekilde yansıtmanı sağlar. Günlük kombinlerinden özel günlerine kadar, her anında fark yaratmanı
                        hedefliyoruz. Koleksiyonlarımız, trendleri takip etmek yerine, kendi tarzını oluşturmanı destekler. Müşteri memnuniyetini her zaman önceliğimiz olarak görüyor, detaylara özen gösteriyoruz. Profesyonel ekibimiz, kişiye özel dikim
                        ve stil danışmanlığı hizmetleriyle yanındadır. Maestro Stüdyo’da modayı takip etmek değil, modayı seninle birlikte yaratmak önemlidir. Sadelik, şıklık ve özgünlük bizim imzamızdır. Modanın kalbini ve ruhunu burada bulabilirsin.
                    </p>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="img/mağazaiç.jpg" class="img-fluid" style="width: 500px; height: 400px; margin-left:20px;">
        </div>
        <div class="col-md-4">
            <img src="img/erkekgiyim.jpg" class="img-fluid" style="width: 500px; height: 400px;">
        </div>
        <div class="col-md-4">
            <img src="img/kumaş.png" class="img-fluid" style="width: 500px; height: 400px;">
        </div>
    </div>


<br><br>


  <?php include 'partials/_footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>