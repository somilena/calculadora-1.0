<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Calculadora </title>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <meta charset = "UTF-8">
    </head>
   <body>
      <table border="1px" bordercolor="lightgrey" align="center">
         <th class="th">CALCULADORA</th>
         <tr>
            <td>
               <form action=calculadora.php method="get" >
               <p class="num1">Primeiro número: <input name="num1" type="text"<?php echo "placeholder= " . $_REQUEST['num1']; ?> ></p>
            </td>
         </tr>
         <tr>
            <td align="center">
            <p class="operacao">Operação:          
               <input name="operacao" type="text" <?php echo "placeholder= " . $_REQUEST['operacao']; ?> ></p>
            </td>
         </tr>
         <tr>
            <td>
               <p class="num2"> Segundo número: <input name="num2" type="text" <?php echo "placeholder= " . $_REQUEST['num2']; ?> ></p>
            </td>
         </tr>
         <tr>
            <td align="center">
            <p><input class="btncalcular" name="btncalcular" id="btncalcular" type="submit"  value="Calcular" /></p>
            </td>
         </tr>           
            <?php
                  $a = $_REQUEST['num1'];
                  $b = $_REQUEST['num2'];
                  $op = $_REQUEST['operacao'];
                  $c = $_REQUEST['resultado'];

                  if( !empty($op) ) {
                        if($op == '+')
                           $c = $a + $b;
                        else if($op == '-')
                           $c = $a - $b;
                        else if($op == '*')
                           $c = $a*$b;
                        else if($op == '/')
                           $c = $a/$b;
                           //echo "<script> alert ('O resultado da operação é: $c')</script>";
                     }
            ?>   
         <tr>
            <td class="resultado">
                  <p>
                     <?php 
                           if (!empty($c)){
                        echo "O resultado da operação é: " . $c;
                        }
                     ?>
                  </p>
            </td>
         </tr>
         <tr>
            <td class="btnrefazer">
               <input type="submit" value="Fazer nova operação">
            </td>
         </tr>   
      </table>
      </table>
   </body>
</html>
