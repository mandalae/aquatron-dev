<?php
session_start();

set_include_path(get_include_path() . ":/home/rpediem/www/aqua/_class:/home/rpediem/www/aqua");

// Autoload classes
function aq_autoload($class_name) {
    $class_name = str_replace('_', '/', $class_name);
    $found = false;
    $includePaths = explode(':', get_include_path());
    foreach ($includePaths as $path){
        if (@is_file($path . '/_class/' . $class_name . '.php'))
            $found = true;
    }
    if ($found)
        require_once '_class/' . $class_name . '.php';
}

spl_autoload_register('aq_autoload');

$page = new Page();

if (isset($_SESSION['user']))
    $page->assign('user', unserialize($_SESSION['user']));
else 
    $page->assign('user', new User());

$brand = new Brand();
$brands = $brand->getAllActive();

$page->assign('brands', $brands);

$category = new Category();
$categories = $category->getAllActiveForMenu();

$page->assign('categories', $categories);

$course = new Course();
$courses = $course->getAllActive();

$page->assign('courses', $courses);

$teaser = new Teaser();
$teasers = $teaser->getAllActive();

$page->assign('teasers', $teasers);

// Setup ACL
$acl = new ACL();
$aclList = $acl->getAllActive();
foreach ($aclList as $item){
    define("ACL_" . strtoupper($item['acl_text']), $item['id']);
}

$text = new Text();
$menuItems = $text->getAllVisible();
$page->assign("menuItems", $menuItems);