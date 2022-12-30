<?php
include 'dblink.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

echo "Welcome " . $firstname ." ";
echo $lastname. "<br>";
echo "Your email address is:". $email. "<br>"; 


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "<br> New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>