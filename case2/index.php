<?php

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
      if($this->type == 'fruit') {
        return $this->price * 0.5 * $this->quantity;
      } else {
        return $this->price * $this->quantity;
      }
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