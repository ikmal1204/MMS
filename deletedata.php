<?php
include 'dblink.php';

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=9";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>