<!--home.php-->

<?php include 'header.inc.php'; ?>
<?php include 'form.inc.php'; ?>


<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Connect to database
$db = mysqli_connect('localhost','root','root','maptiv')
 or die('Error connecting to MySQL server.');

if (isset($_POST['submit'])){

    $email = $_POST['email'];

    // validation
    if($email == ''){

        echo '<p id="error">Error: Must enter an email address</p>';
    }

    // add to db
    else{

        // Convert data to real escape strings
        // (allows special characters like ' or ")
        $email = mysqli_real_escape_string($db, $email);


        mysqli_query($db, "INSERT INTO betaTesters(email) values('$email')") or die ("error inserting..");
    }

}

    // Close connection
    mysqli_close($db);
?>
