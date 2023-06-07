<?php

$db = mysqli_connect('localhost', 'php', '1234', 'internet_programlama_proje');

try {
  $dovizKur = @simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
  if (empty($dovizKur)) {
    throw new exception("Anlık bir hata nedeniyle döviz kuru alınamadı.Lütfen sayfayı tekrar yenileyiniz.");
  }
  $dovizKurArr =  [
    $dovizKur->Currency[0]->ForexSelling,
    $dovizKur->Currency[3]->ForexSelling,
    $dovizKur->Currency[4]->ForexSelling
  ];
} catch (Exception $dovizHata) {
  return $dovizHata->getMessage();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <title>Bloglar</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="CssFile.css">
  <style>
    p {
      margin-left: 20px;
      margin-right: 10px;
    }

    h1 {
      color: rgb(131, 22, 22);
      margin-left: 10px;
    }

  </style>
</head>

<body>
   <div class="navbar">
      <h1>Tulpar.net</h1>
   </div>
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Oyun Rehberleri
      </button>
      <div class="dropdown-content">
        <a class="active" href="Dota2_Rehberi.html">Dota 2</a>
        <a class="active" href="cs-go.html">CS:GO</a>
        <a class="active" href="eu4.html">Europa Universalis IV</a>
      </div>
    </div>
    <a href="blog.html">Blog</a>
    <a href="cv.html">Özgeçmiş</a>
    <a href="Login.html" class="split">Giriş Yapın</a>
    <a href="Sign-Up.html" class="split active">Kaydolun</a>
    <?php echo "<a class='currency'>£$dovizKurArr[2]</a>"; ?>
    <?php echo "<a class='currency'>€$dovizKurArr[1]</a>"; ?>
    <?php echo "<a class='currency'>$$dovizKurArr[0]</a>"; ?>
  </div>
  <h1>Bloglar</h1>
  <p>Bloglarımızı bu sayfa üzerinden görüntüleyebilir ve okuyabilirsiniz.</p>
  <div>
    <a class="ortala" href="bandirma.html">Bandırma Gezisi</a>
  </div><br><br><br>
  <div>
    <a class="ortala" href="didim.html">Didim Gezisi</a>
  </div><br><br><br>
  <div>
    <a class="ortala" href="hatay.html">Hatay Gezisi</a>
  </div>
</body>