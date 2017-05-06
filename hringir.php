<?php
	include "connect.php";
	include "queryHringir.php";

?>

<!DOCTYPE html>
<html lang="is">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Tobba Design: Hringir</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="skartStill.css">
  </head>
  <body>
  	    <!-- Header -->
    <header class="group">
        <h1>Tobba Design: Hringir</h1>

        <input type="checkbox" id="toggle">
        <label for="toggle">Menu <span>&#9776;</span></label>
        <nav><ul> 
            <li><a href="index.html">Heim</a></li>
            <li><a href="armbond.php">Armbönd</a></li>
            <li><a href="hringir.php">Hringir</a></li>
            <li><a href="halsmenn.php">Hálsmenn</a></li>
            <li><a href="eyrnalokkar.php">Eyrnalokkar</a></li>
            <li><a href="baetaHringir.php">Bæta við </a></li>
        </ul></nav>
    </header>

  <section class="wrapper">
    <?php
      foreach ($hringir as $entry)
      {
        echo "<div class='kassi'> " . "nafn: " . $entry[0] . "." . " " . "<br> verð: " .  $entry[3] . "." . '<br> <img src="' . $entry[1] . '" style="width:380px"' .'">'. " " . "<br> uplisingar: " .  $entry[2] . "</div> ";
      }
    ?>
    </section>

  </body>
</html>