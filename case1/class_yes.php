<?php

  declare(strict_types=1);

  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

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


