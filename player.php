<?php
declare(strict_types=1);

class Player{
    private array $cards = [];
    private bool $lost = FALSE;

    public function __construct(Deck $deck)
    {
     array_push($this->cards, $deck->drawCard(), $deck->drawCard());

    }
public function hit(){

}

public function surrender(){
    
}

public function getScore(){
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