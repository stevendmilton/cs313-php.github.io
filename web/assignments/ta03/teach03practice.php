<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="utf-8">
    <meta name="Teach03" content="width=device-width, initial-scale=1">
    <title>CS313 Team 1</title>
    <meta name = "description" content="CS313 Assignments - Team 1">
    <link rel="stylesheet" href="normalize.css">
    <link id="styles" rel="stylesheet" href="teach03.css">
  </head>

  <header>
  </header>

  <body>

    <form action="teach03.php" method="post">

      <p>Name:</p>
      <input type="text" name="name"><br>

      <p>E-mail:</p>
      <input type="text" name="email"><br>

      <!-- Majors radio buttons -->
      <?php
      echo "<p>Major</p>";

      $majors = array("CS" => "Computer Science", "WDD" => "Web Design and Development", "CIS" => "Computer Information Systems", "CE" => "Computer Engineering");

      foreach($majors as $key => $value)
        echo "<input type='radio' name='major' value='$value'> $value <br>";

      echo "<p>Comments</p><textarea name='comments'></textarea><br>";

      //Continental checkbox options
      echo "<p>Places you have visited:</p>";

      $places = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AU" => "Austrialia", "AF" => "Africa", "AN" => "Antarctica");

      // In order to have this work, your name must include "[]" at the end!
      foreach($places as $key => $value) {
        echo "<input type='checkbox' name='Continent[]' value='$value'> $value <br>";
      }
      ?>

      <input type="submit" name="submit">

    </form>

  </body>

  <footer>
  </footer>

</html>
