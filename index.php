<?php
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Hygene.php';
require_once __DIR__ . '/classes/Accessory.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegisteredUser.php';

//creazione dio un array di prodotti
$prodotti = [];
$prodotti[] = new Food('Crocchette Purina', 20, 100, 'Gatto');
$prodotti[0]->typeOfFood = 'Cibo secco';
$prodotti[0]->expireDate = '12/23';
$prodotti[] = new Hygene('Sapone secco', 6, 50, 'Cane');
$prodotti[1]->type = "Prodotti per l'igiene";
$prodotti[] = new Accessory('Trespolo', 60, 5, 'Volatili');
$prodotti[2]->category = "Accessori";

//creazione due utenti
$utente = new User('giovanni', 'rana', 'giovanni.rana@gmail.com');
$utente->setCreditCard();
$utenteReg = new RegisteredUser('giovanni', 'rana', 'giovanni.rana@gmail.com');
$utenteReg->setCreditCard();
$utenteReg->setDiscount(20);
$utenteReg->setRegistered(true);

// gestione dell'eccezione alla modifica della data di scadenza
$creditcard = new CreditCard(123, 123, strval(mt_rand(1, 12)) . '/' . strval(mt_rand(2000, 2037)));
try {
    $creditcard->setCreditExpireDate(strval(mt_rand(1, 12)) . '/' . strval(mt_rand(2000, 2037)));
    echo $creditcard->getCreditCardExpireDate();
} catch (Exception $e) {
    echo $creditcard->getCreditCardExpireDate();
    echo $e->getMessage();
}
// echo '<pre>';
// var_dump($creditcard);
// echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio di animali</title>
</head>

<body>
    <h1>Negozio di Animali</h1>
    <pre>
<?php var_dump($utente, $utenteReg) ?>
    </pre>
</body>

</html>