<?php
// Kullanıcı adı ve şifre bilgileri veritabanından alınabilir.
// Bu örnek kodda sabit bir kullanıcı adı ve şifre kullanılıyor.

$kullanici_adi = "admin";
$sifre = "1234";

// Formdan gönderilen verileri kontrol edin.
if ($_POST["kullaniciadi"] == $kullanici_adi && $_POST["sifre"] == $sifre) {
    // Kullanıcı adı ve şifre doğru, kullanıcıyı ana sayfaya yönlendirin.
    header("Location:Header.html");
} else {
    // Kullanıcı adı veya şifre yanlış, hata mesajı gösterin.
    echo "Kullanıcı adı veya şifre yanlış. Lütfen tekrar deneyin.";
}
?>