<?php
require('../vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty;


//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("curPage", 'beerpong');

$smarty->display('beerpong.tpl');
?>
