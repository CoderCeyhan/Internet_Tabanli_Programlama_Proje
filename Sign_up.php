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

<?php
$success = '';
$error = '';

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $re_password = $_POST['re-password'];
  if ($username == null || $email == null ||  $password == null || $re_password == null) {
    $error = 'Lütfen boş değer bırakmayın.';
  } else {
    if ($password == $re_password) {
      mysqli_query($db, "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')");
      $success = 'Başarıyla kayıt yapıldı. Oturum açabilirsiniz.';
    } else {
      $error = 'Lütfen şifrelerinizin eşleştiğinden emin olun.';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <style>
    h1 {
      color: rgb(131, 22, 22);
      margin-left: 10px;
    }
  </style>
  <title>Kayıt Olun</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="CssFile.css">
</head>

<body>
<?php if ($db) { ?>
    <div>Veritabanına erişim sağlandı.</div>
  <?php
  } else { ?>
    <div><?php echo mysqli_connect_error(); ?></div>
  <?php
  }
  ?>
<div class="navbar">
    <h1>Tulpar.net</h1>
  </div>
  <?php if ($success) { ?>
    <div><?php echo $success; ?></div>
  <?php
  }
  ?>
  <?php if ($error) { ?>
    <div><?php echo $error; ?></div>
  <?php
  }
  ?>
  
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Oyun Rehberleri
      </button>
      <div class="dropdown-content">
        <a href="Dota2_Rehberi.html">Dota 2</a>
        <a href="cs-go.html">CS:GO</a>
        <a href="eu4.html">Europa Universalis IV</a>
      </div>
    </div>
    <a href="blog.html">Blog</a>
    <a href="cv.html">Özgeçmiş</a>
    <a href="Login.php" class="split active">Giriş Yapın</a>
    <a href="Sign_up.php" class="split active">Kaydolun</a>
    <?php echo "<a class='currency'>£$dovizKurArr[2]</a>"; ?>
    <?php echo "<a class='currency'>€$dovizKurArr[1]</a>"; ?>
    <?php echo "<a class='currency'>$$dovizKurArr[0]</a>"; ?>
  </div>

  <h1 style="color:rgb(131, 22, 22)">Kayıt Olun</h1>
  <form class="loginForm" action="" method="post">
    <div class="formDiv">
      <label style="color:rgb(155, 48, 48)" for="email"><b>E-Posta</b></label>
      <input type="email" placeholder="E-Posta Adresini Giriniz:" name="email" required>

      <label style="color:rgb(155, 48, 48)" for="username"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Kullanıcı Adınızı Giriniz:" name="username" required>

      <label style="color:rgb(155, 48, 48)" for="password"><b>Şifre</b></label>
      <input type="password" placeholder="Şifreyi Giriniz:" name="password" required>

      <label style="color:rgb(155, 48, 48)" for="password"><b>Şifre Tekrar</b></label>
      <input type="password" placeholder="Şifreyi Giriniz:" name="re-password" required>

      <button type="submit" name="register">Kayıt Ol</button>

    </div>
  </form>
</body>