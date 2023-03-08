<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sectie</title>

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

     <!-- Adaugare sectie -->
     <br>
    <form action="/ProiectBD/adaugare/adaugare_sectie.php">
        <fieldset>
        <legend>Introduceti o sectie noua</legend>
        <p>
            <label for = "numesectie">Nume Sectie</label><br>
            <input type="text" id = "as"  name="nume_nou" placeholder="ex: Cardiologie" required><br>
        </p>
        <p>
            <label for = "doctorid">DoctorID</label><br>
            <input type="text" id = "as"  name="doctor_nou" placeholder="ex: 18" required><br>
        </p>
        <p>
            <label for = "numarpersonal">Numar de Personal</label><br>
            <input type="text" id = "as" name="numar_nou" placeholder="ex: 22" required><br> 
        </p>
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare pacienti -->
    
</body>
</html>