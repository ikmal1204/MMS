<?php
include 'dblink.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Ikmal', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>