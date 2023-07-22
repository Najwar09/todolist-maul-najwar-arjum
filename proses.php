<?php 
require_once 'koneksi.php';

if ($_POST['id'] == 'tambah') {
  $tugas = $_POST['tugas'];
  $tanggal = $_POST['tanggal'];
  $sql = "INSERT INTO list VALUES ('','$tugas','$tanggal')";
  mysqli_query($conn, $sql);
  echo '<script>alert("Data Berhasil Di tambahkan");window.location="index.php"</script>';

}
else{
	echo "<script>alert('data gagal ditambahkan');</script>";
}




if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "DELETE FROM todos WHERE id=$id";
  mysqli_query($conn, $sql);
}














 ?>