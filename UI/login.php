<?php
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]))  {
  // cek username & password
  if( $_POST["username"] == "admin" && $_POST["password"] == "12345") {
      // jika benar, redirect ke halaman admin
      header("Location: admin.php");
      exit;
    }else{
    // jika salah, tampilkan kesalahan
    echo $_POST ["username/password salah"];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>KOPERASI SIMPAN PINJAM</title>
  </head>
  <body>
    <div class="navbar">
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Layanan</a></li>
      </ul>
    </div>

    <div class="login-container">
      <h2>LOGIN</h2>
      <form action="admin.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="username"
            name="username"
            placeholder="Username"
            id="username"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            name="password"
            placeholder="password"
            id="password"
          />
        </div>
        <button type="submit" name="submit">login</button>

        <a href="register.html">Buat akun</a>
      </form>
    </div>
  </body>
</html>
