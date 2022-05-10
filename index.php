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
        echo '<h1 id="groet">Goede morgen! ^^</h1>';
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
  </body>
  <footer>
        <p>&#169; Made by Kevin Kraaijveld</p>
    </footer>
</html>
