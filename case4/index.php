<?php
  require './logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case 4</title>
</head>
<body>
  <p>Group One average: <strong><?= $groupOne->calculateAverage(); ?></strong></p>
  <p>Group Two average: <strong><?= $groupTwo->calculateAverage(); ?></strong></p>
</body>
</html>