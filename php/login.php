<?php
session_start(); // Memulai sesi

$servername = "localhost";
$username = "root"; // username akses mysql
$password = ""; // password akses mysql
$dbname = "db_koperasi"; // Nama database yang digunakan

// Mengambil nilai dari formulir login
$username_input = $_POST["username"]; // Ambil nilai dari input username
$password_input = $_POST["password"]; // Ambil nilai dari input password

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk memeriksa apakah username dan password cocok
$sql = "SELECT * FROM user_login WHERE username='$username_input' AND password='$password_input'";
$result = $conn->query($sql);

if($result->num_rows == 1){
    // login berhasil
    $_SESSION['username'] = $username_input; // simpan username dalam sesi
    header("Location: ./admin.php"); //pindah ke halaman selanjutnya
    exit();
}else{
    // login gagal
    header("Location: ../UI/login.html"); //redirect kembali ke halaman login
    exit();
}

// Menutup koneksi
$conn->close();
?>
