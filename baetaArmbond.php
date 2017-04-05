<?php
    include "connect.php";
    include "queryArmbond.php";

?>

<!DOCTYPE html>
<html lang="is">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Food sign up</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="stilsidaAdd.css">

</head>
<body>

<form action="inputArmbond.php" method="POST">
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
    <input type="checkbox" required> I agree to terms
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="armbond.html"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>

</body>
</html>