<?php
	echo "Welcome to Blackjack\n";
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
  foreach ($suits as $suit) {
  	foreach ($cards as $card) {
  		$deck[] = [$card, $suit];
  	}
  	
  }
  shuffle($deck);
  // var_dump($deck);
  	return $deck; 
}

// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
  if($card[0] == 'A')
  	return 'true';
  elseif ($card != 'A') {
  	return 'false';
  }
}
// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card, $ace = 11) {
	if ( $card == 'J' || $card == 'Q' || $card == 'K'){
		 $value = 10;
	}elseif($card == 'A'){
		 $value = $ace;
	}else {
		$value =$card;
	}
	return $value;
 }
  	
// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($cards) {
  	$value = 0;
  		foreach ($cards as $card) {
  			$value += getCardValue($card[0]);
  		}

  		// if ($value > 21){
  		// 	$value = 0{

  		// 	}
  		// }
  		return $value;

}


// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
		foreach	($cards as $card){
 			$total = getHandTotal($hand);
 		$message = "{$name}:".$card.$card."Total: $total";
	};
		echo $message;
}
// build the deck of cards
$deck = buildDeck($suits, $cards);
// var_dump($deck);
// initialize a dealer and player hand
$dealer[] = array_shift($deck);
$player[] = array_shift($deck);
$dealer[] = array_shift($deck);
$player[] = array_shift($deck);
// print_r($player);
// print_r($dealer);

	echo  $player[0][0];
	echo  $player[0][1];


// dealer and player each draw two cards
// todo
// echo the dealer hand, only showing the first card
// todo
// echo the player hand
// todo
// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// function drawHand($hands){

// }
// while ($getHandTotal < 21) {
//  	echo "(H)it" or "(S)tay";
// } 
// $input = trim(fgets(STDIN))
// if ($input == 'H'){

// }
 
// show the dealer's hand (all cards)
// todo
// todo (all comments below)
// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins



