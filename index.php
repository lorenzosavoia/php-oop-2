<?php
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Shirt.php';

$user = new User('Chiara', 'Passaro', 'chiara@email.it', '5432300');
$creditCard = new CreditCard('Chiara Passaro', '65439008764333', '04/23', 532);
// try {
//   $user->setPaymentMethod(new CreditCard('Chiara Passaro', '65439008764333', '04/23', 532));
// } catch (TypeError $error) {
//   echo $error->getMessage();
// }

try {
    $user->setPaymentMethod($creditCard);
} catch (TypeError $error) {
    echo $error->getMessage();
}


var_dump($user->getPaymentMethod());