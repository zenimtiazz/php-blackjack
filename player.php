<?php
declare(strict_types=1);



class Player{
    private $cards = [];
    private $lost = false;
    private const maxVal = 21;

    public function __construct($deck)
    {
        for($i =0; $i<2; $i++){
     $this->cards[]= $deck->drawCard();
        }
    }

public function hit(Deck $deck) {
$this->cards[]=$deck->drawCard();
// if($this->getScore()>21)
//use class constant
if($this->getScore() > self::maxVal){
$this->lost=true;
}
}

public function surrender() :bool{
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
public function getFirstCardOnly(){
    return $this->card[0];
}
public function getCards() : array
{
    return $this->cards;
}
}
?>