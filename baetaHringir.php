<?php
    include "connect.php";
    include "queryHringir.php";

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

<form action="inputHringir.php" method="POST">
  <div class="imgcontainer">
    <img src="myndir/one_ring.jpg" alt="Avatar" class="avatar">
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

  <div class="container" style="background-color:#F4F4F4">
    <a href="hringir.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>
</body>
</html>