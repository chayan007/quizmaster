<?php

include 'conn.php';

if(isset($_POST['submit'])) {
    // Get POST variables, assing to regular variables
    $question_number    = $_POST['question_number'];
    $question_text      = $_POST['question_text'];
    $correct_choice     = $_POST['correct_choice'];

    // choices array
    $choices = [];
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];

    // Insert question
    $query = "INSERT INTO `questions` (question_number, question_text) VALUES('$question_number','$question_text')";

    $insert_row = mysqli_query($conn, $query);

    if($insert_row){
        foreach($choices as $choice => $value) {
           if($value != ''){
               if($correct_choice == $choice) {
                   $is_correct = 1;
               } else {
                   $is_correct = 0;
               }
               $query = "INSERT INTO `choices`(question_number, is_correct, choice_text)VALUES('$question_number', '$is_correct', '$value')";

               $insert_row = mysqli_query($conn,$query);

               if($insert_row) {
                   continue;
               } else {
                   die('Error : ('.$mysqli->errno.') ' . $mysqli->error);
               }
           }
        }
        $msg = "Questions has been added";
    }
}
?>