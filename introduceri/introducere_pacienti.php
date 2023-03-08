<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducere PACIENTI</title>

    <!-- Adaugare CSS-->
    <link rel="stylesheet" href="/ProiectBD/style.css">

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <style> 
        fieldset {
            margin-bottom: 30px;
            margin-right: 300px;

        }

        h1 {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 30px;
            text-align: justify;
            margin-left: 5%;
            text-align: center;
        }
    </style>

</head>

<body>

    <h1>Introducere Pacient</h1>

     <!--Navigation bar-->
     <div id="nav-placeholder"> </div>

     <script>
          $(function(){
               $("#nav-placeholder").load("nav.html");
               });
     </script>
     <!--end of Navigation bar-->

     <br><br>


     <!-- Adaugare pacienti -->
        <br>
    <form action="/ProiectBD/adaugare/adaugare_pacient.php">
        <fieldset>
        <legend>Introduceti un pacient</legend>
        <!-- <b><label for="fname" style="text-align:justify"></label><br></b> -->
        <p>
            <label for = "nume">Nume</label><br>
            <input type="text" id = "ap" name="nume_nou" placeholder="ex: Ionescu" required><br>
        </p>
        <p>
            <label for = "prenume">Prenume</label><br>
            <input type="text" id = "ap"  name="prenume_nou" placeholder="ex: Maria" required><br>
        </p>
        <p>
            <label for = "strada">Strada</label><br>
            <input type="text" id = "ap"  name="strada_nou" placeholder="ex: Epocii" required><br>
        </p>
        <p>
            <label for = "numar">Numar</label><br>
            <input type="text" id = "ap" name="numar_nou" placeholder="ex: 74" required><br> 
        </p>
        <p>
            <label for = "oras">Oras</label><br>
            <input type="text"  id = "ap" name="oras_nou" placeholder="ex: Timis" required><br>
        </p>
        <p>
            <label for = "judet">Judet</label><br>
            <input type="text" id = "ap" name="judet_nou" placeholder="ex: Harghita" required><br>
        </p>
        <p>
            <label for = "telefon">Telefon</label><br>
            <input type="text" id = "ap" name="telefon_nou" placeholder="ex: 0765789876" required><br>
        </p>
        <p>
            <label for = "cnp">CNP</label><br>
            <input type="text" id = "ap" name="CNP_nou" placeholder="ex: 5050818987652" required><br>
        </p>
        <p>
            <label for = "datan">Data nasterii</label><br>
            <input type="text" id = "ap" name="datan_nou" placeholder="ex: 2001-05-19" required><br>
        </p>
        <p>
            <label for = "sex">Sex</label><br>
            <input type="text" id = "ap" name="sex_nou" placeholder="ex: M/F" required><br>
        </p>
        <p>
            <label for = "codasig">Cod asigurare</label><br>
            <input type="text" id = "ap" name="codasig_nou" placeholder="ex: Cod de 20 de cifre" required><br>
        </p>

             
        <input type="submit" value="Submit"  id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare pacienti -->


</body>

</html>