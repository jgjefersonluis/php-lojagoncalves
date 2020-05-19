<h2>Esta é a página do produtos!</h2>

<?php

$produtos = new Produtos();
$produtos->GetProdutos();

echo '<pre>';
var_dump($produtos->GetItens());
echo '</pre>;'

?>