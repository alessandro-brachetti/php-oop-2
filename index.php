<?php
  require_once './user.php';
  require_once './product.php';
  require_once './prime_user.php';

  $user = new User('pippo', 'rossi', '01/01/2001', 'pippo@gmail.com', '0000 0000 0000 0000', 'pippo', 'rossi','10/2025');

  $product1 = new Product ('toilet paper', 'regina', 24.36);
  $product2 = new Product ('iphone 12 pro max', 'apple', 1199.00);


  // var_dump($user);
  // var_dump($product1);
  // var_dump($product2);

  $user->insertProduct($product1);
  $user->insertProduct($product2);

  var_dump($user);

  // $c = new CreditCard('1111 1111 1111 1111','pluto','verdi','12/2026');
  //
  // var_dump($c);

  // $user->insertCreditCard($c);

  // var_dump($user);

  $prime = new PrimeUser('pluto', 'verdi','pluto@gmail.com');

  var_dump($prime);


 ?>
