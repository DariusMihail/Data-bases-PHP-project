<?php
include_once 'db_connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE DiagnosticConsultatie set DiagnosticID='" . $_POST['diagnosticid'] . "',
  PrescriptieMedicala ='" . $_POST['prescriptiemedicala'] . "',
  DiagnosticID='" . $_POST['diagnosticid'] . "', 
  ConsultatieID='" . $_POST['consultatieid'] . "' 


  WHERE DiagnosticID='" . $_POST['diagnosticid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM DiagnosticConsultatie WHERE DiagnosticID='" . $_GET['DiagnosticID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Diagnostic-Consultatie</title>

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
<a href="/ProiectBD/pacient_consultatie.php">Lista Pacient Consultatie</a>
</div>
<fieldset>
Prescriptie medicala: <br>
<input type="hidden" name="prescriptiemedicala" class="txtField" value="<?php echo $row['PrescriptieMedicala']; ?>">
<input type="text" name="prescriptiemedicala"  value="<?php echo $row['PrescriptieMedicala']; ?>">
<br>
DiagnosticID: <br>
<input type="text" name="diagnosticid" class="txtField" value="<?php echo $row['DiagnosticID']; ?>">
<br>
ConsultatieID:<br>
<input type="text" name="consultatieid" class="txtField" value="<?php echo $row['ConsultatieID']; ?>">
<br>


<input type="submit" name="submit" value="Submit" class="buttom">
</fieldset>

</form>
</body>
</html>