<?php
      require_once "koneksi.php";
      $sql = "SELECT*FROM data_dokter";
      $result = mysqli_query($con,$sql);

      $sql2 = "SELECT*FROM form_komentar";
      $hasil = mysqli_query($con,$sql2);

      $sql3 = "SELECT*FROM blog";
      $hasilni = mysqli_query($con,$sql3);
?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

            <!-- ICON IONS -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>

            <style>
                  .btnnn {
                        font-size: 15px;
                        width: 130px;
                        height: 56px;
                        border-radius: 100px;
                        background-color: var(--red);
                        color: var(--white);
                        margin-right:8px;
                  }
                  .namaDok{
                        font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 600;
                        font-size: 18px;
                        line-height: 24px;
                        color: #211B3D;
                        text-align:center
                        }
                  .card-text{
                        font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 600;
                        font-size: 14px;
                        line-height: 16px;
                        color: #211B3D;
                        text-align:center;
                        align-items: center;
                  }

                  .email{
                        font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 600;
                        font-size: 12px;
                        line-height: 16px;
                        color: #3258E8;
                        text-align:center;
                        align-items: center;
                  }

                  .iconkhu{
                        font-size: 12px;
                        line-height: 20px;
                        background-color: #3258E8;
                        color: #ffffff;
                        padding: 5px;
                        margin:4px;
                        border-radius: 100px;
                        text-align:center;
                        align-items: center;
                  }

                  .iconkhu2{
                        font-size: 16px;
                        line-height: 20px;
                        background-color: #211B3D;
                        color: #ffffff;
                        padding: 6px;
                        margin:4px;
                        border-radius: 8px;
                        text-align:center;
                        align-items: center;
                  }

                  .backgorund{
                        background-color: #211B3D;
                        padding: 60px 80px 80px 80px;
                  }

                  #testimoni .judul{
                        text-align: center;
                        align-items: center;
                        margin-bottom: 48px;
                  }

                  #testimoni .title22 {
                        font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 800;
                        font-size: 40px;
                        line-height: 64px;
                        margin-bottom: 20px;
                        color: var(--white);
                  }

                  #testimoni .paragraf {
                        font-family: 'Poppins';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 16px;
                        line-height: 32px;
                        color: var(--font2);
                  }

                  #testimoni .paragrafKhusus {
                        color: var(--mainColor);
                        font-size: 16px;
                        font-weight: 600;
                  }

                  #testimoni .card{
                        border-radius: 24px;
                        padding: 32px 24px;
                  }

                  #testimoni .card-title{
                        font-family: 'Poppins';
                        font-size: 20px;
                        font-weight: 600;
                        color: var(--mainColor);
                  }

                  #testimoni .isi{
                        color: var(--font1);
                        font-family: 'Poppins';
                        font-size: 16px;
                        line-height: 24px;
                        font-weight: lighter;
                  }

                  #testimoni .card .profil img{
                        border-radius: 100px;
                        width: 52px;
                  }

                  #testimoni .prof{
                        padding: 8px 8px 8px 16px;
                  }

                  #testimoni .textNama{
                        font-family: 'Poppins';
                        font-size: 14px;
                        margin-bottom: 2px;
                        font-weight: 600;
                        color: var(--darkBlue);
                  }

                  #testimoni .textPekerjaan{
                        font-family: 'Poppins';
                        font-size: 11px;
                        margin: 0px;
                        color: var(--font2);
                  }

                  /* card */
                  
                  #blog .card{
                        border-radius: 20px;
                  }

                  #blog .card img{
                        border-radius: 20px 20px 0px 0px;
                  }

                  #blog .card .card-footer{
                        border-radius: 0px 0px 20px 20px;
                  }
                  #blog .card-title{
                        line-height: 32px;
                  }


                  #blog .ikon{
                  color: var(--font2); 
                  margin-right: 8px ;
                  font-size: 18px;
                  line-height: 24px;
                  }
                  #blog .paragrafKhusus{
                        font-size: 14px;
                        line-height: 20px;
                        color: var(--font2);
                  }

                  #blog .detail .row{
                        margin-top: 0px;
                        margin-left: 0px;
                  }

                  #blog .card-text{
                        font-size: 14px;
                        line-height: 24px;
                        color: var(--font2);
                  }

                  #blog .card-footer{
                        padding: 20px 40px;
                  }

                  footer{
                        background-color: var(--softGrey);
                        color: var(--font1);
                  }

                  .link{
                        padding-top: 32px;
                  }

                  .sosmed{
                        background-color: var(--softGrey);
                  }

                  .iconCss {
                        height: 16px;
                        padding: 10px;
                        color: var(--white);
                        background-color: var(--darkBlue);
                        border-radius: 100%;
                        margin-left: 6px;
                        margin-right: 6px;
                        margin-top: 12px;
                        margin-bottom: 16px;
                  }

                  .gambarFoot{
                        margin-bottom: 20px;
                  }

                  .headingFoot{
                        font-size: 20px;
                        margin-bottom: 20px;
                        font-weight: 600;
                  }

                  .contentFoot{
                        font-size: 16px;
                        font-weight: 200;
                        color: var(--font1);
                  }

                  .float {
                        color: var(--white);
                  }

                  .act-btn {
                        background: #22C55E;
                        display: block;
                        width: 80px;
                        height: 80px;
                        line-height: 88px;
                        align-items: center;
                        text-align: center;
                        color: black;
                        font-size: 40px;
                        font-weight: bold;
                        border-radius: 50%;
                        -webkit-border-radius: 50%;
                        text-decoration: none;
                        transition: ease all 0.3s;
                        position: fixed;
                        right: 72px;
                        bottom: 32px;
                        filter: drop-shadow(0px 10px 30px rgba(0, 0, 0, 0.25));

                  }

                  .act-btn:hover {
                        background: #FFCE35;
                        color: black;
                  }

                  .icon2{
                        height: 32px;
                        width: 32px;
                        padding: 12px;
                        color: var(--darkBlue);
                        /* background-color: var(--white); */
                        border-radius: 100%;
                        margin-top: 40px;
                        margin-bottom: 8px;
                        border: dashed 2.5px var(--darkBlue);
                  }

            </style>
      
      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style2.css">

      <title>Home</title>
      </head>
      <body>
            <!-- Navbar Start -->
            <div class="container-fluid">
                  <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                              <img src="image/unnamed.png" height="64" alt="Medi Doctor">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
            
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                          <a class="nav-link"href="#tentang">Tentang Kami</a>
                                    </li>

                                    <li class="nav-item ">
                                          <a class="nav-link"href="#pelayanan">Pelayanan</a>
                                    </li>

                                    <li class="nav-item ">
                                          <a class="nav-link"href="#dokter">Dokter Kami</a>
                                    </li>

                                    <li class="nav-item ">
                                          <a class="nav-link"href="#testimoni">Review</a>
                                    </li>

                                    <li class="nav-item ">
                                          <a class="nav-link"href="#blog">Blog</a>
                                    </li>
                                    
                              </ul>
            
                              <div class="my-2 my-lg-0">
                                    <a target="_blank" href="#">
                                          <button class="btn my-2 my-sm-0 btnnn">Ambulance</button>
                                    </a>

                                    <a target="_blank" href="halamanAppointment.html">
                                          <button class="btn my-2 my-sm-0 btnn">Masuk/Daftar</button>
                                    </a>
                              </div>
                        </div>
                  </nav>
            </div>

            <!-- Hero Start -->
            <div class="container-fluid " id="hero">
                  <div class="section4">
                        <div class="row">
                              <div class="col-lg-6 col-12 gambarLing">
                                    <img src="image/home-img.svg" alt="" style="color: blue;"> 
                              </div>

                              <div class="col-lg-6 col-12 konten">
                                    <h2 class="title2">WE TAKE CARE OF <br> YOUR HEALTH LIFE</h2>

                                    <p class="paragraf">
                                          Seseorang yang memiliki kesehatan fisik yang baik cenderung memiliki fungsi dan proses tubuh yang bekerja pada titik maksimalnya.
                                    </p>

                                    <div class="ctaGroup">
                                          <a class="linkBut" target="_blank" href="halamanAppointment.html">
                                                <button type="button" href="halamanAppointment.html"
                                                      class="btn btn-primary btn10">Appointment</button>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            
            <!-- JUMLAH SECTION START -->
            <div class="container-fluid jarakBawah" id="jumlah">
                  <div class="section2">
                        <div class="row">
                              <div class="col-lg-3 col-6 col-12">
                                    <img src="image/icon5.png">
                                    <h6>150+</h6>
                                    <p>Doktor Bekerja</p>
                              </div>

                              <div class="col-lg-3 col-6 col-12">
                                    <img src="image/icon6.png">
                                    <h6>1030+</h6>
                                    <p>Pasien Yang Puas</p>
                              </div>

                              <div class="col-lg-3 col-6 col-12">
                                    <img src="image/icon7.png">
                                    <h6>490+</h6>
                                    <p>Fasilitas Kasur</p>
                              </div>

                              <div class="col-lg-3 col-6 col-12">
                                    <img src="image/icon8.png">
                                    <h6>70+</h6>
                                    <p>Kamar Tersedia</p>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- JUMLAH SECTION END -->


            <!-- Tentang Kami Start -->
            <div class="container-fluid jarakAtasBawah" id="tentang">
                  <div class="section4">
                        <div class="row">
                              <div class="col-lg-6 col-12 gambarLing">
                                    <img src="image/about-img.svg" alt="">
                              </div>

                              <div class="col-lg-6 col-12 konten">
                                    <h2 class="title22">TAKE THE WORLD'S <br> BEST QUALITY TREATMENT</h2>

                                    <p class="paragraf">
                                          Medi Doctor merupakan Rumah Sakit Swasta yang mempunyai konsep dan rancang bangun fisik dengan Konsep Hijau (Green Hospital Concept) yang ramah lingkungan dan berorientasi sepenuhnya pada keselamatan pasien. Bangunan yang berdiri di atas lahan seluas 400 meter persegi ini berlokasi di kompleks perumahan permata hijau.
                                    </p>

                                    <div class="ctaGroup">
                                          <a class="linkBut" target="_blank" href="halamanAppointment.html">
                                                <button type="button" href="halamanAppointment.html"
                                                      class="btn btn-warning btn11">Baca Lebih Lanjut</button>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- Tentang Kami end -->


            <!-- PELAYANAN SECTION START -->
            <div class="container-fluid jarakAtasBawah" id="pelayanan">
                  <div class="section3">
                        <div class="row">
                              <div class="col-lg-6 col-12">
                                    <h2 class="title222">Pelayanan<br>Kami</h2>
                              </div>

                              <div class="row keung col-lg-6 col-12">
                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon2.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Gratis Check Up</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon3.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Ambulance 24/7</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon4.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Dokter Berpengalaman</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon1.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Obat-obatan</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon4.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Fasilitas Kasur</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                          <img class="icon" src="image/icon1.png" alt="Icon Satu">
                                          <div>
                                                <h5 class="titleKeunggulan">Pelayanan Maksimal</h5>
                                                <p class="paragraf1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- PELAYANAN SECTION END -->


            <!-- Doktor start -->
            <div class="container-fluid jarakAtasBawah" id="dokter">
                  <div class="section5">
                        <h2 class="title222" style="text-align: center;">Doktor Kami</h2>
                  </div>

                  <div class="card-deck mt-5">
                        <?php while ($data = mysqli_fetch_row($result)): ?>
                              <div class="card">
                                    <img src="image/<?php echo $data[10]; ?>" class="card-img-top" alt="...">
                                    <div class="card-body" >
                                          <h5 class="card-title namaDok"><?php echo $data[2]; ?></h5>
                                          <hr/>
                                          <div style="text-align:center">
                                                <ion-icon class="iconkhu" name="calendar-clear-outline">
                                                </ion-icon> <ion-icon class="iconkhu"name="time-outline"></ion-icon>
                                          </div>
                                          
                                          <p class="card-text"><?php echo $data[3]; ?></p>
                                          <p class="card-text"><?php echo $data[4]; ?></p>
                                          <hr/>

                                          <div style="text-align:center">
                                                <ion-icon class="iconkhu2" name="logo-facebook"></ion-icon></ion-icon> 
                                                <ion-icon class="iconkhu2" name="logo-twitter"></ion-icon> 
                                                <ion-icon class="iconkhu2" name="logo-instagram"></ion-icon> 
                                                <ion-icon class="iconkhu2" name="logo-linkedin"></ion-icon>
                                          </div>

                                          <p class="card-text email"><?php echo $data[6]; ?></p>
                                    </div>
                              </div>
                        <?php endwhile; ?>
                  </div>                  
            </div>
            <!-- Doktor end -->


            <!-- Reiew Start -->
            <div class="container-fluid jarakAtasBawah" id="testimoni">
                  <div class="section6">
                        <h2 class="title222" style="text-align: center;">Kata Mereka</h2>
                  </div>


                  <div id="myCarousel" class="carousel slide mt-5" data-ride="carousel">
                        <div class="carousel-inner">
                              <div class="carousel-item active">
                                    <div class="card-deck">
                                          <?php while ($komen = mysqli_fetch_row($hasil)): ?>
                                                <div class="card">
                                                      <div class="komentar">
                                                            <p class="isi"><?php echo $komen[3]; ?></p>
                                                      </div>
                                                      <div class="row profil">
                                                            <div class="col-lg-2">
                                                                  <img class="card-img" src="image/<?php echo $komen[5]; ?>"
                                                                        alt="Card image cap">
                                                            </div>
                                                            <div class="col-lg-9 prof">
                                                                  <p class="textNama"><?php echo $komen[1]; ?></p>
                                                                  <p class="textPekerjaan"><?php echo $komen[2]; ?></p>
                                                            </div>
                                                      </div>
                                                </div>
                                          <?php endwhile; ?>
                                    </div>
                              </div>
                        </div>      
                  </div>
            </div>
            <!-- Reiew end -->


            <!-- blog start -->
            <div class="container-fluid jarakAtasBawah" id="blog">
                  <div class="section7">
                        <h2 class="title222" style="text-align: center;">Blog Kami</h2>
                  </div>

                  <div class="card-deck mt-5">
                        <?php while ($datas = mysqli_fetch_row($hasilni)): ?>
                              <div class="card">
                                    <img class="card-img-top" src="image/<?php echo $datas[5]; ?>" alt="Gambar blog">
                                    <div class="card-body">
                                          <a href="#"><h5 class="card-title"><?php echo $datas[1]; ?></h5></a>
                                          <p class="card-text"  style="text-align: left;"><?php echo $datas[2]; ?></p>
                                    </div>

                                    <div class="card-footer" style="text-align: center;">
                                          <div class="col row" style="text-align: center;">
                                                <ion-icon class="ikon" name="calendar-outline"></ion-icon>
                                                <p class="paragrafKhusus"><?php echo $datas[4]; ?></p>

                                                <ion-icon class="ikon" style="margin-left: 24px;" name="folder-open-outline"></ion-icon>
                                                <p class="paragrafKhusus">by <?php echo $datas[3]; ?></p>
                                          </div>                  
                                    </div>
                              </div>
                        <?php endwhile; ?>
                  </div>
            </div>
            <!-- blog end -->


            <!--fOOTER START -->
            <div class="jarakAtas" id="footer">
                  <footer>
                        <div class="container-fluid textFooter text-md-start ">
                              <div class="link row mt-3">
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-3">
                                          <img class="gambarFoot" src="image/unnamed.png" height="64" alt="Logo SMA INDOCEMENT">
                                          <p class="contentFoot">
                                          Medi Doctor merupakan Rumah Sakit Swasta yang mempunyai konsep dan rancang bangun fisik dengan Konsep Hijau (Green Hospital Concept) yang ramah lingkungan 
                                          </p>
                                    </div>
            
                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-3">
                                          <h6 class="headingFoot">Quick Link</h6>
                                          <p><a href="#" class="contentFoot">Home</a></p>
                                          <p><a href="#" class="contentFoot">Tentang Kami</a></p>
                                          <p><a href="#" class="contentFoot">Pelayanan</a></p>
                                          <p><a href="#" class="contentFoot">Dokter Kami</a></p>
                                          <p><a href="#" class="contentFoot">Review</a></p>
                                          <p><a href="#" class="contentFoot">Blog</a></p>
                                    </div>
            
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-3">
                                          <h6 class="headingFoot">Layanan</h6>
                                          <p><a href="#"class="contentFoot">Checkup</a></p>
                                          <p><a href="#" class="contentFoot">Ambulance</a></p>
                                          <p><a href="#" class="contentFoot">Obat-Obatan</a></p>
                                          <p><a href="#" class="contentFoot">Appointment</a></p>
                                    </div>
            
            
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-3">
                                          <h6 class="headingFoot">Appointment Info</h6>
                                          <p class="contentFoot">Lokasi : Perumahan Permata Hijau</p>
                                          <p class="contentFoot">Email : medidoctor@hospital.ac.id</p>
                                          <p class="contentFoot">Telepon : 02187940131</p>
                                    </div>
                              </div>
                        </div>

                        <hr>
            
                        <section class="sosmed py-3">
                              <div class="iconSosmed" style="text-align: center;">
                                    <a class="link" href="#">
                                          <ion-icon class="iconCss" name="logo-twitter"></ion-icon>
                                    </a>
                                    <a class="link" href="#">
                                          <ion-icon class="iconCss" name="logo-instagram"></ion-icon>
                                    </a>
                                    <a class="link" href="#">
                                          <ion-icon class="iconCss" name="logo-facebook"></ion-icon>
                                    </a>
                                    <a class="link" href="#">
                                          <ion-icon class="iconCss" name="logo-whatsapp"></ion-icon>
                                    </a>
                                    <a class="link" href="#navbar">
                                          <ion-icon class="iconCss" style="background-color: #3258E8; color: #FFFFFF;"
                                                name="arrow-up-outline"></ion-icon>
                                    </a>
                              </div>
            
                              <div style="text-align: center;">
                                    <h6 class="textBawah">©2022-2023 Copyright : Medi Doctor, Create by Daffan & Sri</h6>
                              </div>
                        </section>
                  </footer>
            </div>
            <!--fOOTER END -->

            <div class="floatingButton" style="text-align:right">
                  <a href="https://wasap.at/FRu5hG" target="_blank" class="act-btn">

                        <ion-icon class="float" name="logo-whatsapp"></ion-icon>
                  </a>
            </div>






      </body>
</html>