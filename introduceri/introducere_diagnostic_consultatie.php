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

         <!-- Adaugare diagnostic-consultatie -->
         <br>
    <form action="/ProiectBD/adaugare/adaugare_diagnostic_consultatie.php">
        <fieldset>
        <legend>Introduceti o interogare noua</legend>
        <p>
            <label for = "prescriptiemedicala">Prescriptie medicala</label><br>
            <input type="text" id = "ap"  name="prescriptie_nou" placeholder="ex: Pacientul sufera de lipsa de zinc" required><br>
        </p>
        <p>
            <label for = "diagnosticid">DiagnosticID</label><br>
            <input type="text" id = "ap"  name="diagnostic_nou" placeholder="ex: 3" required><br>
        </p>
        <p>
            <label for = "consultatieid">ConsultatieID</label><br>
            <input type="text" id = "ap" name="consultatie_nou" placeholder="ex: 4" required><br>
        </p>
       
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare diagnostic-consultatie -->

    
</body>
</html>