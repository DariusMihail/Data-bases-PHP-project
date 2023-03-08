<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacient-Doctor</title>

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

    <!-- Buton adaugare pacient_diagnostic -->
    <button type="button" id="introducere"><a href="/ProiectBD/introduceri/introducere_pacient_doctor.php">
                Introducere Pacient-Doctor</a></button>

    <br><br><br>

    <!-- (A) SEARCH FORM -->
    <fieldset style="float:left; margin-top: 10px; margin-bottom: 10px; margin-left: 39%;">
        <form method="post" action="pacient_doctor-form.php">
        <input type="text" name="search" placeholder="Cautare dupa PacientID..." required>
        <input type="submit" value="Search">
        </form>
    </fieldset>


    <!-- Afisare pacient-doctor -->
    <?php
     include 'db_connect.php';
     include 'D:\XAMPP\htdocs\ProiectBD\afisare\afisare_pacient_doctor.php';
    ?>
    <!-- Sfarsit afisare pacient-doctor -->



    
</body>
</html>