<?php
session_start();

// Kullanıcı adı ve şifre kontrolü
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Örnek kullanıcı adı ve şifre
    $valid_username = "g221210079@sakarya.edu.tr";
    $valid_password = "g221210079";

    // Kullanıcı adının email formatında olup olmadığını kontrol et
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        // Eğer e-posta formatında değilse uygun bir örnek sunalım ve kullanıcıyı uyaralım
        $example_username = "örnek: g221210079@sakarya.edu.tr";
        header("Location: giris.html?error=invalidusername&example=" . urlencode($example_username));
        exit();
    }

    // Kullanıcı adı ve şifre doğruluğunu kontrol et
    if ($username === $valid_username && $password === $valid_password) {
        // Giriş başarılı, kullanıcıyı yönlendir
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // Giriş başarısız, hata mesajı göster ve kullanıcıyı giriş sayfasına yönlendir
        header("Location: giris.html?error=invalid&message=Kullanıcı adı veya parola yanlış.");
        exit();
    }
} else {
    // Kullanıcı adı veya şifre eksikse hata mesajı göster ve kullanıcıyı giriş sayfasına yönlendir
    header("Location: giris.html?error=missing&message=Kullanıcı adı veya parola eksik.");
    exit();
}
?>















