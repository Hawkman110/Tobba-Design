<?php
    include "connection.php";
    include "queryHringir.php";

?>

<!DOCTYPE html>
<html lang="is">
<html>
<head>
  <meta charset="utf-8">
  <title>Food sign up</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="stilsida8.css">

</head>
<body>

<form action="input3.php" method="POST">
  <div class="imgcontainer">
    <img src="myndir/img_mf.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Nafn</b></label>
    <input type="text" placeholder="Nafn" name="nafn" required>

    <label><b>Mynd</b></label>
    <input type="text" placeholder="Myndavefslod" name="mynd" required>

    <label><b>Uplísingar</b></label>
    <input type="text" placeholder="Uplsingar" name="uplsingar" required>

    <button type="submit">Sign up</button>
    <input type="checkbox" checked="checked"> I wish I were a robot
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="mutantFood.html"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>

</body>
</html>