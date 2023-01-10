<?php
require 'koneksi.php';

// Diinisialisasi terlebih dahulu

$username = $_POST["username"];
$password = $_POST["password"];

// query untuk memasukkan data //

$query_sql = "SELECT * FROM pasien
            WHERE username = '$username '  AND password = '$password'";

$query_sql2 = "INSERT INTO track_login (username, password)
            VALUES ('$username','$password')";

$result = mysqli_query($con, $query_sql);
$result2 = mysqli_query($con, $query_sql2);


if(mysqli_num_rows($result) > 0){
      if(mysqli_num_rows($result2) > 0){
            echo "<script>alert('Sukses')</script>"; 
      }
      echo "<script>alert('Berhasil Login');window.location='ambilNomor.php'</script>";
      echo $_POST['username'];
      echo $_POST['password'];

      

   
}else{
      echo "GAGAL, Silakkan coba kembali 
      <button><strong><a href='loginPasien.html'>Login<a/></strong></button>";
}

?>