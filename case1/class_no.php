<?php 
  
  $products = [
    ['name'=>'banana', 'quantity'=> 6, 'price'=> 1, 'type'=>'fruit'],
    ['name'=>'apple', 'quantity'=> 3, 'price'=>1.5, 'type'=>'fruit'],
    ['name'=>'wine', 'quantity'=>2, 'price'=>10, 'type'=>'wine'],
  ];

  $total = 0;
  $totalTax = 0;

  foreach($products as $i=>$product) {
    $total += $product['price'] * $product['quantity'];
    if ($product['type'] == 'fruit') {
      $totalTax = $product['price'] * $product['quantity'] * 0.06;
    } else {
      $totalTax = $product['price'] * $product['quantity'] * 0.21;
    };
  }

  echo 'Total Price: &euro;' . $total . '<br>';
  echo 'Tax paid: &euro;' . $totalTax . '' .'<br>';
  echo '<br>';
  echo '<br>';