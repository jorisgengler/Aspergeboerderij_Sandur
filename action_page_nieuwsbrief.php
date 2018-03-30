<?php
require 'php_action/databasecon.php'; //connect to database

//buttons
$email = (isset($_POST["email"])) ? $_POST["email"] : "" ;
/* ---------------------- Check if e-mail is already exists in database-------- */
$result = mysqli_query($conn,"SELECT email FROM nieuwsbrief WHERE email='$email'");

while ($row = mysqli_fetch_object($result)){
     header("Location: ../Nieuwsbrief_U_heeft_zich_al_aangemeld.php"); // When e-mail exists
     exit(); //stop script when e-mail exists
}

mysqli_free_result($result); // make memory $result empty

 $sql = "INSERT INTO nieuwsbrief (email) VALUES ('$email')"; //Put data into database

if ($conn->query($sql) === TRUE){ //when data has been put in database
     include 'php_action/mailerzend.php';// If the e-mail isn't in the database, an e-mail will be sent to the user

     // header("Location: ../Nieuwsbrief.php"); // When e-mail exists
     // header('Location: https://www.aspergeboerderijsandur.nl/Nieuwsbrief.php');
     exit(); //stop script when mail is sent
   }
else{
     // echo "Error: " . $sql . "<br>" . $conn->error; //error
     header("Location: ../404.php"); //go to error page
   }

$conn->close();
?>
