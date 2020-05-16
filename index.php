<?php
require './lib/autoload.php';

$smarty = new Template();
//Rotas::get_pagina();

// valores para o template
$smarty->assign('NOME', 'JEFERSON LUIS MORAES GONÇALVES');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);


//echo Rotas::get_SiteHOME() . '<br>';
//echo Rotas::get_SiteRAIZ() . '<br>';
//echo Rotas::get_SiteTEMA() . '<br>';

//echo Rotas::pag_Carrinho() . '<br>';

$dados = new Conexao();
$sql = "SELECT * FROM categorias";
$dados->ExecuteSQL($sql);

$lista = $dados->ListarDados();

echo '<pre>';
var_dump($lista);
echo '</pre>';

$smarty->display('index.tpl');