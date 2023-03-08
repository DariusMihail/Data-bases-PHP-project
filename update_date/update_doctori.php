<?php
include_once 'db_connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE Doctori set DoctorID='" . $_POST['doctorid'] . "',
  Nume ='" . $_POST['nume'] . "',
  Prenume='" . $_POST['prenume'] . "', 
  Strada='" . $_POST['strada'] . "' , 
  Numar='" . $_POST['numar'] . "',
  Oras='" . $_POST['oras'] . "' , 
  Judet='" . $_POST['judet'] . "' , 
  Telefon='" . $_POST['telefon'] . "' , 
  CNP='" . $_POST['cnp'] . "' , 
  DataNasterii='" . $_POST['datanasterii'] . "'
 

  WHERE DoctorID='" . $_POST['doctorid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Doctori WHERE DoctorID='" . $_GET['DoctorID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Doctor</title>

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
            display: block;
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
            display: block;
        }

        fieldset {
          float: left;
          margin-top: 20px;
          margin-left: 20px;
        }

        a {
          font-weight: bold;
          font-size: 20px;
          margin-left: 10px;
          border: 2px solid black;
          border-radius: 5px;
          padding: 3px;
        }
  </style>

</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<fieldset>
<a href="/ProiectBD/doctori.php">Lista atribute doctor</a>
</div>
DoctorID: <br>
<input type="hidden" name="doctorid" class="txtField" value="<?php echo $row['DoctorID']; ?>">
<input type="text" name="doctorid"  value="<?php echo $row['DoctorID']; ?>">
<br>
Nume: <br>
<input type="text" name="nume" class="txtField" value="<?php echo $row['Nume']; ?>">
<br>
Prenume:<br>
<input type="text" name="prenume" class="txtField" value="<?php echo $row['Prenume']; ?>">
<br>
Strada:<br>
<input type="text" name="strada" class="txtField" value="<?php echo $row['Strada']; ?>">
<br>
Numar:<br>
<input type="text" name="numar" class="txtField" value="<?php echo $row['Numar']; ?>">
<br>
Oras:<br>
<input type="text" name="oras" class="txtField" value="<?php echo $row['Oras']; ?>">
<br>
Judet:<br>
<input type="text" name="judet" class="txtField" value="<?php echo $row['Judet']; ?>">
<br>
Telefon:<br>
<input type="text" name="telefon" class="txtField" value="<?php echo $row['Telefon']; ?>">
<br>
CNP:<br>
<input type="text" name="cnp" class="txtField" value="<?php echo $row['CNP']; ?>">
<br>
Data Nasterii:<br>
<input type="text" name="datanasterii" class="txtField" value="<?php echo $row['DataNasterii']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">
</fieldset>

</form>
</body>
</html>