<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        .aligning
        {
            margin-left: 500px;
            margin-top: 300px;
        }
    </style>
</head>
<?php

if (isset($_POST['fname']))
{
    $fname = $_POST['fname'];

}
if (isset($_POST['lname']))
{
    $lname = $_POST['lname'];

}
if (isset($_POST['mail']))
{
    $email = $_POST['mail'];

}
if (isset($_POST['pass']))
{
    $passw = $_POST['pass'];

}


?>
<body>
    <table border="2" class="aligning">
        <tr>
            <td>
                <?php 
                    echo "Firstname:";
                ?>
            </td>
            <td>
             <?php echo $fname ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    
                    echo "Lastname: " . "<br>";
                ?>
            </td>
           <td>
                <?php echo $lname ?>
           </td>
        </tr>
        <tr>
            <td>
                <?php 
                    
                    echo "email id: ". "<br>";
                ?>
            </td>
            <td>
            <?php echo $email ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    
                    echo "Password: " . "<br>";
                ?>
            </td>
            <td>
              <?php echo $passw ?>
            </td>
        </tr>
        <tr>
            <td colspan=2>
                USER CREATED
            </td>
        </tr>
    </table>
</body>
</html>
