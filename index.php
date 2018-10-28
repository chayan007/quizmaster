<?php include 'inc/_header.php'; ?>
<?php include 'inc/count_queries.php'; ?>
<?php include 'inc/conn.php'; ?>
        <div class="container">
            <h3>Test Your PHP Knowledge</h3>
            <p>This is a quiz to test your knowledge of simple PHP</p>
            <ul>
                <li><strong>Type of questions:</strong> Multiple Choice</li>
                <li><strong>Number of questions:</strong> <?php echo $question_count; ?></li>
                <li><strong>Estimated time to complete quiz:</strong> <?php echo (int)$question_count * .5; ?> minutes</li>
            </ul>
            <a class="start_button" href="questions.php?n=1">Start Quiz</a>
        </div>
<?php include 'inc/_footer.php'; ?>