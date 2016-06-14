<?php
include 'connect.php';
$rating = $_REQUEST['rating'];
//$uid = $_SESSION['user_id'];
echo 'You entered '.$rating;

$sql = "UPDATE person 
SET rating=$rating 
WHERE user_id=0";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>