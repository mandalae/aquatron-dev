<?php
require_once "_inc/_page.php";

$text = new Text(1);
$page->assign('text', $text);

$page->display('index.tpl');