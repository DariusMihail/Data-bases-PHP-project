<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctori</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="/ProiectBD/style.css">

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
    
     <!-- Adaugare doctor -->
     <br>
    <form action="/ProiectBD/adaugare/adaugare_doctor.php">
        <fieldset>
        <legend>Introduceti un doctor nou</legend>
        <p>
            <label for = "nume">Nume</label><br>
            <input type="text" id = "adc" name="nume_nou" placeholder="ex: Ionescu" required><br>
        </p>
        <p>
            <label for = "prenume">Prenume</label><br>
            <input type="text" id = "adc"  name="prenume_nou" placeholder="ex: Ion" required><br>
        </p>
        <p>
            <label for = "strada">Strada</label><br>
            <input type="text" id = "adc"  name="strada_nou" placeholder="ex: Epocii" required><br>
        </p>
        <p>
            <label for = "numar">Numar</label><br>
            <input type="text" id = "adc" name="numar_nou" placeholder="ex: 44" required><br> 
        </p>
        <p>
            <label for = "oras">Oras</label><br>
            <input type="text"  id = "adc" name="oras_nou" placeholder="ex: Timis" required><br>
        </p>
        <p>
            <label for = "judet">Judet</label><br>
            <input type="text" id = "adc" name="judet_nou" placeholder="ex: Bacau" required><br>
        </p>
        <p>
            <label for = "telefon">Telefon</label><br>
            <input type="text" id = "adc" name="telefon_nou" placeholder="ex: 0788966546" required><br>
        </p>
        <p>
            <label for = "cnp">CNP</label><br>
            <input type="text" id = "adc" name="CNP_nou" placeholder="ex: 5090617876547" required><br>
        </p>
        <p>
            <label for = "datan">Data nasterii</label><br>
            <input type="text" id = "adc" name="datan_nou" placeholder="ex: 1979-08-28"><br>
        </p>

             
        <input type="submit" value="Submit"  id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare doctor -->

    
</body>
</html>