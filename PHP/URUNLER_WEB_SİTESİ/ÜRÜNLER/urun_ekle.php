<?php
if(isset($_POST['ekle'])){
    $urun_adi = $_POST['urun_adi'];
    $renk_kod = $_POST['renk_kod'];
    $kumas_malzeme = $_POST['kumas_malzeme'];
    $model_kilo = $_POST['model_kilo'];
    $model_bacak_boy = $_POST['model_bacak_boy'];
    $model_ust_beden = $_POST['model_ust_beden'];
    $urun_boy = $_POST['urun_boy'];
    $urun_bel = $_POST['urun_bel'];
    $urun_ic_bacak = $_POST['urun_ic_bacak'];
    $fiyat = $_POST['fiyat'];
    $urun_bilgi = $_POST['urun_bilgi'];

    if (isset($_FILES['resim']) && $_FILES['resim']['name'] != "") {
        $resim = $_FILES['resim']['name'];  
        $resim_tmp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_tmp, "img/" . $resim);
    } else {
        $resim = ""; 
    }

    $sql = "INSERT INTO kiyafetler 
    (urun_adi, renk_kod, kumas_malzeme, model_kilo, model_bacak_boy, model_ust_beden, urun_boy, urun_bel, urun_ic_bacak, fiyat, resim, urun_bilgi)
    VALUES
    ('$urun_adi','$renk_kod','$kumas_malzeme','$model_kilo','$model_bacak_boy','$model_ust_beden','$urun_boy','$urun_bel','$urun_ic_bacak','$fiyat','$resim','$urun_bilgi')";

    if(mysqli_query($conn, $sql)){
        echo "<div class='alert alert-success'>Ürün eklendi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Hata: ".mysqli_error($conn)."</div>";
    }
}

?>

<form method="POST" enctype="multipart/form-data">
  <label>Ürün Adı</label>
  <input type="text" name="urun_adi" class="form-control" required>

  <label>Renk ve Kod</label>
  <input type="text" name="renk_kod" class="form-control">

  <label>Kumaş Malzemesi</label>
  <input type="text" name="kumas_malzeme" class="form-control">

  <label>Model Kilo</label>
  <input type="number" name="model_kilo" class="form-control">

  <label>Model Bacak Boy</label>
  <input type="number" name="model_bacak_boy" class="form-control">

  <label>Model Üst Beden</label>
  <input type="text" name="model_ust_beden" class="form-control">

  <label>Ürün Boy</label>
  <input type="text" name="urun_boy" class="form-control">

  <label>Ürün Bel</label>
  <input type="text" name="urun_bel" class="form-control">

  <label>Ürün İç Bacak</label>
  <input type="text" name="urun_ic_bacak" class="form-control">

  <label>Fiyat</label>
  <input type="text" name="fiyat" class="form-control">

  <label>Resim</label>
  <input type="file" name="resim" class="form-control">

  <label>Ürün Bilgisi</label>
  <input type="text" name="urun_bilgi" class="form-control">

  <button type="submit" name="ekle" class="btn btn-primary mt-3 w-100">Kaydet</button>
</form>
