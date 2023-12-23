<?php
include_once 'db.php';
$sql = "DELETE FROM students WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: dashboard.php");
   alert("Successfully Deleted");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>