<?php

require_once __DIR__ . '/models/Product.php';

require_once __DIR__ . '/models/user.php';

$products = [
  new Product('cesar','cibo', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0),
  new Product('kitekat','lettiera', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0),
  new Product('kitekat','cibo', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0),
  new Product('naturalpet','osso giocattolo', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0),
  new Product('scotty','cibo', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0),
  new Product('tigerino','cuccia', 'https://picsum.photos/id/' . rand(100, 150) . '/400/200', 199, 0)
];

$miguel = new User('miguel',2002);

?>