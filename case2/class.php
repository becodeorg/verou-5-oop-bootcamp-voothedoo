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
    public $discount;

    public function __construct (string $name, int $quantity, float $price, string $type, bool $discount = false){
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

    public function addDiscount (float $disc) {
      return $this->price * $disc * $this->quantity;
    }

    public function taxAfterDiscount (float $disc, float $tax) {
      return $this->price * $disc * $this->quantity * $tax;
    }
  }
  
  $banana = new Product('banana', 6, 1, 'fruit');
  $apple = new Product('apple', 3, 1.5, 'fruit');
  $wine = new Product('wine', 2, 10, 'wine');

  $totalPrice = $banana->calculateTotalPrice() + $apple->calculateTotalPrice() + $wine->calculateTotalPrice();

  $totalTax = $banana->calculateTax(0.06) + $apple->calculateTax(0.06) + $wine->calculateTax(0.21);

  $totalDiscountedPrice = $banana->addDiscount(0.5) + $apple->addDiscount(0.5) + $wine->calculateTotalPrice();

  $totalDiscountedTax = $banana->taxAfterDiscount(0.5, 0.06) + $apple->taxAfterDiscount(0.5, 0.06) + $wine->calculateTax(0.21);



