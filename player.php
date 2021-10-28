<?php
declare(strict_types=1);

class Player{
    private array $cards = [];
    private bool $lost = false;
    private const maxVal = 21;

    public function __construct(Deck $deck)
    {
     array_push($this->cards, $deck->drawCard(), $deck->drawCard());

    }

public function hit(){
array_push($this->cards,$deck->drawCard());
// if($this->getScore()>21)
//use class constant
if($this->getScore() > self::maxVal){
$this->lost=true;
}
}

public function surrender(){
    $this->lost =true;
}

public function getScore(DECK $deck){
    foreach ($this->cards as  $value) {
        $totalValue += cards->getValue();
     
    }
    return $totalValue;
}

public function hasLost(){
   return $this->lost; 
}
}
?>