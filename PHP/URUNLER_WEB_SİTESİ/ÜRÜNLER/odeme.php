<?php
$message = "";
$kart_turu = "";
$kart_num = "";
$kart_isim = "";
$skt = "";
$cvv = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kart_turu = isset($_POST['kart_turu']) ? $_POST['kart_turu'] : '';
    $kart_num = isset($_POST['kart_num']) ? $_POST['kart_num'] : '';
    $kart_isim = isset($_POST['kart_isim']) ? $_POST['kart_isim'] : '';
    $skt = isset($_POST['skt']) ? $_POST['skt'] : '';
    $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';

    $sadece_rakam = preg_replace('/\D+/', '', $kart_num);

    if (strlen($sadece_rakam) < 16) {
        $message = "Kart numarası çok kısa veya hatalı.";
    } elseif ($skt !== '' && !preg_match('/^\d{2}\/\d{2}$/', $skt)) {
        $message = "SKT formatı MM/YY olmalıdır.";
    } elseif (strlen(preg_replace('/\D+/', '', $cvv)) < 3) {
        $message = "CVV 3 rakam olmalı.";
    } else {
        $message = "ÖDEMENİZ ALINDI";
    }
}

function h($v){ return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
<?php include 'gorsellestırme.php' ; ?>
<body>
<div class="wrap">
  <div class="card-preview" aria-hidden="true">
  <div class="brand"></div>
    <div class="chip"></div>

    <div class="card-number" id="previewNumber"><?php
        $pn = trim($kart_num) !== '' ? $kart_num : '#### #### #### ####';
        echo h($pn);
    ?></div>

    <div class="card-row">
      <div>
        <div class="small">Kart sahibi</div>
        <div id="previewName"><?php echo ($kart_isim !== '') ? strtoupper(h($kart_isim)) : 'AD SOYAD'; ?></div>
      </div>

      <div>
        <div class="small">SKT</div>
        <div id="previewSkt"><?php echo ($skt !== '') ? h($skt) : 'MM/YY'; ?></div>
      </div>
    </div>

    <div style="position:absolute; bottom:12px; right:16px; font-size:12px; opacity:0.95;">CVV <strong id="previewCvv"><?php echo ($cvv !== '') ? str_repeat('*', strlen(preg_replace('/\D+/', '', $cvv))) : '***'; ?></strong></div>
  </div>

  <form class="container-form" method="post" novalidate>
    <?php if ($message !== ''): ?>
      <div class="<?php echo ($message === 'ÖDEMENİZ ALINDI') ? 'message' : 'error'; ?>"><?php echo h($message); ?></div>
    <?php endif; ?>


  

    <label for="kart_num">Kart numarası</label>
    <input id="kart_num" name="kart_num" type="text" inputmode="numeric" maxlength="16" placeholder="1234 5678 9012 3456" >

    <label for="kart_isim">Kart üzerindeki isim</label>
    <input id="kart_isim" name="kart_isim" type="text" placeholder="AD SOYAD" value="<?php echo h($kart_isim); ?>">

    <div class="row">
      <div class="col">
        <label for="skt">SKT (MM/YY)</label>
        <input id="skt" name="skt" type="text" inputmode="numeric" maxlength="5" placeholder="MM/YY" >
      </div>
      <div style="width:120px">
        <label for="cvv">CVV</label>
        <input id="cvv" name="cvv" type="text" inputmode="numeric" maxlength="3" placeholder="123" >
      </div>
    </div>

    <button class="butn" type="submit">Ödemeyi Tamamla</button>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function(){

    const $previewBrand = $('.brand');
    const $previewNum = $('.card-number');
    const $previewName = $('.card-row div:first-child div:last-child');
    const $previewSkt = $('.card-row div:last-child div:last-child');
    const $previewCvv = $('div[style*="CVV"] strong');


    $('#kart_num').on('input', function(){
        const value = $(this).val().replace(/\D/g,'');
        $previewNum.text($(this).val() || '#### #### #### ####');

        if (value.startsWith('51') || value.startsWith('52') || value.startsWith('53')|| value.startsWith('54') || value.startsWith('55')) {
            $previewBrand.text('MasterCard');
            $('input[name="kart_turu"]').eq(1).prop('checked', true);
        } else if (value.startsWith('42') || value.startsWith('45')) {
            $previewBrand.text('VISA');
            $('input[name="kart_turu"]').eq(0).prop('checked', true);
        } else if (value.length >= 2) {
            $previewBrand.text('Bilinmiyor');
        } else if (value.length === 0) {
            $previewBrand.text('');
        }
    });

    $('#kart_isim').on('input', function(){
        $previewName.text($(this).val().toUpperCase() || 'AD SOYAD');
    });

    $('#skt').on('input', function(){
        $previewSkt.text($(this).val() || 'MM/YY');
    });

    $('#cvv').on('input', function(){
        const length = $(this).val().length;
        $previewCvv.text(length ? '*'.repeat(length) : '***');
    });

});
</script>

</body>
</html>

