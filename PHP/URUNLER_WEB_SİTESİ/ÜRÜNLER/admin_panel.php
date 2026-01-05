<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$sayfa = isset($_GET['sayfa']) ? $_GET['sayfa'] : '';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        <?php include 'partials/_navbar.php'; ?> 

<div class="container mt-5">
    <h2>Admin Panel</h2>
    <p>Hoşgeldiniz, <?= $_SESSION['admin'] ?> | <a href="logout.php" class="btn btn-danger btn-sm">Çıkış Yap</a></p>

    <div class="mb-4">
        <a href="admin_panel.php?sayfa=urun_ekle" class="btn btn-primary">Ürün Ekle</a>
        <a href="admin_panel.php?sayfa=urun_listele" class="btn btn-success">Ürünleri Listele</a>
        <a href="urunleri_aktar.php" class="btn btn-secondary">Ürünleri Aktar</a>
    
    <a href="kiyafetleri_aktar.php"><input type="file" name="resim" class="form-control"></a>
        
    </div>

    <div class="card p-4">
        <?php
        switch($sayfa){
            case 'urun_ekle':
                include "urun_ekle.php";
                break;
            case 'urun_listele':
                include "urun_listele.php";
                break;
            case 'guncelle':
                include "urun_guncelle.php";
                break;
            case 'sil':
                include "urun_sil.php";
                break;
            default:
                echo "<div class='alert alert-info'>Lütfen yapmak istediğiniz işlemi seçiniz.</div>";
        }
        ?>
    </div>
</div>



</body>
</html>
