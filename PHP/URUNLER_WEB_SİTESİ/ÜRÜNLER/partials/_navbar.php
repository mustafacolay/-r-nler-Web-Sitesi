<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="maestrostudyo.php">Anasayfa <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkımızda.php">Hakkımızda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="urunler.php">Ürünler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletişim.php">İletişim</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="admin_login.php">Admin Giriş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_panel.php">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php">Yardım</a>
                </li>
                <?php
$sepetSayisi = isset($_SESSION['sepet']) ? array_sum(array_column($_SESSION['sepet'], 'adet')) : 0;
?>
<li class="nav-item">
    <a class="nav-link" href="sepet.php">
        <i class="fas fa-shopping-cart"></i> Sepet
        <span class="badge bg-danger text-white" style="font-size: 12px; margin-left: 4px;">
            <?= $sepetSayisi ?>
        </span>
    </a>
</li>

            
            </ul>
            

        </div>
    </nav>