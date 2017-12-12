<?php


function numveces($v) {


  $gui="-";
  $x="x";
  $cuentax=0;
  $cuentagui=0;

  //Traversing the indexed array
  for($i=0;$i<sizeof($v);$i++) {
    if ($gui==$v[$i]) {
      $cuentagui=$cuentagui+1;
    }
    elseif ($x==$v[$i]) {
      $cuentax=$cuentax+1;
    }

  }
  echo "$cuentax<br>";
  echo "$cuentagui";
}


function es_primo() {

  for ($i=1; $i <= $_POST['primo']; $i++) {
    if ($i%$i==0 && $i/1==0) {
      echo "$i<br>";
    }
    
  }

}



?>
