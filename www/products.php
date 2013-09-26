<?php
require_once "_page.php";

$text = new Text();
$text->loadByType('seo', 'products');

$page->assign("headline", $text->getHeadline());
$page->assign("text", $text->getContent());

$product = new Product();
$products = $product->getActiveProducts();

$page->assign('products', $products);

$page->display('products.tpl');