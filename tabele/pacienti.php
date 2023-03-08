<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACIENTI</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="\ProiectBD\style.css">

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>

     <!--Navigation bar-->
     <div id="nav-placeholder"> </div>

     <script>
          $(function(){
               $("#nav-placeholder").load("nav2.html");
               });
     </script>
     <!--end of Navigation bar-->

     <br><br><br>

     <!-- (A) SEARCH FORM -->
     <fieldset style="float:left; margin-top: 10px; margin-bottom: 10px; margin-left: 39%;">
        <form method="post" action="pacienti-form.php">
        <input type="text" name="search" placeholder="Cautare dupa nume..." required>
        <input type="submit" value="Search">
        </form>
    </fieldset>


    <!-- Buton adaugare pacient -->
    <button type="button" id="introducere"><a href="/ProiectBD/introduceri/introducere_pacienti.php">Introducere pacienti</a></button>


     <!-- Afisare pacienti -->
     <?php
     include 'db_connect.php';
     include 'D:\XAMPP\htdocs\ProiectBD\afisare\afisare_info.php';
     ?>
     <!-- Sfarsit afisare pacienti -->


</body>

</html>