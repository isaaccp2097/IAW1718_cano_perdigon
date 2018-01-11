<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
    <style media="screen">

    </style>
  </head>
  <body>
    <h1>Color Table</h1>
    <table border="1px">
      <tr>
        <td><b>Color Name</b></td>
        <td><b>Hex Code</b></td>
      </tr>


    <?php
      $vector=["BlanchedAlmond" =>"#ffebcd","CadeBlue"=>"#5f9ea0","BurlyWood"=>"#deb887","DarkOliveGreen"=>"#556b2f","HotPink"=>"#ff69b4","Papayawhip"=>"#ffefd5"];
      foreach($vector as $n=>$h)
	       {
	           echo "<tr>";
             echo "<td bgcolor='$h'>$n</td><td bgcolor='$h'>$h</td>";
             echo "</tr>";
	       }
    ?>

    </table>
  </body>
</html>
