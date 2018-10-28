<?php require_once '../inc/conn.php'; ?>
<?php require_once '../inc/add_question_choices.php'; ?>
<?php require_once '../inc/count_queries.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles-min.css">
    <title>Admin Area - PHP Quiz</title>
</head>
<body>
    <header>
        <div class="container">
            <h3>PHP Quiz App Admin</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Add a question</h2>
            <?php 
                if(isset($msg)){
                    echo "<p>".$msg."</p>";
                }
            ?>
            <form action="index.php" method="post">
                <p>
                    <label>Question Number</label>
                    <input type="number" name="question_number" value="<?php echo $question_count + 1 ;?>">
                </p>
                <p>
                    <label>Question Text</label>
                    <input type="text" name="question_text">
                </p>
                <p>
                    <label>Choice #1</label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label>Choice #2</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label>Choice #3</label>
                    <input type="text" name="choice3">
                </p>
                <p>
                    <label>Choice #4</label>
                    <input type="text" name="choice4">
                </p>
                <p>
                    <label>Correct Choice Number</label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit" />
                </p>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; <?php echo date('Y'); ?> CHAYAN DATTA
        </div>   
    </footer>
</body>
</html>