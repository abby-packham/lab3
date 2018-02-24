<?php
$deck = array();
$deckPointer = 0;

$deckValues = array();
$deckSuits = array();

$suitArray = array("Clubs", "Diamonds", "Hearts", "Spades");
$cardTypes = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack','Queen','King');

$playerNames = array("Abby", "David", "Sammy", "Mike");
$players = array();



function shuffleDeck(){
    //initialize deck
    for($i = 1; $i < 52; $i++){
        $deck[$i] = $i;
    }
    //shuffle deck
    for($i = 0; $i < 51; $i++){
        $random = rand($i, 52);
        $temp = $deck[$i];
        $deck[$i] = $deck[$random];
        $deck[$random] = $temp;
    }
}

function getHand(){
    
}

function drawCard(){
    
}

function displayHand(){
    
}

function findWinner() {
    
}

?>