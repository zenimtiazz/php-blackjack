<?php 

declare(strict_types=1);


class Dealer extends Player{
    private const maxScore = 15;
   

    public function hit(Deck $deck) :void{
        while ($this->getScore() < self::maxScore) {
            parent::hit($deck);
    }


}
}
?>
