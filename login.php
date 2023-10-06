<?php
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"]))  {
    // cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        // jika benar, redirect ke halaman admin
        header("Location: ./admin.html");
        exit;
    } else {
        // jika salah, tampilkan pesan pop up
        echo "<script>alert('Login gagal. Periksa kembali username dan password Anda.');
        window.location.href='./UI/login.html';</script>";
    }
}
?>
