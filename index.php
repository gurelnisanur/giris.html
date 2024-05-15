<?php
session_start();

// Oturum kontrolü
if (isset($_SESSION['username'])) {
    // Oturum açıksa, kullanıcıyı karşılama sayfasına yönlendir
    header("Location: welcome.php");
    exit();
} else {
    // Oturum açık değilse, giriş sayfasına yönlendir
    header("Location: giris.html");
    exit();
}
?>



