<?php
  session_start();
  include 'connect.php';

  $nis = $_POST['nis'];
  $password = $_POST['password'];

  if($nis == "" || $password == "")
  {
    header("location: form-login.php");
  }
  else {

  }
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if ($num == 1) {
    echo "<script>
    alert('Login Berhasil')
    </script>";
    echo "<h1>LOGIN</h1>";
    echo "<h1><a href='editprofil.php'>Edit Profile</a></h1>";
    echo "<h1><a href='logout.php'>Logout</a></h1>";
    $_SESSION['nis'] = $nis;
  }
  else {
    echo "<script>
    alert('Login gagal')
    </script>";
    include 'form-login.php';
  }

 ?>
