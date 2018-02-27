<?php
$deck = array();
$deckPointer = 0;

$deckValues = array();
$deckSuits = array();

$suitArray = array("clubs", "diamonds", "hearts", "spades");
$cardTypes = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack','Queen','King');

$playerNames = array("Abby", "David", "Sammy", "Mike");
$players = array();
$scores = array();
$winner;
$maxScore = 0;




function shuffleDeck(){
    
    global $deck;
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
    global $deck;
    
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
    global $deck, $deckPointer;
    $returnValue = $deck[$deckPointer];
    $deckPointer++;
    return $returnValue;
}

function displayHand(){
    global $players, $suitArray, $winner, $scores;
    foreach($players as $key => $playerHand){
        echo "$key: ";
        
        foreach($playerHand as $card){
            $suit = $suitArray[$card/13];
            $face = ($card % 13) + 1;
            echo "<img src=\"./cards/$suit/$face.png\" >";
        }
        $player = $scores[$key];
        echo "score: $player";
        echo "<br/>";
    }
    
    echo "The winner is: $winner";
}

function findWinner() {
        global $players, $scores, $winner;
    foreach($players as $key => $playerHand){
        $playerScore = 0;
        foreach($playerHand as $card){
            $playerScore += ($card % 13) + 1;
        }
        $scores[$key] = $playerScore;
        
    }
    foreach($scores as $key => $score){
        if($score > $maxScore&& $score <= 42){
            $maxScore = $score;
            $winner = $key;
         }
    }
}

// entry point for the web page
shuffleDeck();




foreach($playerNames as &$player){
    $players[$player] = getHand();
}

?>

<html>
    <head>
        <title> Silver Jack </title>
    </head>
    <body>
        <?php
        findWinner();
        displayHand();
        ?>
        
    </body>
</html>