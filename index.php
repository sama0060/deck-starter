<?php

/* 
  Task 1
  Loop through the suits
    Loop through the ranks
      create card from suit and rank

Task 2
  Loop 52 times
    Get random suit
    Get random rank
        Create card from suit and rank
        */
$suits = ['clubs', 'diamonds', 'hearts', 'spades'];
$ranks = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>
  <div id="deck" class="deck">
    <?php foreach ($suits as $suit) { ?>
      <?php foreach ($ranks as $rank) : ?>
    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
      <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
    </div>
    <?php endforeach; ?>
    <?php } ; ?>
  </div>

  <div id="deck" class="deck">
    <?php for ($i = 0; $i <52; $i++) {?>
   <?php
    $suit = $suits[rand(0, count($suits) -1)];
    $rank = $ranks[rand(0, count($ranks) -1)];
    ?>
    <div class="card">
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
      <div class="suit"><img src="images/<?php echo $suit; ?>.png"></div>
      <div class="number <?php echo $suit; ?>"><?php echo $rank; ?></div>
    </div>
    <?php } ?>
  </div>
  
</body>
</html>