<?php
  class Product {
    private $product_name;
    private $brand;
    private $price;

    public function __construct($product_name, $brand, $price) {
      $this->product_name = $product_name;
      $this->brand = $brand;
      $this->price = $price;
    }

    public function setProductName($product_name) {
      $this->product_name = $product_name;
    }
    public function getProductName() {
      return $this->product_name;
    }
    public function setBrand($brand) {
      $this->brand = $brand;
    }
    public function getBrand() {
      return $this->brand;
    }
    public function setPrice($price) {
      $this->price = $price;
    }
    public function getPrice() {
      return $this->price;
    }
  }

 ?>
