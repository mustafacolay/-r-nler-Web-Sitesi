
<?php
session_start();
include "config.php";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM kiyafetler WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $urun = mysqli_fetch_assoc($result);

    if ($urun) {
        if (!isset($_SESSION['sepet'])) {
            $_SESSION['sepet'] = [];
        }
         if (isset($_SESSION['sepet'][$id])) {
            $_SESSION['sepet'][$id]['adet']++;
        } else {
           
            $_SESSION['sepet'][$id] = [
                'urun_adi' => $urun['urun_adi'],
                'fiyat' => $urun['fiyat'],
                'resim' => $urun['resim'],
                'adet' => 1
            ];
        }
    }
}

header("Location: urun_detay.php?id=$id");
exit;
?>
