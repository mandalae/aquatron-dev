<?php
require_once '_class/Image.php';
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
function smarty_function_image($params, &$smarty)
{
	$image = new Image($params['id']);

	$width = (isset($params['width'])) ? $params['width'] : 0;
	$height = (isset($params['height'])) ? $params['height'] : 0;
	$size = (isset($params['size'])) ? $params['size'] : 0;
	$crop = (isset($params['crop']) ? true : false);

	$extra = '';
	if (isset($params['extra'])) {
		$extra .= $params['extra'];
	}
	if (isset($params['alt'])) {
		$extra .= ' alt="'.$params['alt'].'"';
    }
    else
    {
    	$extra .= ' alt=""';
    }
	if (isset($params['title'])) {
		$extra .= ' title="'.$params['title'].'"';
	}
	if (isset($params['border'])) {
		$extra .= ' border="'.$params['border'].'"';
	}

	if (isset($params['type'])) {
		switch ($params['type']) {
			case 'src':
				$html = $image->getPath($width, $height);
				break;
			case 'gallery':
				$image->setId($params['id']);
				$image->load();
				if ($width > $imagedb->getItem('width'))
					$width = $imagedb->getItem('width');
				if ($height > $imagedb->getItem('height'))
					$height = $imagedb->getItem('height');
				$html = $image->getTag($width, $height);
				break;
			default:
				$html = $image->getTag($width, $height);
				break;
		}
	} else {
		$html = $image->getTag($width, $height);
	}

	return $html;
}

/* vim: set expandtab: */

?>
