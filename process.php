<?php session_start(); ?>
<?php include 'inc/conn.php'; ?>
<?php include 'inc/count_queries.php'; ?>

<?php
    // check to see if score is set
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number + 1;

        // Get correct choice for this question from database
        $query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        $row = $result->fetch_assoc();

        $correct_choice = $row['id'];

        if ($correct_choice == $selected_choice) {
            $_SESSION['score'] += 1;
        }

        // check if last question
        if ($number == $question_count) {
            header("Location: final.php");
            exit();
        } else {
            header("Location: questions.php?n=".$next);
        }
    }

 
  