<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacient-Diagnostic</title>

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

     <!-- Adaugare pacient-diagnostic -->
     <br>
    <form action="/ProiectBD/adaugare/adaugare_pacient_diagnostic.php">
        <fieldset>
        <legend>Introduceti o interogare noua</legend>
        <p>
            <label for = "nrdiagnostice">Numar diagnostice</label><br>
            <input type="text" id = "ap"  name="nrdiagnostice_nou" placeholder="ex: 2" required><br>
        </p>
        <p>
            <label for = "pacient">PacientID</label><br>
            <input type="text" id = "ap"  name="pacient_nou" placeholder="ex: 7" required><br>
        </p>
        <p>
            <label for = "diagnostic">DiagnosticID</label><br>
            <input type="text" id = "apd" name="diagnostic_nou" placeholder="ex: 5" required><br>
        </p>
             
        <input type="submit" value="Submit"  id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare pacient-diagnostic -->

    
</body>
</html>