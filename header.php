
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    
    <link rel="stylesheet" href="css/style.css">

    <title>AirBook</title>
    
</head>
<body>
    <header>
        <div class="top-bar">
  




        </div>
        <nav>
            <div class="logo">
                <img src="img/logo.png" class="logo-img" alt=""> <br>AirBook </div>

            
                <ul><center>

                    <li><a href="index.php">Home</a></li>
                    <?php
                      session_start();
     
if (isset($_SESSION["user"])) {
?>
                    <li><a href="bookticket.php">Book ticket</a></li>
                    <li><a href="view.php">Your Booking</a></li>

<?php
}
else{
    
    ?>
                    <li><a href="search.php">search your ticket</a></li>

    <li><a href="registration.php">Register</a></li>

<?php
}



?>
                    
                    <li><a href="about.php">About</a></li>
                    <?php
      
if (isset($_SESSION["user"])) {
?>
<li style="color:white;font-weight:700;">

<a href="logout.php">&nbsp;
Logout</a>

</li>
<?php

} else {
?>
<?php
} ?>

           
              </center>  </ul>

            
                


        </nav>

    </header>