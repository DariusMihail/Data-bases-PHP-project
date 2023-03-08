<?php
include_once 'db_connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE PacientDiagnostic set PacientID='" . $_POST['pacientid'] . "',
  NumarDiagnostice ='" . $_POST['numardiagnostice'] . "',
  PacientID='" . $_POST['pacientid'] . "', 
  DiagnosticID='" . $_POST['diagnosticid'] . "' 

  WHERE PacientID='" . $_POST['pacientid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM PacientDiagnostic WHERE PacientID='" . $_GET['PacientID'] . "'");
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
<a href="/ProiectBD/pacient_diagnostic.php">Lista diagnostice</a>
</div>
PacientID: <br>
<input type="hidden" name="numardiagnostice" class="txtField" value="<?php echo $row['NumarDiagnostice']; ?>">
<input type="text" name="numardiagnostice"  value="<?php echo $row['NumarDiagnostice']; ?>">
<br>
Nume: <br>
<input type="text" name="pacientid" class="txtField" value="<?php echo $row['PacientID']; ?>">
<br>
Prenume:<br>
<input type="text" name="diagnosticid" class="txtField" value="<?php echo $row['DiagnosticID']; ?>">
<br>


<input type="submit" name="submit" value="Submit" class="buttom">
</fieldset>

</form>
</body>
</html>