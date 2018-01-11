<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <ol>
    <?php
      $filasexternas=3;
      $filasinternas=3;
        for ($i=1;$i<=$filasexternas;$i++) {
          echo "<li>A";
          echo "<ol>";
                for ($b=0; $b <$filasinternas ; $b++) {
                  echo "<li>A</li>";
                }
          echo "</ol>";
          echo "</li>";
        }
      ?>
    </ol>
  </body>
</html>
