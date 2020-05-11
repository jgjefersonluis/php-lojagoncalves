<?php
require './lib/autoload.php';

$smarty = new Template();

// valores para o template
$smarty->assign('NOME', 'JEFERSON LUIS MORAES GONÇALVES');

$smarty->display('index.tpl');
?>