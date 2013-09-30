<?php
require_once '_class/ImageDB.php';
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {imagedb} function plugin
 *
 * Type:     function<br>
 * Name:     imagedb<br>
 * Date:     Feb 24, 2003<br>
 * Purpose:  format HTML tags for the image<br>
 * Input:<br>
 *         - id = id of image (required)
 *         - width = image width (optional, default actual width)
 *         - height = image height (optional, default actual height)
 *         - alt = extra html options
 *         - title = extra html options
 *         - extra = extra html options
 *
 * Examples: {imagedb id=23 width=400 height=23}
 * Output:   <img src="images/cachedimage.gif" width=400 height=23>
 * @author   Henrik Nicolaisen <hmn@newz.dk>
 * @version  1.0
 * @param array
 * @param Smarty
 * @return string
 * @uses Z4
 */
function smarty_function_imagedb($params, &$smarty)
{
	$imagedb = new ImageDB($params['id']);

    $name = isset($params['name']) ? $params['name'] : 'image';
    $images = isset($params['images']) ? $params['images'] : array(); 
    $multiple = isset($params['multiple']) ? true : false;

	$html = $imagedb->getJS();
	if (!$multiple)
    	$html .= $imagedb->getSingleHTML($name);
    else
        $html .= $imagedb->getMultipleHTML($name, $images);

	return $html;
}

/* vim: set expandtab: */

?>
