<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 01: Hello World</title>
  </head>
  <body>
    <?php
       $message="DOWN";

      switch ($message) {
          case "UP":
            echo "<b>UP</b> SELECTED";
            break;
          case "DOWN":
            echo "<b>DOWN</b> SELECTED";
              break;
          case "LEFT":
            echo "<b>LEFT</b> SELECTED";
            break;
          case "RIGHT":
            echo "<b>RIGHT</b> SELECTED";
            break;
        }
?>
  </body>
</html>
