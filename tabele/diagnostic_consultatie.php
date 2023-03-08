<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pacient-Consultatie</title>

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

    <!-- Buton adaugare diagnostic_consultatie -->
    <button type="button" id="introducere"><a href="/ProiectBD/introduceri/introducere_diagnostic_consultatie.php">
                Introducere Diagnostic-Consultatie</a></button>

    <br><br><br>

    <!-- (A) SEARCH FORM -->
    <fieldset style="float:left; margin-top: 10px; margin-bottom: 10px; margin-left: 39%;">
        <form method="post" action="diagnostic_consultatie-form.php">
        <input type="text" name="search" placeholder="Cautare dupa Prescriptie medicala..." required>
        <input type="submit" value="Search">
        </form>
    </fieldset>

    <!-- Afisare diagnostic-consultatie -->
    <?php
     include 'db_connect.php';
     include 'D:\XAMPP\htdocs\ProiectBD\afisare\afisare_diagnostic_consultatie.php';
    ?>
    <!-- Sfarsit afisare diagnostic-consultatie -->



    
</body>
</html>