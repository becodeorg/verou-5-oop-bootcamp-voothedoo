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
      $totalTax += $product['price'] * $product['quantity'] * 0.06;
    } else {
      $totalTax += $product['price'] * $product['quantity'] * 0.21;
    };
  }

  echo 'Total Price: &euro;' . $total . '<br>';
  echo 'Tax paid: &euro;' . $totalTax . '' .'<br>';
  echo '<br>';
  echo '<br>';



/////////////////////////////////////
  echo 'Same but with classes now: <br>';

  class Product
  {
    public $name;
    public $quantity;
    public $price;
    public $type;

    public function __construct (string $name, int $quantity, float $price, string $type){
      $this->name = $name;
      $this->quantity = $quantity;
      $this->price = $price;
      $this->type = $type;
    }

    public function calculateTotalPrice() {
      return $this->price * $this->quantity;
    }

    public function calculateTax(float $tax) {
      return $this->price * $this->quantity * $tax;
    }
  }
  


  $banana = new Product('banana', 6, 1, 'fruit');
  $apple = new Product('apple', 3, 1.5, 'fruit');
  $wine = new Product('wine', 2, 10, 'wine');

  echo 'Total Price: &euro;'. $banana->calculateTotalPrice() + $apple->calculateTotalPrice() + $wine->calculateTotalPrice();
  echo '<br>';
  echo 'Tax paid: &euro;' . $banana->calculateTax(0.06) + $apple->calculateTax(0.06) + $wine->calculateTax(0.21);
