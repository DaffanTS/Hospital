<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

    <style>
    .close-button .close {
	position: absolute;
	top: 10px;
	right: 30px;
	transition: all 200ms;
	font-size: 60px;
	font-weight: bold;
	text-decoration: none;
	color: #333;
    }
    .close-button .close:hover {
	color: #FF4949;
    }
    </style>
</head>
<body>
<!-- doctors section starts  -->
<div class="close-button">
    <a class="close" href="index.php">&times;</a>
</div>
</div>
<section class="doctors" id="doctors">
    <h1 class="heading"> Make <span>Appointment</span> </h1>
    <h1 class="Keterangan">1. Poliklinik OBGYN (Obstetri & Ginekologi) (PLOBG)</h1>
    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>dr. Meredith Grey</h3>
            <div class="share">
		    <a class="button" href="#MeredithGrey">Make Appointment</a>
	        </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>dr. Jackson Avery. Sp. B</h3>
            <div class="share">
		    <a class="button" href="#JacksonAvery">Make Appointment</a>
	        </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>dr. Miranda Bailey, Sp.M</h3>
            <div class="share">
		    <a class="button" href="#MirandaBailey">Make Appointment</a>
	        </div>
        </div>
    </div>
        <h1 class="Keterangan">2. Poliklinik Anak dan Tumbuh Kembang (PLANAK)</h1>
        <div class="box-container">
        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>dr. M. Arizona Robbins. Sp. B</h3>
            <div class="share">
		    <a class="button" href="#ArizonaRobbins">Make Appointment</a>
	        </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>dr. M. Derek Sheph, Sp. OG, M. KED KLIN</h3>
            <div class="share">
		    <a class="button" href="#DerekSheph">Make Appointment</a>
	        </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Prof. Dr. dr. H. Mark Sloan, Sp.A (K) IBCLC., SH</h3>
            <div class="share">
		    <a class="button" href="#MarkSloan">Make Appointment</a>
	        </div>
        </div>
    </div>
        <h1 class="Keterangan">3. Poliklinik Bedah Umum (PLBDH)</h1>
        <div class="box-container">
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>dr. Dahlia Qadri, Sp.A</h3>
            <div class="share">
		    <a class="button" href="#DahliaQadri">Make Appointment</a>
	        </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>dr. Preston Burke</h3>
            <div class="share">
		    <a class="button" href="#PrestonBurke">Make Appointment</a>
	        </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>dr. Levi Schmitt, Sp. B</h3>
            <div class="share">
		    <a class="button" href="#LeviSchmitt">Make Appointment</a>
	        </div>
        </div>
        </div>
    

</section>

<!-- doctors section ends -->
<!-- appointment popup section starts -->
<section class="appointment">

<section class="Meredith">
<div class="overlay" id="MeredithGrey">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-1.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">     
            <h1 class="heading"> dr. Meredith <span>Grey</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit1" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Jackson">
    <div class="overlay" id="JacksonAvery">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-2.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
             <h1 class="heading"> dr. Jackson <span>Avery. Sp. B</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit2" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Miranda">
    <div class="overlay" id="MirandaBailey">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-3.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> dr. Miranda<span> Bailey, Sp.M </span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit3" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Arizona">
    <div class="overlay" id="ArizonaRobbins">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-4.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> dr. M. Arizona  <span>Robbins. Sp. B</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit4" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Derek">
    <div class="overlay" id="DerekSheph">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-5.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading">dr. M. Derek Sheph, Sp. OG, M. KED KLIN <span>Sp. OG, M. KED KLIN</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit5" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Mark">
    <div class="overlay" id="MarkSloan">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-6.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> Prof. Dr. dr. H. Mark <span>Sloan, Sp.A (K) IBCLC., SH</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit6" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Dahlia">
    <div class="overlay" id="DahliaQadri">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-7.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> dr. Dahlia<span> Qadri, Sp.A </span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit7" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Burke">
    <div class="overlay" id="PrestonBurke">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                    <img src="image/doc-8.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> dr. Preston <span>Burke</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit8" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

<section class="Levi">
    <div class="overlay" id="LeviSchmitt">
		<div class="wrapper">
             <div class="row">
                <a class="close" href="#doctors">&times;</a>     
                <img src="image/doc-9.jpg" alt="">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1 class="heading"> dr. Levi  <span>Schmitt, Sp. B</span> </h1>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit9" value="Appointment Now" class="btn">
        </form>

            </div>
		</div>
    </div>
</section>

</section>


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit1'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `MeredithGrey`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit2'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `JacksonAvery`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit3'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `MirandaBailey`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit4'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `ArizonaRobbins`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit5'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `DerekSheph`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit6'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `MarkSloan`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit7'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `DahliaQadri`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit8'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `PrestonBurke`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit9'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `LeviSchmitt`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


}
?>