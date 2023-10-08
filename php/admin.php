<?php
session_start(); // Memulai sesi

if (!isset($_SESSION["username"])) {
    header("Location: ../UI/login.html"); // Jika pengguna belum login, kembali ke halaman login
    exit();
}

$username = $_SESSION["username"]; // Mendapatkan username dari sesi
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koperasi Simpan Pinjam</title>

    <!-- Fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
               <div class="list-item">
                   <a href="#">
                       <img src="" alt="" class="icon">
                       <span class="description-header"></span>
                   </a>
               </div> 
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="#">
                        <img src="" alt="" class="icon">
                        <span class="description"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            
        </div>
    </div>
    <script src="../js/function.js"></script>
</body>
</html>