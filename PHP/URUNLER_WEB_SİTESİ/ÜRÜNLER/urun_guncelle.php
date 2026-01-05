<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM kiyafetler WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['duzenle'])){
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

    if(isset($_FILES['resim']) && $_FILES['resim']['name'] != ""){
        $resim_name = $_FILES['resim']['name'];
        $resim_tmp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_tmp, "img/".$resim_name);
    } else {
        $resim = $row['resim'];
    }

    $sql = "UPDATE kiyafetler SET 
        urun_adi='$urun_adi', 
        renk_kod='$renk_kod',  
        kumas_malzeme='$kumas_malzeme', 
        model_kilo='$model_kilo', 
        model_bacak_boy='$model_bacak_boy', 
        model_ust_beden='$model_ust_beden', 
        urun_boy='$urun_boy', 
        urun_bel='$urun_bel', 
        urun_ic_bacak='$urun_ic_bacak', 
        fiyat='$fiyat', 
        resim='$resim',
        urun_bilgi='$urun_bilgi'
        WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "<div class='alert alert-success'>Ürün güncellendi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Hata: ".mysqli_error($conn)."</div>";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label>Ürün Adı</label>
    <input type="text" name="urun_adi" class="form-control">
  </div>

  <div class="mb-3">
    <label>Renk ve Kod</label>
    <input type="text" name="renk_kod" class="form-control" value="<?= $row['renk_kod'] ?>">
  </div>

  <div class="mb-3">
    <label>Kumaş Malzemesi</label>
    <input type="text" name="kumas_malzeme" class="form-control" value="<?= $row['kumas_malzeme'] ?>">
  </div>

  <div class="row">
   
    <div class="col mb-3">
      <label>Model Kilo</label>
      <input type="number" name="model_kilo" class="form-control" value="<?= $row['model_kilo'] ?>">
    </div>
  </div>

  <div class="row">
    <div class="col mb-3">
      <label>Model Bacak Boy</label>
      <input type="number" name="model_bacak_boy" class="form-control" value="<?= $row['model_bacak_boy'] ?>">
    </div>
</div>

  <div class="mb-3">
    <label>Model Üst Beden</label>
    <input type="text" name="model_ust_beden" class="form-control" value="<?= $row['model_ust_beden'] ?>">
  </div>

  <div class="row">
    <div class="col mb-3">
      <label>Ürün Boy</label>
      <input type="text" name="urun_boy" class="form-control" value="<?= $row['urun_boy'] ?>">
    </div>
    <div class="col mb-3">
      <label>Ürün Bel</label>
      <input type="text" name="urun_bel" class="form-control" value="<?= $row['urun_bel'] ?>">
    </div>
    <div class="col mb-3">
      <label>Ürün İç Bacak</label>
      <input type="text" name="urun_ic_bacak" class="form-control" value="<?= $row['urun_ic_bacak'] ?>">
    </div>
  </div>

  <div class="mb-3">
    <label>Fiyat</label>
    <input type="text" name="fiyat" class="form-control" value="<?= $row['fiyat'] ?>">
  </div>

  <div class="mb-3">
    <label>Resim</label>
   <input type="file" name="urun_resim" id="urun_resim" class="form-control">
<?php if($row['resim'] != ""): ?>
  <img src="img/<?= $row['resim'] ?>" alt="Ürün Resmi" style="max-width:150px;">
<?php endif; ?>

  </div>
  <div class="mb-3">
    <label>Ürün Bilgisi</label>
    <input type="text" name="urun_bilgi" class="form-control">
  </div>

  <button type="submit" name="duzenle" class="btn btn-warning w-100">Güncelle</button>
</form>

