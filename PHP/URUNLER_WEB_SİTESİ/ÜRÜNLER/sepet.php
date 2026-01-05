<?php
session_start();
include 'partials/_navbar.php'; 

if (!isset($_SESSION['sepet']) || empty($_SESSION['sepet'])) {
    echo "<h3 class='text-center mt-4'>Sepetiniz boş!</h3>";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];


    if ($action == "increase") {
        $_SESSION['sepet'][$id]['adet']++;
    } elseif ($action == "decrease" && $_SESSION['sepet'][$id]['adet'] > 1) {
        $_SESSION['sepet'][$id]['adet']--;
    } elseif ($action == "decrease" && $_SESSION['sepet'][$id]['adet'] == 1) {
        unset($_SESSION['sepet'][$id]);
    }

    header("Location: sepet.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sepet & Ödeme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

<table class="table table-bordered text-center">
<tr>
  <th>Ürün</th>
  <th>Adet</th>
  <th>Fiyat</th>
  <th>Toplam</th>
  <th>İşlem</th>
</tr>

<?php 
$genelToplam = 0;

foreach($_SESSION['sepet'] as $id => $urun): 
    $toplam = $urun['adet'] * $urun['fiyat'];
    $genelToplam += $toplam;
?>
<tr>
  <td><?= $urun['urun_adi'] ?></td>
  <td><?= $urun['adet'] ?></td>
  <td><?= $urun['fiyat'] ?> TL</td>
  <td><?= $toplam ?> TL</td>

  <td>
      <form method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="action" value="increase">
        <button class="btn btn-md btn-success">+</button>
    </form>
    <form method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="action" value="decrease">
        <button class="btn btn-md btn-warning">-</button>
    </form>
    
  
  </td>
</tr>
<?php endforeach; ?>
</table>


<h4 style="margin-right:80px;"class="p-5">Net Toplam: <strong><?= $genelToplam ?> TL</strong></h4>
 <?php  include "odeme.php"; ?>
 


</body>
</html>

