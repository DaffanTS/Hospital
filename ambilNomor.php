<?php
      require_once "koneksi.php";

      $sql = "SELECT*FROM track_login ORDER BY id_track DESC LIMIT 1 " ;
      $result = mysqli_query($con,$sql);
?>

<html>

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

      <title>AMBIL ANTRIAN</title>
      
</head>

<body>
      <h1>AMBIL ANTRIAN</h1>

      <div class="input">
            <form action="ambilNomor.php" method="POST">
                  <table border="0">
                  <?php while ($datas = mysqli_fetch_row($result)): ?>
                        <tr>
                              <td>Username Pasien</td>
                              <td>: <input type="text" value="<?php echo $datas[1]; ?>" disabled name="username"></td>
                        </tr>
                  <?php endwhile; ?>
                        <tr>
                              <td>Pilih Poli</td>
                              <td>: <select name="kode_poli">
                                    <option value="0"></option>
                                    <option value="1">PLOBG</option>
                                    <option value="2">PLANAK</option> 
                                    <option value="3">PLBDH</option>
                                    <option value="4">PLMATA</option> 
                                    <option value="5">PLUM</option> 
                              </select></td>
                        </tr>

                        <tr>
                              <td>
                                    <a href="#">
                                          <button type="submit" name="login" class="btn btn-primary">Ambil
                                                Antrian</button>
                                    </a>
                              </td>

                        </tr>

                        <tr>
                              <td>Keterangan
                                    <ol>
                                          <li>Poliklinik OBGYN (Obstetri & Ginekologi) (PLOBG)</li>
                                          <li>Poliklinik Anak dan Tumbuh Kembang (PLANAK)</li>
                                          <li>Poliklinik Bedah Umum (PLBDH)</li>
                                          <li>Poliklinik Mata (PLMATA)</li>
                                          <li>Poliklinik Umum (PLUM)</li>
                                    </ol>
                              </td>
                        </tr>
                  </table>
            </form>
      </div>
</body>

</html>
