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

1. In the [constructor](https://www.php.net/manual/en/language.oop5.decon.php) of the `Player` class; :heavy_check_mark:
    - Make it expect the `Deck` object as a parameter.
    - Pass this `Deck` from the `Blackjack` constructor.
    - Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
1. Go back to the `Player` class and add the following logic in your empty methods::heavy_check_mark:
    - `getScore` loops over all the cards and return the total value of that player.
    - `hasLost` will return the bool of the lost property.
    - `hit` should add a card to the player. If this brings him above 21, set `lost` property to `true`. To count his score use the method `getScore` you wrote earlier. This method should expect the `$deck` variable as an argument from outside, to draw the card.

 - If the session does not have a `Blackjack` variable yet: 
        - Create a new `Blackjack` object.:heavy_check_mark:
        - Put the `Blackjack` object in the session :heavy_check_mark:
        
 ###### Still getting errors don't know why :x:
