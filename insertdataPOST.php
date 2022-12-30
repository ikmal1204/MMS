<?php
include 'dblink.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

echo "Welcome" . $firstname ."<br>";
echo $lastname. "<br>";
echo "Your email address is:". $email. "<br>"; 


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>