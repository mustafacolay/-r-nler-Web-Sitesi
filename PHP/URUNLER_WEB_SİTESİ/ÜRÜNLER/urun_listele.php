<?php
$sql = "SELECT * FROM kiyafetler ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

echo "<table class='table table-bordered table-striped'>";
echo "<tr>
<th>ID</th>
<th>Ürün Adı</th>
<th>Renk</th>
<th>Resim</th>
<th>Fiyat</th>
<th>İşlemler</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['urun_adi']."</td>
    <td>".$row['renk_kod']."</td>
    <td>".$row['resim']."</td>
    <td>".$row['fiyat']."</td>
   
    <td>
        <a href='admin_panel.php?sayfa=guncelle&id=".$row['id']."' class='btn btn-warning btn-sm'>Düzenle</a>
        <a href='admin_panel.php?sayfa=sil&id=".$row['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Silmek istediğinize emin misiniz?\")'>Sil</a>
        
    </td>
    </tr>";
}
echo "</table>";
?>
