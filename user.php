<?php
require_once ('./creditCard.php');

  class User {
    use CreditCard;

    private $name;
    private $lastname;
    private $date_of_birthday;
    private $email;

    private $products = [];
    // private $creditcards = [];

    public function __construct($name, $lastname, $date_of_birthday, $email, $c_number, $c_name, $c_lastname, $expiration_date) {
      $this->name = $name;
      $this->lastname = $lastname;
      $this->date_of_birthday = $date_of_birthday;
      $this->email = $email;
      $this->setNumber($c_number);
      $this->setCName($c_name);
      $this->setCLastname($c_lastname);
      $this->setExpirationDate($expiration_date);
    }

    public function setName($name) {
      $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
    public function setLastname($lastname) {
      $this->lastname = $lastname;
    }
    public function getLastname() {
      return $this->lastname;
    }
    public function setBirthday($date_of_birthday) {
      $this->date_of_birthday = $date_of_birthday;
    }
    public function getBirthday() {
      return $this->date_of_birthday;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail() {
      return $this->email;
    }

    public function insertProduct($product) {
      $this->products[] = $product;
    }
    public function getProducts() {
      return $this->products;
    }
    // public function insertCreditCard($creditcard) {
    //   $this->creditcards[] = $creditcard;
    // }
    // public function getCreditCard() {
    //   return $this->creditcards;
    // }
  }

 ?>
