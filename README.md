# Blackjack
## First OOP challenge

* Duration: 2 days

### Instructions:

####  Create a class called Player in the file Player.php. :heavy_check_mark:
* Add 2 private properties::heavy_check_mark:
* cards (array):heavy_check_mark:
* lost (bool, default = false):heavy_check_mark:
* Add a couple of empty public methods to this class::heavy_check_mark:
* hit:heavy_check_mark:
* surrender:heavy_check_mark:
* getScore:heavy_check_mark:
* hasLost:heavy_check_mark:
#### Create a class called Blackjack in the file Blackjack.php:heavy_check_mark:
1. Add 3 private properties:heavy_check_mark:
* player (Player)
* dealer (Player for now)
* deck (Deck)
2. Add the following public methods::heavy_check_mark:
* getPlayer (returns the player object)
* getDealer (returns the dealer object)
* getDeck (returns the deck object)
#### In the constructor do the following::heavy_check_mark:
* Instantiate the Player class twice, insert it into the player property and a dealer property.:heavy_check_mark:
* Create a new deck object (code has already been written for you!).:heavy_check_mark:
* Shuffle the cards with shuffle method on deck.:heavy_check_mark:
