<?php
require_once "_page.php";

$image = new Image();
$images = $image->getAll();

$page->assign('images', $images);

$page->display('admin/imagedb/index.tpl');