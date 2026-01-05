<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maestrostüdyo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .banner {width: 100%;height: 400px;background: linear-gradient(black, grey), center/cover no-repeat;display: flex;align-items: center;justify-content: center;text-align: center;
            color: white;
        }
        
        .banner-content h1 {font-size: 64px;letter-spacing: 2px;margin-bottom: 16px;ext-transform: uppercase;
        }
        
        .banner-content p {font-size: 20px;margin-bottom: 40px;
        }
        
        .slogan {width: 100%; height: 120px; text-align: center;margin: 40px ;background-color:#34ebde
        }
        
        .slogan h2 {font-size: 80px;font-weight: bold;color: black;
        }
        
        body {overflow-x: hidden;
        }
    </style>



</head>

<body>
 <?php include 'partials/_navbar.php';?>

    <section class="banner">
        <div class="banner-content">
            <h1>Tarzını Konuştur</h1>
            <p>Kendine en yakışanı seç, stilini yansıt.</p>

        </div>
    </section>
    <div class="row" style="margin-left: 5px;">
        <div class="card col-4" style="margin-top: 15px;">
            <img src="img/Kıyafet1.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Özel Koleksiyon Oversize Kalıp Kanguru Cep Çıtçıt Detay İçi Astarlı Gabardin Kumaş Ceket-Gri</h5>
            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <img src="img/Kıyafet2.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Pileli Baggy Beli Lastikli Kumaş Pantolon-Bej</h5>

            </div>
        </div>
        <div class="card col-4" style=" margin-top: 15px;">
            <img src="img/kıyafet3.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Erkek Premium Yüksek Kalite Yüksek Taban Bağcık Detay Deri Ayakkabı-Siyah/Beyaz</h5>

            </div>
        </div>
    </div>
    </div>
    </div>
    <section class="slogan">
        <h2>Giy, Yaşa, Hisset</h2>
    </section>
    <section>
        <table width="100%">
            <tr>
                <td width="30%">
                    <img src="img/logom.jpg" alt="Maestro Stüdyo" width="100%">
                </td>

                <td width="30%" valign="top" style="padding-left: 15px;">
                    <h3>Maestro Stüdyo</h3>
                    <p style="font-size: 30px;">
                        Maestro Stüdyo, tarzını ortaya koymak isteyenler için özel olarak tasarlanmış koleksiyonlar sunar. Her ürün, özgün detayları ve kaliteli kumaşlarıyla seni anlatır. Günlük kombinlerinden özel davetlerine kadar her anında fark yaratman için yanındayız.
                        Modayı takip etmek değil, modayı seninle oluşturmak bizim işimiz. Her dikiş, bir karakter; her parça, bir ifade. Maestro Stüdyo ile giy, yaşa, hisset.
                    </p>
                </td>

                <td width="40%" valign="top" style="padding-left: 15px;">
                    <h3>Hizmetlerimiz</h3>
                    <ul style="font-size: 21px;">
                        <li>Özel Tasarım Kıyafetler: Tarzına ve vücut tipine göre tamamen sana özel çizimler ve tasarımlar yapıyoruz. Her detay senin zevkine göre belirlenir; benzersiz olman için.</li>
                        <li>Kişiye Özel Dikim: Profesyonel terzilerimiz ölçülerine tam oturan, kaliteli kumaşlarla kişisel dikim hizmeti sunar. Konfor ve estetik bir arada</li>
                        <li>Stil Danışmanlığı: Etkinlik, iş hayatı veya günlük yaşam fark etmeksizin; hangi parçaları nasıl kombinleyeceğini birlikte belirliyoruz. Sen sadece kendin ol, biz tarzını ön plana çıkaralım.</li>
                        <li>Online Sipariş ve Teslimat: Tüm ürünlerimizi online mağazamızdan kolayca sipariş edebilir, hızlı ve güvenli teslimat avantajından yararlanabilirsin.</li>
                        <li>Ücretsiz Beden Değişimi ve Destek: Satın aldığın ürün istediğin gibi olmadıysa, kolay değişim imkanıyla memnuniyet garantisi veriyoruz.</li>
                    </ul>
                </td>
            </tr>
        </table>
    </section>
   <footer style="background-color:black; color: white; text-align: center; padding: 10px;">
        <p>© 2025 Tüm haklarımız saklıdır. Maestro Stüdyo.</p>
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>