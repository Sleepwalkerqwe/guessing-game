<html>

<body>
    <title>a0673f5f</title>
    <h1> Welcome to my guessing game</h1>

    <?php
    $correctnumber = 72; //change this number //
    if (isset($_GET['guess'])) {
        if (strlen($_GET['guess']) < 1) {
            echo "Your guess is too short";
        } else if (is_numeric($_GET['guess']) === FALSE) {
            echo "Your guess is not a number";
        } else if ($_GET['guess'] < $correctnumber) {
            echo "Your guess is too low";
        } else if ($_GET['guess'] > $correctnumber) {
            echo "Your guess is too high";
        } else if ($_GET['guess'] == $correctnumber) {
            echo "Congratulations - You are right";
        }
    } else {
        echo "Missing guess parameter";
    }
    ?>
</body>

</html>