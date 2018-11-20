<?php

/**
 * @package Calculadora
 * @version 0.1
 */
/*
Plugin Name: Calculadora Girino

Description: Só quero me formar
Version: 0.1
Author URI: Girino.com.br
*/

function criacao_calculadora(){
?>

<form name="calcform" method="post" action="">
   <fieldset>
     

      <label for="valor1">Digite o valor <strong>1</strong>:</label>
      <input type="text" name="valor1" id="valor1" />

      <label for="valor2">Digite o valor <strong>2</strong>:</label>
      <input type="text" name="valor2" id="valor2" />

      <label for="oper">Selecione a operação:</label>
      <select name="oper" id="oper">
         <option value="somar">Somar</option>
         <option value="subtrair">Subtrair</option>
         <option value="multiplicar">Multiplicação</option>
         <option value="dividir">Dividir</option>
      </select>

      <label for="res">Resultado:</label>
      <input type="text" name="res" id="res" />

      <input type="button" value="Calcular" class="botao" onClick="calcular(document.calcform.oper.value)"/>
   </fieldset>
</form>
<br><br><br><br><br>

<!--style formulario caralho porra-->

<style type="text/css">
	form fieldset {
   margin: 10px auto 10px auto;
   width: 40%;
   
   padding: 3%;
}

form legend {
   padding: 6px;
   margin: 10px;
 
   font-size: 90%;
   font-weight: bold;
   background-color: #e8e8e8;
}

form label {
   display: block;
   font-size: 11px;
}

form input {
   width: 100%;

   font-size: 11px;
   margin-bottom: 10px;
}

form input.botao {
   display: block;
   width: auto;
   float: right;
}
</style>

<script type="text/javascript" >
	
	function calcular(oper) {
   var valor1 = document.calcform.valor1.value;
   var valor2 = document.calcform.valor2.value;

   if (oper == "somar") {
      var res = parseInt(valor1) + parseInt(valor2);
   } else {
      if (oper == "subtrair") {
         var res = valor1-valor2;
      } else {
         if (oper == "multiplicar") {
            var res = valor1*valor2;
         } else {
            var res = valor1/valor2;
         }
      }
   }

   document.calcform.res.value = res;
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
	
		add_shortcode('calculadora','criacao_calculadora');
?>
