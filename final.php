<?php session_start(); ?>
<?php include 'inc/_header.php'; ?>
    <div class="container">
        <h3>You're Done!</h3>
        <p>Congrats you have complete the quiz</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?> correct answers</p>
        <a class="start_button" name="retake" href="questions.php?n=1">retake the quiz</a>
    </div>
<?php include 'inc/_footer.php'; ?>
<?php $_SESSION['score'] = 0; ?>