<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultatii</title>

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

     <!-- Adaugare consultatie -->
     <br>
    <form action="/ProiectBD/adaugare/adaugare_consultatie.php" >
        <fieldset>
        <legend>Introduceti o consultatie noua</legend>
        <p>
            <label for = "pacientid">PacientID</label><br>
            <input type="text" id = "ac"  name="pacient_nou" placeholder="ex: 6" required><br>
        </p>
        <p>
            <label for = "doctorid">DoctorID</label><br>
            <input type="text" id = "ac"  name="doctor_nou" placeholder="ex: 2" required><br>
        </p>
        <p>
            <label for = "data">Data</label><br>
            <input type="text" id = "ac" name="data_nou" placeholder="ex: 2001-05-19" required><br> 
        </p>
        <p>
            <label for = "examinare">Examinare</label><br>
            <input type="text"  id = "ac" name="examinare_nou" placeholder="ex: Pacientul prezenta dureri in zona falangelor" required><br>
        </p>
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare consultatie -->



    
</body>
</html>