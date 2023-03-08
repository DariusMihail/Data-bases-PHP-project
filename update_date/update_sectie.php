<?php
include_once 'db_connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE Sectie set SectieID='" . $_POST['sectieid'] . "',
  NumeSectie ='" . $_POST['numesectie'] . "',
  NumarPersonal='" . $_POST['numarpersonal'] . "', 
  DoctorID='" . $_POST['doctorid'] . "' 
  

  WHERE SectieID='" . $_POST['sectieid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Sectie WHERE SectieID='" . $_GET['SectieID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Sectie</title>

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
<a href="\ProiectBD\tabele\sectie.php">Inapoi</a>
</div>
<fieldset>
SectieID: <br>
<input type="hidden" name="sectieid" class="txtField" value="<?php echo $row['SectieID']; ?>">
<input type="text" name="sectieid"  value="<?php echo $row['SectieID']; ?>">
<br>
NumeSectie: <br>
<input type="text" name="numesectie" class="txtField" value="<?php echo $row['NumeSectie']; ?>">
<br>
Numar de Persoanl:<br>
<input type="text" name="numarpersonal" class="txtField" value="<?php echo $row['NumarPersonal']; ?>">
<br>
DoctorID:<br>
<input type="text" name="doctorid" class="txtField" value="<?php echo $row['DoctorID']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">
</fieldset>

</form>
</body>
</html>