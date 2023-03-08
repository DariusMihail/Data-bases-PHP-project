<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic</title>

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

    <!-- Adaugare pacienti -->
    <br>
    <form action="/ProiectBD/adaugare/adaugare_diagnostic.php">
        <fieldset>
        <legend>Introduceti un diagnostic nou</legend>
        <p>
            <label for = "nume">Nume diagnostic</label><br>
            <input type="text" id = "ad"  name="nume_nou" placeholder="ex: Carenta in zinc" required><br>
        </p>
        <p>
            <label for = "descriere">Descriere</label><br>
            <input type="text" id = "ap"  name="descriere_nou" id="submit" placeholder="ex: Lipsa de zinc" required><br>
        </p>
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare pacienti -->


    
</body>
</html>