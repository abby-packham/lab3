<?php
$deck = array();
$deckPointer = 0;

$deckValues = array();
$deckSuits = array();

$suitArray = array("clubs", "diamonds", "hearts", "spades");
$cardTypes = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack','Queen','King');

$playerNames = array("Abby", "David", "Sammy", "Mike");
$players = array();



function shuffleDeck(){
    //initialize deck
    for($i = 0; $i < 51; $i++){
        $deck[$i] = $i;
    }
    //shuffle deck
    for($i = 0; $i < 51; $i++){
        $random = rand($i, 51);
        $temp = $deck[$i];
        $deck[$i] = $deck[$random];
        $deck[$random] = $temp;
    }
}
//deal the player their hand
function getHand(){
    $currentHandValue = 0;
    $hand = array();
    while($currentHandValue <= 37){
        $card = drawCard();
        $currentHandValue += ($card % 13) + 1;
        array_push($hand, $card);
    }
    return $hand;
}

function drawCard(){
    $returnValue = $deck[$deckPointer];
    $deckPointer++;
    return $returnValue;
}

function displayHand(){
    
}

function findWinner() {
    
}

?>