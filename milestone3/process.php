<?php
    $GLOBALS["errors"] = "";

    function validate_text($field_name, $string){
        if($string == "" || !isset($string) || !is_string($string)) {
            $GLOBALS["errors"] .= "You have not entered a valid ". $field_name ."!<br><br>";
        }
    }

    function validate_number($field_name, $number){
        if($number == "" ||!isset($number) || !is_numeric($number)) {
            $GLOBALS["errors"] .= "You have not entered a valid ". $field_name ."!<br><br>";
        }
    }

    function validate_email($field_name, $email) {
        if($email == "" || !isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $GLOBALS["errors"] .= "You have not entered a valid ". $field_name ."!<br><br>";
        }
    }

    function validate_url($field_name, $url) {
        if($url == "" || !isset($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
            $GLOBALS["errors"] .= "The url: ". $url ." is not a valid ". $field_name ."!<br><br>";
        }
    }

    if(!isset($_POST['skip_submit'])) {
        $message = "You do not have permission to view this page";
    } else {
        $first_name = $_POST['First_Name'];
        validate_text('First Name', $first_name);

        $last_name = $_POST['Last_Name'];
        validate_text('Last Name', $last_name);

        $email_address = $_POST['Email_Address'];
        validate_email('Email Address', $email_address);
        
        $portfolio = $_POST['Portfolio'];
        validate_url('Portfolio', $portfolio);

        $position = $_POST['Position'];
        validate_text('Position', $position);

        $salary = $_POST['Salary'];
        validate_number('Salary', $salary);

        $startdate = $_POST['StartDate'];
        validate_text('Start Date', $startdate);
        
        $phone = $_POST['Phone'];
        validate_number('Phone Number', $phone);

        $fax = $_POST['Fax'];
        validate_number('Fax', $fax);

        $relocate = $_POST['Relocate'];
        validate_text('Relocation Response', $relocate);

        $organization = $_POST['Organization'];
        validate_text('Organization', $organization);

        $reference = $_POST['Reference'];
        validate_text('Reference', $reference);

        $message = "Data Successfully Entered";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Data...</title>
    <style>
        .success-text {
            color: #116527;
            font-size: 13px;
            font-family: Arial, sans-serif;
            display: block;
            padding: 10px 20px;
            text-align: center;
            background-color: #DBFFE3;
        }

        .errors {
            color: #9A1C1C;
            font-size: 13px;
            font-family: Arial, sans-serif;
            display: block;
            padding: 10px 20px;
            text-align: center;
            background-color: #FFDBDC;
        }

        table {
            margin: 0 auto;
            width: 50%;
        }

        th, td {
            border: 1px solid #eee;
            padding: 10px;
            font-family: Arial, sans-serif;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php if($GLOBALS["errors"] != "") {
        ?> 
        <p class="errors">
            <?php echo $GLOBALS["errors"]; ?>
        </p>
        <?php
    } else {
        ?> <p class="success-text"><?php echo $message; ?></p> <?php
    
     
    if(isset($_POST['skip_submit'])) {
    ?>
    <table>
        <tbody>
            <tr>
                <th>First Name</th>
                <td><?php echo $first_name; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $last_name; ?></td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><?php echo $email_address; ?></td>
            </tr>
            <tr>
                <th>Portfoilio</th>
                <td><?php echo $portfolio; ?></td>
            </tr>
            <tr>
                <th>Position</th>
                <td><?php echo $position; ?></td>
            </tr>
            <tr>
                <th>Salary</th>
                <td><?php echo $salary; ?></td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td><?php echo $startdate; ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Fax</th>
                <td><?php echo $fax; ?></td>
            </tr>
            <tr>
                <th>Relocate?</th>
                <td><?php echo $relocate; ?></td>
            </tr>
            <tr>
                <th>Organization</th>
                <td><?php echo $organization; ?></td>
            </tr>
            <tr>
                <th>Reference</th>
                <td><?php echo $reference; ?></td>
            </tr>

        </tbody>
    </table>
    <?php } 
    }
    ?>
    <p class="text-center"><a href="application.php"><< Return to Application</a></p>
</body>
</html>