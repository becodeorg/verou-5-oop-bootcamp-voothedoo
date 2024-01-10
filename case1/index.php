<?php 
  require './class_yes.php';
  require './class_no.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case 1</title>
</head>
<body>
  <div class="wrapper">
    <p> 
      <strong>Total Price: </strong> &euro; <?= $banana->calculateTotalPrice() + $apple->calculateTotalPrice() + $wine->calculateTotalPrice(); ?>
    </p>
    <p>
      <strong>Tax paid: </strong> &euro; <?=  $banana->calculateTax(0.06) + $apple->calculateTax(0.06) + $wine->calculateTax(0.21); ?>
    </p>
  </div>
</body>
</html>

