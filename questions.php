<?php session_start(); ?>
<?php include 'inc/_header.php'; ?>
<?php include 'inc/question_queries.php'; ?>
<?php include 'inc/count_queries.php'; ?>
        <div class="container">
            <div class="current">Question <?php echo $question_num; ?> of <?php echo $question_count; ?></div>
            <p class="question">
                <?php echo $question['question_text']; ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()):; ?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id'] ?>">
                        <?php echo $row['choice_text']; ?>
                        </li>
                    <?php endwhile;?>
                </ul>
                <input type="submit" name="submit" value="Submit" />
                <input type="hidden" name="number" value="<?php echo $question_num; ?>">
            </form>
        </div>
<?php include 'inc/_footer.php'; ?>