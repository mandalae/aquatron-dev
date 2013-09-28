<?php
require_once "_page.php";

$text = new Text();
$text->loadByType('seo', 'products');

$page->assign("headline", $text->getHeadline());
$page->assign("text", $text->getContent());

$offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
$limit = isset($_GET['limit']) ? $_GET['limit'] : 16;
$brandSeo = isset($_GET['brand']) ? $_GET['brand'] : null;
$categorySeo = isset($_GET['category']) ? $_GET['category'] : null;

$brand = new Brand();
$brand->loadByType('seo', $brandSeo);

$category = new Category();
$category->loadByType('seo', $categorySeo);

$product = new Product();
$products = $product->getActiveProducts(array('brand' => $brand->getId(), 'category' => $category->getId()), ($offset*$limit), $limit);

$page->assign('products', $products);
$page->assign('nextPage', $offset+1);
$page->assign('previousPage', $offset-1);

$page->display('products.tpl');