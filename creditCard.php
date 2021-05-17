<?php
  trait CreditCard {

    private $c_number;
    private $c_name;
    private $c_lastname;
    private $expiration_date;

    public function setNumber($c_number) {
      $this->c_number = $c_number;
    }
    public function getNumber() {
      return $this->c_number;
    }
    public function setCName($c_name) {
      $this->c_name = $c_name;
    }
    public function getCName() {
      return $this->c_name;
    }
    public function setCLastname($c_lastname) {
      $this->c_lastname = $c_lastname;
    }
    public function getCLastname() {
      return $this->c_lastname;
    }
    public function setExpirationDate($expiration_date) {
      $this->expiration_date = $expiration_date;
    }
    public function getExpirationDate() {
      return $this->expiration_date;
    }
  }

 ?>
