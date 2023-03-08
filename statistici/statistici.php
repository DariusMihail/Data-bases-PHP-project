<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interogari Simple</title>

     <!-- Adaugare CSS-->
     <!-- <link rel="stylesheet" href="\ProiectBD\style.css"> -->

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <style>

    h1 {
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 300%;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 1px;
    }

    body {
        background-color: #ADD8E6;
        text-align: center;
    }

   /*  #exemple:link, a:visited {
        background-color: white;
        color: black;
        border: 2px solid green;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    } */

    /* #exemple:hover, a:active {
        background-color: green;
        color: white;
    } */

    #exemple {
        display: block;
        margin: 7px;
        text-align: center;
    }

    button {
            border-radius: 5px;
            border-width: 5px;
            border-color: #808080;
            padding: 10px;
            margin-left: 15px;
            margin-right: 15px;
    }

    fieldset {
            margin-top: 5%;
            margin-left: 5%;
            margin-right: 80px;
            border-radius: 5px;
            border-width: 5px;
            border-color: #808080;
            padding: 10px;
            background-color: 33FF4F;
            width: 400px;
            display: block;
            float: right;
        }

        #poza1 {
            position: absolute;
            margin-top: 40%;
            margin-left: -70%;
            width: 500px;
            height: 300px;
        }

        #poza2 {
            display: block;
            float: left;
            width: 600px;
            height: 400px;
            margin-right: 20px;
            margin-left: 40px;
            margin-top: 5%;
        }

    </style>


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

    <center>
    <h1>Statistici</h1>
    </center>

    <!-- Adaugare imagine/imagini -->
 
    <img src="poza_statistica2.jpg" alt="poza_statistica2" id="poza2">
    <img src="poza_statistica.jpg" alt="poza_statistica" id="poza1">
  


    <!-- Exemple -->
    <fieldset>
    <a href = "exemplul1.php" id="exemple">
        <button type="button" class="exemple">Afisati toti pacientii care au fost consultati minimum o data</button>
    </a>
    <br>
    <a href = "exemplul2.php" id="exemple">
        <button type="button" class="exemple">Afisati toti doctorii care au oferit minimum 2 consulatii</button>
    </a>
    <br>
    <a href = "exemplul3.php" id="exemple">
        <button type="button" class="exemple">Afisati sectia/Sectiile care are/au minimum 25 de angajati, iar numele doctorului
                  este 'Vladislav' sau 'Radu'</button>
    </a>
    <br>
    <a href = "exemplul4.php" id="exemple">
        <button type="button" class="exemple">Afisati toate consultatiile din anul 2022 si care au ca examinare 'Pacientul prezinta dureri in zona toracelui'</button>
    </a>
    <br>
    <a href = "exemplul5.php" id="exemple">
        <button type="button" class="exemple">Afisati toti pacientii cu numele 'Vasile' sau 'Tunaru' care au avut minimum 2 
                    consultatii</button>
    </a>
    <br>
    <a href = "exemplul6.php" id="exemple">
        <button type="button" class="exemple">Afisati cate diagnostice de tipul 'Carenta in zinc' sau
                'Boli şi tulburări ale ochiului' care au fost prescrise cel putin la 1 pacient</button>
    </a>
    <a href = "exemplul7.php" id="exemple">
        <button type="button" class="exemple">Afisati primele 3 sectii cu cel mai mare numar de personal</button>
    </a>
    <a href = "exemplul8.php" id="exemple">
        <button type="button" class="exemple">Afisati anul in care s-au nascut cei multi medici</button>
    </a>
    <a href = "exemplul9.php" id="exemple">
        <button type="button" class="exemple">Afisati anul cu cele mai multe consultatii</button>
    </a>
    <a href = "exemplul10.php" id="exemple">
        <button type="button" class="exemple">Afisati doctorul cu cele mai multe consultatii</button>
    </a>
    </fieldset>
    <!-- Sfarsit exemple -->

</body>
</html>