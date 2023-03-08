<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

     <link rel="stylesheet" href="style.css" type="text/css">

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script> 

    <!-- Adaugare JS file -->
    <script src="carousel.js"></script>

    <style>
        <?php include '\ProiectBD\style.css'; ?>
    </style>


</head>

<body>
   

     <!--Navigation bar-->

     <div id="nav-placeholder"> </div>

     <script>
          $(function(){
               $("#nav-placeholder").load("nav2.html");
               });
     </script>
     <!--end of Navigation bar -->

     <!-- Ceva php -->

     <?php 

     session_start();

     if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

     
     ?>

     <!-- Terminare cod de la ceva php de mai sus -->
    
     <?php 

     }else{

     header("Location: index.php");

     exit();

     }

 ?>


     <!-- Adaugare imagine de fundal -->
     <div id="backgroundimage"></div>

     <!-- Audagare imagine -->
     <img src="home3.jpg" alt="hospitalbck">

     <p id="bunvenit">Bun venit pe <br> pagina principala a <br> spitalului nostru!</p>


</body>



</html>

