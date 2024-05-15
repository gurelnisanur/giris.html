<?php
session_start();

// Oturum kontrolü
if (!isset($_SESSION['username'])) {
    header("Location: giris.html");
    exit();
}

// Kullanıcı adını alma
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Hoşgeldiniz <?php echo $username; ?></h1>
    <p>Başarıyla giriş yaptınız! Hangi sayfaya gitmek isterseniz tıklamanız yeterli!</p>
    <a href="hakkimda.html">Hakkımda</a>
    <a href="ilgialanlarim.html">İlgi Alanlarım</a>
    <a href="sehrim.html">Şehrim</a>
    <a href="takim.html">Takımım</a>
    <a href="ozgecmis.html">Özgeçmişim</a>
    <a href="iletişim.html">İletişim</a>
    <br>
    <a href="logout.php">Çıkış Yap</a> <!-- veya logout işlemi için ayrı bir sayfa -->
</body>
</html>


