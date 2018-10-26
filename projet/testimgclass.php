<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form  action="testimgclass.php" method="post" enctype="multipart/form-data">
  <p>
  <input type="text" name="photo" id="photo" placeholder="Photo" size="40" value="http://chaire-eti.org/wp-content/uploads/2018/01/avatar-homme.png">
  </p>
  <p><input type="file" name="upload" id="uploadPc"  /></p>

  <input type="submit" value="testimg">
</form>

<?php
require("imgClass.php");
  $img = $_FILES['upload'];

echo '<pre>';
move_uploaded_file($img['tmp_name'], "imgbd/".$img['name']);

Img::creerMin("imgbd/".$img['name'], "imgbd/min", $img['name'], 340, 220);

 ?>

  </body>
</html>
