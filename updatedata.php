<?php
include 'dblink.php';

$sql = "UPDATE MyGuests SET lastname='Ismail' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>