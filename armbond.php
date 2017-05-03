<?php
	include "connect.php";
	include "queryArmbond.php";
?>


<!DOCTYPE html>
<html lang="is">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Tobba Design: Armbond</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="skartStill.css">
  </head>
  <body>
  	    <!-- Header -->
    <header class="group">
        <h1>Tobba Design: Armbönd</h1>

        <input type="checkbox" id="toggle">
        <label for="toggle">Menu <span>&#9776;</span></label>
        <nav><ul> 
            <li><a href="index.html">Heim</a></li>
            <li><a href="armbond.php">armbond</a></li>
            <li><a href="hringir.php">Hringir</a></li>
            <li><a href="halsmenn.php">Hálsmenn</a></li>
            <li><a href="eyrnalokkar.php">Eyrnalokkar</a></li>
            <li><a href="baetaArmbond.php">Bæta við </a></li>
        </ul></nav>
    </header>

    <?php
      echo "<div>";
      foreach ($armbond as $entry) {
    echo "<p class= 'skart'> " . "nafn: " . $entry[0] . "." . " " . "<br> uplisingar: " .  $entry[2] . "." . '<br> <img src="' . $entry[1] . '" style="width:304p"' .'">'. " " . "<br> verð: " .  $entry[3];
    }
    echo "</div>";

    ?>

  </body>
</html>