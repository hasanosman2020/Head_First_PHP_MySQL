<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <head>
        <title> Alien Abduction Me - Report an Abduction</title>
    </head>

<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];

    $dbc = mysqli_connect('localhost', 'root', 'root', 'learning_material')
    or die('Error connecting to database');

    $query = "INSERT INTO aliens_abduction(first_name, last_name,when_it_happened, how_long, how_many, alien_description, 'what_they_did', fang_spotted, other_email)"."VALUES('$firstname', '$lastname', '$when_it_happened', '$how_long', '$how_many', '$alien_description', '$fang_spotted', '$what_they_did', '$fang_spotted', '$email', '$other')"; 

    $result = mysqli_query($dbc, $query)
    or die('Error querying databse');

    mysqli_close($dbc);

    /*
    $to = 'hasan79.hoa@gmail.com';
    $subject = 'Aliens Abducted Me- Abduction Report';
    $msg = "$firstname was abducted $when_it_happened and was gone for $how_long.\n" . "Number of aliens: $how_many\n'" .
        "Alien description: $alien_description.\n" .
        "Fang spotted: $fang_spotted\n" .
        "Other comments: $other";
    mail($to, $subject, $msg, 'From:' . $email);
*/
    echo 'Thanks for submitting the form. <br />';
    echo 'You were abducted.' . $when_it_happened;
    echo ' and were gone for ' . $how_long . '<br />';
    echo 'Number of aliens: ' . $how_many . '<br />';
    echo 'Describe them: ' . $alien_description . '<br />';
    echo 'The aliens did this: ' . $what_they_did . '<br />';
    echo  'Was fang spotted? ' . $fang_spotted . '<br />';
    echo 'Other comments: ' . $other . '<br />';
    echo 'Your email address is ' . $email;
    ?>
</body>

</html>