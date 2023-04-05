<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<html>
    <head>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>complete responsive hospital website create by win coder</title>
        
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        
            <link rel="stylesheet" href="hospital/css/style.css">
        
        </head>
        <body>
            
        <!-- header section starts  -->
        
        <header class="header">
        
            <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Digi</strong>Doc</a>
        
            <nav class="navbar">
                <a href="index.html">home</a>
                <a href="about.html">about</a>
                <a href="services.html">services</a>
                <a href="doctors.html">doctors</a>
                <a href="appointment.html">appointment</a>
                <a href="review.html">review</a>
                <a href="blogs.html">blogs</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        
        </header>


<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="" method="post">
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>
</body>
</html>