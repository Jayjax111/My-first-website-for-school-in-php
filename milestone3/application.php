<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <title>Application</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <style>
        .box{
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
            background: #0080ff;
        }
    </style>  

</head>
<body>
  <h1 style="background-color:rgb(230, 222, 176);"><p style="font-family: Arial">Kennesaw Student Information Center</p></h1>
  <br>


<?php include 'includes/header.php'; ?>



    <br>
    <br>


</div>
<div class="spacer">
    &nbsp;
</div>

<h1>This is the application page.</h1>



<div class="container">
<br>

<form action="process.php" id="EmploymentApplication100" method="post">

    <table border="0" cellpadding="5" cellspacing="0">
    <tr> <td style="width: 50%">
    <label for="First_Name"><b>First name *</b></label><br />
    <input name="First_Name" type="text" maxlength="50" style="max-width: 260px" />
    </td> <td style="width: 50%">
    <label for="Last_Name"><b>Last name *</b></label><br />
    <input name="Last_Name" type="text" maxlength="50" style="max-width: 260px" />
    </td> </tr> <tr> <td colspan="2">
    <label for="Email_Address"><b>Email *</b></label><br />
    <input name="Email_Address" type="text" maxlength="100" style="max-width: 535px" />
    </td> </tr> <tr> <td colspan="2">
    <label for="Portfolio"><b>Portfolio website</b></label><br />
    <input name="Portfolio" type="text" maxlength="255" value="http://" style="max-width: 535px" />
    </td> </tr> <tr> <td colspan="2">
    <label for="Position"><b>Position you are applying for *</b></label><br />
    <select name="Position" id="Position">
        <option value="">--Select an Option--</option>
        <option value="Head of Radiology">Head of Radiology</option>
        <option value="Assistant Radiologist">Assistant Radiologist</option>
        <option value="Neurosurgeon">Neurosurgeon</option>
        <option value="Lab Technician">Lab Technician</option>
        <option value="Head of Information Technology">Head of Information Technology</option>
    </select>
    <!-- <input name="Position" type="text" maxlength="100" style="max-width: 535px" /> -->
    </td> </tr> <tr> <td>
    <label for="Salary"><b>Salary requirements</b></label><br /> <input name="Salary" type="text" maxlength="50" style="max-width: 260px" /> </td> <td>
    <label for="StartDate"><b>When can you start?</b></label><br />
    <input name="StartDate" type="text" maxlength="50" style="max-width: 260px" />
    </td> </tr> <tr> <td>
    <label for="Phone"><b>Phone *</b></label><br />
    <input name="Phone" type="text" maxlength="50" style="max-width: 260px" />
    </td> <td>
    <label for="Fax"><b>Fax</b></label><br />
    <input name="Fax" type="text" maxlength="50" style="max-width: 260px" />
    </td> </tr> <tr> <td colspan="2">
    <label for="Relocate"><b>Are you willing to relocate?</b></label><br />
    <input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes      
    <input name="Relocate" type="radio" value="No" /> No      
    <input name="Relocate" type="radio" value="NotSure" /> Not sure
    </td> </tr> <tr> <td colspan="2">
    <label for="Organization"><b>Last company you worked for</b></label><br />
    <input name="Organization" type="text" maxlength="100" style="max-width: 535px" />
    </td> </tr> <tr> <td colspan="2">
    <label for="Reference"><b>Reference / Comments / Questions</b></label><br />
    <textarea id="Reference" name="Reference" rows="7" cols="40" style="max-width: 535px"></textarea>
    </td> </tr> <tr> <td colspan="2" style="text-align: center;">
    <div style="float: right"> <a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
    <!--<script src="https://www.100forms.com/js/FORMKEY:FN3R2UH7ABHD/SEND:my@email.com" type="text/javascript"></script>-->
    <input name="skip_submit" type="submit" value="Send Application" />
    </td> </tr>
    </table>
</form> 



</div>
<br>
<br>

<?php include 'includes/footer.php'; ?>
</body>

</html>