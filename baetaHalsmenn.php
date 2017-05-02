<?php
    include "connect.php";
    include "queryHalsmenn.php";

?>

<!DOCTYPE html>
<html lang="is">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Baeta vid skarti</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="stilsidaAdd.css">

</head>
<body>

<form action="inputHalsmenn.php" method="POST">
  <div class="imgcontainer">
    <img src="myndir/hulsmunn.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Nafn</b></label>
    <input type="text" placeholder="Nafn" name="nafn" required>

    <label><b>Mynd</b></label>
    <input type="text" placeholder="Myndavefslod" name="mynd" required>

    <label><b>Verð</b></label>
    <input type="text" placeholder="verð" name="verd" required>

    <label><b>Uplísingar</b></label>
    <input type="text" placeholder="Uplsingar" name="uplisingar" required>

    <button type="submit">Bæta við</button>
  </div>

  <div class="container" style="background-color:#FFCDD2">
    <a href="halsmenn.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>
</body>
</html>