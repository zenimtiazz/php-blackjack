<?php
declare(strict_types=1);

require 'Deck.php';

class Player{
    private $cards = [];
    private $lost = false;
    private const maxVal = 21;

    public function __construct(Deck $deck)
    {
     array_push($this->cards, $deck->drawCard(), $deck->drawCard());

    }

public function hit(Deck $deck) :void{
array_push($this->cards,$deck->drawCard());
// if($this->getScore()>21)
//use class constant
if($this->getScore() > self::maxVal){
$this->lost=true;
}
}

public function surrender() :void{
    $this->lost =true;
}

public function getScore(Deck $deck) :int{
    $totalValue =0;
    foreach ($this->cards as $card) {
        $totalValue += $card->getValue();
     
    }
    return $totalValue;
}

public function hasLost():bool{
   return $this->lost; 
}
}
?>