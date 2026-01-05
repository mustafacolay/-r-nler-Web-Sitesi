<?php session_start(); ?>
<?php
$response="";
if(isset($_POST['message'])){
    $usermessage=strtolower(trim($_POST['message']));
if($usermessage=="merhaba" || $usermessage=="selam"){
    $response="Merhaba Size nasıl yardımcı olabilirim?";
}
elseif(strpos($usermessage, 'kargo')!==false){
    $response="Kargolarımız 3-5 gün içinde teslim edilir";
}
elseif(strpos($usermessage,"fiyat")!==false){
    $response=" Güncel fiyatlarımıza web sitemizden ulaşabilirsiniz!";
}
elseif(strpos($usermessage,"ceket")!==false){
    $response="Ceketlerimiz web sitemizde mevcuttur (Stoklar tükenmediyse)!";
}
else{
    $response="Söylemek istediğinizi anlayamadım Tekrarlarmısınız?";
} 
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <?php include 'partials/_navbar.php';?>
    <br><br>
    <h2 style="margin-left:20px;"  >Yardım Merkezi</h2>
    <form method="POST" style="margin-left:20px;">
        <textarea name="message" required style="width:500px; height:300px; resize:none; font-size:30px;"></textarea>
        <br><br>
        <button type="submit" style="padding: 30px; font-size:20px; background-color:blue;">Gönder</button>
    </form>
    <?php if($response!=""):?>
    <p style="font-size:35px;"><strong>Cevap: </strong><?php echo $response; ?></p>
    <?php endif;?>
    
    
    
</body>
</html>