<?php
include_once 'db_connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE Consultatii set ConsultatieID='" . $_POST['consultatieid'] . "',
  Data ='" . $_POST['data'] . "',
  Examinare='" . $_POST['examinare'] . "', 
  PacientID='" . $_POST['pacientid'] . "' , 
  DoctorID='" . $_POST['doctorid'] . "'
  

  WHERE ConsultatieID='" . $_POST['consultatieid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Consultatii WHERE ConsultatieID='" . $_GET['ConsultatieID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Pacient</title>

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
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<fieldset>
<a href="\ProiectBD\tabele\consultatii.php">Inapoi</a>
</div>
PacientID: <br>
<input type="hidden" name="consultatieid" class="txtField" value="<?php echo $row['ConsultatieID']; ?>">
<input type="text" name="consultatieid"  value="<?php echo $row['ConsultatieID']; ?>">
<br>
Nume: <br>
<input type="text" name="data" class="txtField" value="<?php echo $row['Data']; ?>">
<br>
Prenume:<br>
<input type="text" name="examinare" class="txtField" value="<?php echo $row['Examinare']; ?>">
<br>
Strada:<br>
<input type="text" name="pacientid" class="txtField" value="<?php echo $row['PacientID']; ?>">
<br>
Numar:<br>
<input type="text" name="doctorid" class="txtField" value="<?php echo $row['DoctorID']; ?>">
<br>


<input type="submit" name="submit" value="Submit" class="buttom">
</fieldset>

</form>
</body>
</html>