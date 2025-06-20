<!DOCTYPE html>
<html>
<head>
  <title>Guessing Game 792a0991</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>

  <?php
  $correctnumber = 34; // set to 34 as required

  if (isset($_GET['guess'])) {
    $guess = $_GET['guess'];
    if (!is_numeric($guess)) {
      echo "Your guess is not a number";
    } else if ($guess < $correctnumber) {
      echo "Your guess is too low";
    } else if ($guess > $correctnumber) {
      echo "Your guess is too high";
    } else {
      echo "Congratulations - You are right";
    }
  } else {
    echo "Missing guess parameter <br> Your guess is too short";
  }
  ?>
</body>
</html>
