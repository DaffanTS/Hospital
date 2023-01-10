<?php
require 'koneksi.php';

// Diinisialisasi terlebih dahulu

$noidentitas = $_POST["no_identitas"];
$nama = $_POST["nama"];
$gender = $_POST["jenis_kelamin"];
$lahir = $_POST["tgl_lahir"];
$alamat = $_POST["alamat"];
$notlpn = $_POST["no_telp"];
$username = $_POST["username"];
$password = $_POST["password"];
$tanggal = $_POST["tanggal_daftar"];

// // query untuk Select data //
$jenisKelaminn = mysqli_query("SELECT jenis_kelamin from pasien");

// query untuk memasukkan data //

$query_sql = "INSERT INTO pasien (no_identitas, nama, jenis_kelamin, tgl_lahir, alamat, no_telp, username, password, tanggal_daftar)
            VALUES ('$noidentitas','$nama','$gender','$lahir','$alamat','$notlpn','$username','$password','$tanggal')";


if(mysqli_query($con, $query_sql)){
      echo "<script>alert('Pendaftaran Berhasil, Silakkan untuk Login menggunakan Username dan Password');window.location='loginPasien.html'</script>";

      // header("location: loginPasien.html");
   
}else{
      echo "Pendaftaran GAGAL Periksa Kembali Koneksi Anda :" . mysqli_error($con);
}
?>