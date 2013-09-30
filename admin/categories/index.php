<?php
require_once "../../_inc/_page.php";

if (isset($_GET['delete'])){
    $category = new Category($_GET['delete']);
    $category->delete();
    
    header("Location: /admin/categories");
}

$category = new Category();
$categories = $category->getAll("name ASC");

$page->assign('categories', $categories);

$page->display('admin/categories/index.tpl');