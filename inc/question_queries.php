<?php
include 'conn.php';
// QUESTION RELATED QUERIES
$question_num = (int)$_GET['n'];

// Get Question
$query = "SELECT * FROM `question` WHERE question_number = $question_num";

// Get result from query
$result = mysqli_query($conn, $query);

$question = $result->fetch_assoc();

// CHOICES RELATED QUERIES
$query = "SELECT * FROM `choices` WHERE question_number = $question_num";

$choices = $result = mysqli_query($conn, $query);
?>