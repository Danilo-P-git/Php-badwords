<?php
  $titolo  = $_GET["title"];
  $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo bruttaparola. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $badWordCensored = str_replace("bruttaparola", "***", $paragrafo);

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP BADWORDS</title>
  </head>
  <body>
    <h1><?php echo $titolo; ?></h1>
    <p><?php echo $badWordCensored; ?></p>
  </body>
</html>
