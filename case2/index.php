<?php 
  require './class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case 2</title>
</head>
<body>
  <div class="wrapper">
    <p> 
      <strong>Total Price: </strong> &euro; <?= $totalPrice; ?>
    </p>
    <p>
      <strong>Tax paid: </strong> &euro; <?= $totalTax;  ?>
    </p>
    <p>
      <strong>Discounted price: </strong> &euro; <?= $totalDiscountedPrice  ?>
    </p>
    <p>
      <strong>Tax after Discount: </strong> &euro; <?= number_format((float)$totalDiscountedTax, 2, '.', '');?>
    </p>
  </div>
</body>
</html>

