<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Ödeme - Basit</title>



<style>
    
body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin-top: 150px;
  display: flex;
  justify-content: center;
  align-items:center;
  padding: 20px;
}

.wrap {
  display: flex;
  flex-direction: column;
  gap: 20px;
  max-width: 980px;
  width: 100%;
}

.card-preview {
  width: 340px; height: 210px;
  border-radius: 12px; padding: 20px;
  background: #000; color: #fff;
  position: relative;
}

.brand {
  position: absolute; right: 16px; top: 14px;
  font-weight: 700; font-size: 14px; text-transform: uppercase;
}

.chip {
  width: 46px; height: 32px; border-radius: 6px;
  background: linear-gradient(180deg, #f3c36b, #e39b2b);
}

.card-number { font-size: 20px; letter-spacing: 2px; margin-top: 16px; }
.card-row { display: flex; justify-content: space-between; margin-top: 18px; }
.small { font-size: 12px; opacity: 0.9; }

.container-form {
  background: #fff; padding: 18px; border-radius: 8px;
  box-shadow: 0 8px 22px rgba(0,0,0,0.06);
  width: 420px;
}

label {
  display: block; margin-top: 8px;
  font-size: 13px; color: grey;
}

input[type="text"], input[type="tel"] {
  width: 100%; padding: 10px; font-size: 14px;
  border: 1px solid #ccc; border-radius: 6px;
}

.row { display: flex; gap: 10px; margin-top: 6px; }
.col { flex: 1; }

.butn {
  margin-top: 12px; padding: 11px;
  width: 100%; font-size: 15px;
  border: 0; border-radius: 8px;
  background: blue; color: #fff; font-weight: 700;
  cursor: pointer;
}

.message {
  color: #fff; background: green;
  padding: 8px 10px; border-radius: 6px;
  margin-bottom: 10px; display: inline-block;
}

.error { color: red; margin-bottom: 10px; font-weight: 600; }

@media(max-width:760px) {
  .wrap { align-items: center; }
  .container-form { width: 320px; }
}


</style>
</head>