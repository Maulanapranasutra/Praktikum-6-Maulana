<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php $_SERVER['PHP SELF'];?>" method="post">
      <table>
        <tr>
          <td>NIS</td>
          <td> <input type="text" name="nis" value="" /> </td>
        </tr>
        <tr>
          <td>Nama</td>
          <td> <input type="text" name="nama" size="40" value="" /> </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> <input type="text" name="alamat" value="" /> </td>
        </tr>
        <tr>
          <td></td>
          <td> <input type="submit"  value="Simpan"> </td>
        </tr>
      </table>


    </form>
  </body>
</html>

<?php
  require_once "./connect.php";

  if (isset($_POST['nis']) && isset($_POST['nama'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tb_siswa VALUES ('".$nis."','".$nama."','".$alamat."')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo "Data berhasil ditambahkan";
    }
    else {
      echo "Gagal Menambahkan Data";
      echo mysqli_error($connect);
    }
  }

  echo '<hr/>';
  require_once "./record.php";

 ?>
