<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
    <style media="screen">
      table{
        border-color: black;
        border: solid;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>
    <?php
      $a1=["A" =>1,"B"=>2,"C"=>3];
      $a2=["D"=>4,"E"=>5,"F"=>6];
      $a3=["G"=>7,"H"=>8,"I"=>9];

      foreach($a1 as $letra=>$numero)
	       {
	           echo "$letra:$numero  ";
	           echo "   ";
	       }
         echo "<br>";
         echo "<br>";
      foreach($a2 as $letra=>$numero)
   	     {
   	           echo "$letra:$numero  ";
   	           echo "   ";
   	     }
         echo "<br>";
         echo "<br>";
      foreach($a3 as $letra=>$numero)
      	 {
      	           echo "$letra:$numero  ";
      	           echo "   ";
      	 }
    ?>
        </td>
      </tr>
    </table>
  </body>
</html>
