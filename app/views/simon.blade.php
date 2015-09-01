<!DOCTYPE=html>
<html>
  <head>
      <title>Simple Simon Game</title>

       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></link>
      <link rel="stylesheet" type="text/css" href="css/simon.css">
  </head>

<body>
  <div id="container">  
  <div class = "back">
      <div class = "gamePad">
          <div class="pad square" id = "red"></div>
          <div class="pad square" id = "blue"></div>
          <div class="pad square" id = "yellow"></div>
          <div class="pad square" id = "green"></div>
      </div>
      <div class = "circle">
          <button id = "startButton"><strong>START SIMON</strong></button>
          <h5 id = "level">Level: 1</h5>
      </div>
  </div>
  </div>

  <!-- load jQuery file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
  <script type="text/javascript">
  
(function() {
  "use strict";

  var simonSequence = [];
  var playerIndex = 0;
  var level = 1;

/*  square clicked by player animates bc defined it as this square - PLAYER SEQUENCE*/    

$('.square').click(function(e) {
      var squareClickedByPlayer = $(this).attr('id');
      animateSquare(squareClickedByPlayer);
      if (squareClickedByPlayer == simonSequence[playerIndex]) {
          playerIndex++;
          setTimeout(function() {
            if (playerIndex == simonSequence.length) {
              computerTurn();
              playerIndex = 0;
              console.log(squareClickedByPlayer);
            }
          }, 500);
      } else {
        alert("Sorry, play again!");
      }
    });

    /*On Simon's turn, invoke getRandomSquare and playSimonSequence functions and set level equal to simonSequence level after a 1 sec*/
    function computerTurn () {
      getRandomSquare();
      playSimonSequence();
      setTimeout(function() {
        $('#level').text("Level: " + simonSequence.length);
      }, 1000);
    };
 
    /*function for Simon to select a random square; animate function is invoked and attribute of the animated button is pushed to simonSequence*/
    function getRandomSquare () {
      var squares = $('.square');
      var rand = Math.floor(Math.random() * 4);
      var buttonToAnimate = squares[rand];
      var id = buttonToAnimate.getAttribute('id');
      simonSequence.push(id);
    };

    /*function for animating/lighting up a square - animateSquare (ID=square) */
    function animateSquare (id) {
      $('#' + id).addClass('active');
      setTimeout(function( ) {
        $('#' + id).removeClass('active');
      }, 250);
    };

    /*function for Simon to iterate through array of squares with interval clear condition*/
    function playSimonSequence() {
      var i = 0;
      var intervalId = setInterval(function() {
          if(i >= simonSequence.length) {
            clearInterval(intervalId);
          }
          animateSquare(simonSequence[i]);
          i+=1;
      }, 1000);
    }

    /*when click start button, simonSequence resets and computerTurn function is invoked*/
  $('#startButton').click(function (e) {
      simonSequence = [];
      computerTurn();
  });

})();

</script>

 </body>
 </html>


