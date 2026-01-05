<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $resim_sorgu = mysqli_query($conn, "SELECT resim FROM kiyafetler WHERE id=$id");
    $resim_row = mysqli_fetch_assoc($resim_sorgu);
    if($resim_row['resim'] && file_exists("resimler/".$resim_row['resim'])){
        unlink("resimler/".$resim_row['resim']);
    }

    $sql = "DELETE FROM kiyafetler WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<div class='alert alert-success'>Ürün başarıyla silindi!</div>";
    } else {
        echo "<div class='alert alert-danger'>Hata: ".mysqli_error($conn)."</div>";
    }

    echo "<meta http-equiv='refresh' content='1;url=admin_panel.php?sayfa=urun_listele'>";
}
?>
