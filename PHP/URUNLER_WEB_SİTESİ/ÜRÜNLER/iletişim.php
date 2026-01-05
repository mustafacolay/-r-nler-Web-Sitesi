<?php session_start(); ?>
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
   
 

    <div class="row">
        <div style="width:50%; background:#f3f3f3; padding-left: 25px; align-items:center; justify-content:center;">
            <h1 style="margin-left: 10px;">ADRESİMİZ</h1>
            <p style=" margin-left: 10px;font-size: 30px;">Prof. Dr. Turan Güneş Cd., Veliefendi, 34025 Zeytinburnu/İstanbul</p>
        </div>

        <div style="width:50%; display:flex; align-items:center; justify-content:center;">
            <form action="#" method="post" style="width:100%; max-width:450px; display:flex; flex-direction:column; gap:15px;">
                <p class="font-weight-bold" style="font-size: 20px;">KAYIT FORMU</p>

                <div style="display:flex; gap:10px;">
                    <input type="text" name="isim" placeholder="İsim" required style=" padding:10px;">
                    <input type="text" name="soyisim" placeholder="Soyisim" required style=" padding:10px;">
                </div>

                <div style="display:flex; gap:10px;">
                    <input type="email" name="mail" placeholder="E-posta" style=" padding:10px;">
                    <input type="password" name="sifre" placeholder="Şifre" style=" padding:10px;">
                </div>

                <textarea name="adres" rows="" placeholder="Adresinizi giriniz..." style="padding:10px;"></textarea>
                    <div>
                    <input type="tel"  rows="" name="tel" placeholder="Tel " style=" padding:10px;">
                </div>

                <button type="submit" style="padding:10px; background:#0078ff; color:white; border:none; border-radius:5px; font-size:16px; cursor:pointer;">
        Kaydet
      </button>

            </form>
        </div>

    </div>

    <br><br>

    <div style="width:100%; height:400px;">

        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d6023.109854171167!2d28.893459485105453!3d40.99122572197016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d40.994197706501744!2d28.894746945400787!5e0!3m2!1str!2str!4v1760281815637!5m2!1str!2str"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>


    <div style="width:100%;  padding:20px;">
        <a href="#" style=" color:#E1306C; font-size:50px;">
            <i class="fa-brands fa-square-instagram"></i>
        </a>
        <a href="#" style="color:#000000; font-size:50px;">
            <i class="fa-brands fa-square-x-twitter"></i>
        </a>
        <a href="#" style="color:red; font-size:50px;">
            <i class="fa-brands fa-square-youtube"></i>
        </a>
        <a href="#" style=" color:blue; font-size:50px;">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="#" style=" color: #25D366; font-size:50px;">
            <i class="fa-brands fa-square-whatsapp"></i>
        </a>
         

    </div>
    <?php include 'partials/_footer.php';?>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>