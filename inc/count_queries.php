<?php
include 'conn.php';

// GET TOTAL NUMBER OF QUESTIONS IN DATABASE
$query = "SELECT * FROM `question`";

$results = mysqli_query($conn,$query);
$question_count = $results->num_rows;
?>