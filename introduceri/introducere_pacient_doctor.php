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


         <!-- Adaugare pacient-doctor -->
         <br>
    <form action="/ProiectBD/adaugare/adaugare_pacient_doctor.php">
        <fieldset>
        <legend>Introduceti o interogare noua</legend>
        <p>
            <label for = "nrconsultatii">Numar consultatii</label><br>
            <input type="text" id = "ap"  name="nrconsultatii_nou" placeholder="ex: 2" required><br>
        </p>
        <p>
            <label for = "pacientid">PacientID</label><br>
            <input type="text" id = "ap"  name="pacient_nou" placeholder="ex: 8" required><br>
        </p>
        <p>
            <label for = "doctorid">DoctorID</label><br>
            <input type="text" id = "ap" name="doctor_nou" placeholder="ex: 1" required><br>
        </p>
             
        <input type="submit" value="Submit"  id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare pacient-doctor -->

    
</body>
</html>