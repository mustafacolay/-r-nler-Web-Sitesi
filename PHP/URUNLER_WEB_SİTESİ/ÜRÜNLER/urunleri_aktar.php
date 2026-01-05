<?php
include "config.php";

$urunler = [
     ["Erkek Premium Kalite Beli Lastikli Geniş Kalıp Keten Şort",
    "Bej(E1332)","Keten Polyester","82","103","M/38","183","87","81","500 TL","Şort.jpeg"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
       ["Erkek Zamansız Şıklık Elit Tarzda Klasik Takım Elbise ",
    "Füme(E1433)"," %90 Polyester %10 Elestan","82","103","M/38","183","87","81","3000 TL","Takım elbise.jpeg"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
      ["Erkek Özel Koleksiyon Oversize Kalıp Kanguru Cep Çıtçıt Detay İçi Astarlı Gabardin Kumaş Ceket",
    "Gri(E1463)","%100 Polyester","82","103","M/38","183","87","81","1500 TL" ,"kıyafet1.png"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
      [" Erkek Yüksek Kalite Oversize Kalıp Cep Detay Yazlık Kumaş Gömlek",
    "Lacivert(E1440)","%65 Cotton %35 Polyester","82","103","M/38","183","87","81","700 TL" ,"gömlek.jpeg"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
      ["Erkek Pileli Baggy Beli Lastikli Kumaş Pantolon",
    "Bej(E1458)","%100 Polyester","82","103","M/38","183","87","81","800 TL" ,"kıyafet2.png"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
      ["Erkek Yüksek Kalite Cep Detaylı Ribanalı Oversize Mont",
    "Beyaz(E1258)","Polyester","82","103","M/38","183","87","81","2500 TL" ,"mont.png"
    ,"Ölçü Bilgileri Modelin Üzerindeki Bedenin Ölçüleridir Bedenler Arası 2-3 cm Fark Vardır"],
];

foreach($urunler as $urun){
    $urun_adi = $urun[0];
    $check = mysqli_query($conn, "SELECT * FROM kiyafetler WHERE urun_adi='$urun_adi'");
    if (mysqli_num_rows($check) == 0) {
        $sql = "INSERT INTO kiyafetler (urun_adi,renk_kod,kumas_malzeme,model_kilo,model_bacak_boy,
        model_ust_beden,urun_boy,urun_bel,urun_ic_bacak,fiyat,resim,urun_bilgi) 
        VALUES ('$urun[0]', '$urun[1]','$urun[2]','$urun[3]','$urun[4]','$urun[5]',
        '$urun[6]','$urun[7]','$urun[8]','$urun[9]','$urun[10]','$urun[11]')";
        mysqli_query($conn, $sql);
    }
}

echo "<div style='font-size:30px; color:green; font-weight:bold; text-align:center; margin-top:50px;'>
İşleminiz Başarıyla tamamlanmıştır!!
</div>";

?>






