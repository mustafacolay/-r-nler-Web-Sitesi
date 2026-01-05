<?php
session_start();
include 'config.php';

$hata = "";
$kullanici_adi = "";

if(isset($_POST['giris'])){
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    $sql = "SELECT * FROM admin WHERE kullanici_adi='$kullanici_adi' AND sifre='$sifre'";
    $result = mysqli_query($admin_conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['admin'] = $kullanici_adi;
        header("Location: admin_panel.php");
        exit();
    } else {
        $hata = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Giriş</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  
<?php include 'partials/_navbar.php'; ?> 
<div class="container mt-5" style="max-width:400px;">
  <h3>Admin Giriş</h3>
  <?php if (!empty($hata)) echo "<div class='alert alert-danger'>$hata</div>"; ?>

  <form method="POST">
    <label>Kullanıcı Adı</label>
    <input type="text" name="kullanici_adi" class="form-control" required value="<?= htmlspecialchars($kullanici_adi) ?>">

    <label class="mt-2">Şifre</label>
    <input type="password" name="sifre" class="form-control" required>

    <button type="submit" name="giris" class="btn btn-primary mt-3 w-100">Giriş Yap</button>
  </form>
</div>

</body>
</html>

