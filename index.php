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
    $_SESSION['blackjack'] = new Blackjack();
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