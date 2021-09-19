<?php



//Código sem Null Coalescing Operator
echo '<b>Código sem Null Coalescing Operator</b><br>';
$valor = isset($_GET['valor']) ? $_GET['valor'] : 'Vazio';
echo $valor . '<br><br>';


//Código com Null Coealescing Operator
echo '<b>Código com Null Coalescing Operator</b><br>';
$valor = $_GET['valor'] ?? 'Vazio';
echo $valor;

?>