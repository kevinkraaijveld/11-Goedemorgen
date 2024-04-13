<!DOCTYPE html>
<html>
  <head>
    <title>Goedemorgen</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
    <?php
    date_default_timezone_set('europe/amsterdam');
      $date = date("H:i");
      if($date >="06:00" && $date <"12:00"){
        echo '<body style="background-image: url(./backgrounds/morning.png)"';
        echo '<h1 id="groet">Goeden morgen! ^^</h1>';
        echo '<p id="tijd">Het is nu ' . $date . '</p>';
      }
      else if($date >="12:00" && $date <"18:00"){
        echo '<body style="background-image: url(./backgrounds/afternoon.png)"';
        echo '<h1 id="groet">Goede middag! :)</h1>';
        echo '<p id="tijd">Het is nu ' . $date . '</p>';
      }
      else if($date >="18:00" && $date <"00:00"){
  	echo '<body style="background-image: url(./backgrounds/evening.png)">';
  	echo '<h1 id="groet">Goede avond!</h1>';
  	echo '<p id="tijd">Het is nu ' . $date . '</p>';
      }
      else{
  	echo '<body style="background-image: url(./backgrounds/evening.png)">';
  	echo '<h1 id="groet">Goede Nacht!</h1>';
  	echo '<p id="tijd">Het is nu ' . $date . '</p>';
      }
      ?>
    <p>
      <?php
      $time = date("H:i");
      $currentDST = date("I");

      if ($currentDST) {
        $wintertime = date("H:i", strtotime($time) - 3600); 
        echo "Wintertijd: " . $wintertime;
      } else {
        $summertime = date("H:i", strtotime($time) + 3600); 
        echo "Zomertijd: " . $summertime;
      }
      ?>
</p>
    <div id="backfresh">
      <a href="https://www.kevii.nl/portfolio">
      <img id="imgback" alt="Terug naar portfolio" src="../images/Arrows_Back_white.png">
      <p style="background-color: rgba(255, 255, 0, 0);color: white;" >Terug naar portfolio</p></a>
    </div>
  </body>
</html>
