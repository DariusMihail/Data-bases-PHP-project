<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interogari Simple si Complexe</title>

    <!-- Adaugare Navbar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <style>

        body {
            background-color: #ADD8E6;
        }
        
        label {
            font-family: arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        input {
            padding: .4em;
            border: solid 1px #999;
            border-radius: 10px;
            border-width: medium;
            width: 200px;
            margin: 10px 0 0 0 ;
        }

        #submit {
            background: rgb(35, 174, 202);
            padding: 8px 10px;
            color: #fff;
            border-radius: 5px;
            margin-right: auto;
            margin-left: auto;
            margin-top: 10px;
            margin-bottom: 10px;
        }
       

        fieldset {
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .int_simple {
            border-radius: 5px;
            border-width: 5px;
            border-color: #808080;
            padding: 10px;
            margin-left: 15px;
            margin-right: 15px;
        }

        legend {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            text-align: justify;
            margin-left: 5%;
        }

        /* Fiecare fieldset in parte */
        #int_s {
            border-radius: 5px;
            border-width: 5px;
            border-color: #808080;
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

    <h1> Interogari simple si complexe</h1>
    <br><br>


        <!-- Adaugare interogare simpla 1 -->
        <fieldset class = "int_simple">
        <legend>Interogari simple</legend>

        <form action="/ProiectBD/exemple_int_simple/construire1.php">
        <fieldset style="background-color: #FF0000;" id="int_s">
        <b><label for="fname" style="text-align:justify">Modelul 1:</label><br></b>
        <p>
        Selectati cate diagnostice de tipul 'Carenta in zinc' sau
                'Boli şi tulburări ale ochiului' care au fost prescrise la cel putin
                <input type="text" id = "ac"  name="select1">
            pacienti.
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare interogare simpla 1 -->

    <!-- Adaugare interogare simpla 2-->

    <form action="/ProiectBD/exemple_int_simple/construire2.php">
        <fieldset style="background-color: #FFA500;" id="int_s">
        <b><label for="fname" style="text-align:justify" >Modelul 2:</label><br></b>
        <p>
            Selectati toti doctorii care au oferit minimum  
            <input type="text" id = "ac"  name="select1">
            consulatii
        </p>
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare interogare simpla 2 -->

    <!-- Adaugare interogare simpla 3-->

    <form action="/ProiectBD/exemple_int_simple/construire3.php">
        <fieldset style="background-color: #FFFF00;" id="int_s">
        <b><label for="fname" style="text-align:justify">Modelul 3:</label><br></b>
        <p>
             Selectati primele 
            <input type="text" id = "ac"  name="select1">
            sectii cu cel mai mare numar de personal
        </p>
             
        <input type="submit" value="Submit" id="submit">
        </fieldset>
    </form>

    <!-- Sfarsit adaugare interogare simpla 3 -->

    </fieldset>
    
</body>
</html>