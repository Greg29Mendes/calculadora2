<?php

/**
 * @package Calculadora
 * @version 0.1
 */
/*
Plugin Name: Calculadora Girino2

Description: Só quero me formar
Version: 0.1
Author URI: Girino.com.br
*/

function criacao_calculadora2(){
?>

<form name="calcform" method="post" action="">
   <fieldset>
    

      <input type="text" name="visor" id="visor" />

      <table id="calc">
         <tr>
            <td><input type="button" name="num9" class="num" value="9" onclick="calcNum(9)" /></td>
            <td><input type="button" name="num8" class="num" value="8" onclick="calcNum(8)" /></td>
            <td><input type="button" name="num7" class="num" value="7" onclick="calcNum(7)" /></td>
            <td><input type="button" name="somar" class="oper" value="+" onclick="calcParse('somar')" /></td>
         </tr>
         <tr>
            <td><input type="button" name="num6" class="num" value="6" onclick="calcNum(6)" /></td>
            <td><input type="button" name="num5" class="num" value="5" onclick="calcNum(5)" /></td>
            <td><input type="button" name="num4" class="num" value="4" onclick="calcNum(4)" /></td>
            <td><input type="button" name="subtrair" class="oper" value="-" onclick="calcParse('subtrair')" /></td>
         </tr>
         <tr>
            <td><input type="button" name="num3" class="num" value="3" onclick="calcNum(3)" /></td>
            <td><input type="button" name="num2" class="num" value="2" onclick="calcNum(2)" /></td>
            <td><input type="button" name="num1" class="num" value="1" onclick="calcNum(1)" /></td>
            <td><input type="button" name="multiplicar" class="oper" value="*" onclick="calcParse('multiplicar')" /></td>
         </tr>
         <tr>
            <td><input type="button" name="num0" class="num" value="0" onclick="calcNum(0)" /></td>
            <td><input type="button" name="igual" class="num" value="=" onclick="calcParse('resultado')" /></td>
            <td><input type="button" name="limpar" class="num" value="AC" onclick="calcLimpar()" /></td>
            <td><input type="button" name="dividir" class="oper" value="/" onclick="calcParse('dividir')" /></td>
         </tr>
      </table>
   </fieldset>
</form>

<!--style formulario caralho porra-->

<style type="text/css">
	#visor {
   background-color: #4286f4;
   text-align: right;
}

table {
   margin: 0 auto 0 auto;
}

form fieldset {
   margin: 10px auto 10px auto;
   width: 40%;

   padding: 3%;
   margin-bottom: 10px;
}

form input {
   width: 100%;

   font-size: 11px;
   margin-bottom: 10px;
}

form input.num {
   display: block;
   width: 24px;
   height: 24px;
}

form input.oper {
   display: block;
   width: 24px;
   height: 24px;
   background-color: #4286f4;
}
</style>

<script type="text/javascript" >
function calcNum(num) {
   if (typeof gvisor == 'undefined') {
      document.calcform.visor.value = '';
   }
   document.calcform.visor.value = document.calcform.visor.value + num;
   gvisor = 1;
}


function calcLimpar() {
   document.calcform.visor.value = '';
   delete gvalor;
   delete goper;
   delete gvisor;
}

//operações básicas da calculadora
function calcOper(oper, valor1, valor2) {
   if (oper == "somar") {
      var valor = parseFloat(valor1) + parseFloat(valor2);
   } else {
      if (oper == "subtrair") {
         var valor = valor1 - valor2;
      } else {
         if (oper == "multiplicar") {
            var valor = valor1 * valor2;
         } else {
            var valor = valor1 / valor2;
         }
      }
   }

   return(valor);
}


function calcParse(oper) {
   var valor = document.calcform.visor.value;
   delete gvisor;

   if (typeof goper != 'undefined' && oper == 'resultado') {
      gvalor = calcOper(goper, gvalor, valor);
      document.calcform.visor.value = gvalor;
      delete oper;
      delete gvalor;
      return(0);
   }

   if (typeof gvalor != 'undefined') {
      gvalor = calcOper(goper, gvalor, valor);
      goper = oper;
      document.calcform.visor.value = gvalor;
   } else {
      gvalor = valor;
      goper = oper;
   }

}
</script>

<!--<script type="text/javascript" >
	
	
function calcular()						{
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
	alert(" echo $total");
											}
	
</script>-->





<?php


	}
	
		add_shortcode('calculadora2','criacao_calculadora2');
?>
