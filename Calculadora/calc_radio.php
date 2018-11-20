<?php



include ("./calculadora.php");
if ($_POST) {
    $v1 = $_POST ['txtv1'];
    $v2 = $_POST ['txtv2'];
    $op = $_POST ['operacao'];
    
   if($op == 'soma') {
       $total = $v1 + $v2;
       echo $total;
   } else if ($op == 'sub'){
       $total = $v1 - $v2;
        echo $total;
   }else if ($op == 'mult'){
       $total = $v1 * $v2;
        echo $total;
   }else if ($op == 'div'){
       $total = $v1 / $v2;
        echo $total;
   }
  
}
?>