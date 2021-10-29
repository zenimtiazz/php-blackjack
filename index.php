<?php 
declare(strict_types=1);


require 'Card.php';
require 'Deck.php';
require 'player.php';
require 'suit.php';
require 'Blackjack.php';
require 'Dealer.php';


session_start();

if (!isset($_SESSION['blackjack'])) {
    $blackjack = new blackjack();
    $_SESSION['blackjack'] = serialize($blackjack);
} else {
    $blackjack = unserialize($_SESSION['blackjack']);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["hit"])) {
        $blackJack->getPlayer()->hit($blackJack->getDeck());
        $_SESSION['blackjack'] = $blackjack;
    }
   
    if (isset($_POST["surrender"])) {
        $blackJack->getPlayer()->surrender();
        $_SESSION['blackjack'] = $blackjack;

    }
    if(isset($_POST['stand'])) {
        $blackjack->getDealer()->stand($blackjack->getDeck());
        $_SESSION['blackjack'] = $blackjack;
      }
      $result = $blackjack->getResult();
}

foreach ($blackjack->getPlayer()->getPlayerCards() as $card) {
    array_push($playerCards, $card->getUnicodeCharacter(true));
}

foreach ($blackjack->getDealer()->getPlayerCards() as $card) {
    array_push($dealerCards, $card->getUnicodeCharacter(true));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blackjack</title>
</head>
<body>

    <form method="post">
        <div id="control_area">
            <button type="submit" name="btn_hit">hit</button>
            <button type="submit" name="btn_stand">stand</button>
            <button type="submit" name="btn_surrender">surrender</button>
        </div>
        
    </form>

</body>
</html>
   
    