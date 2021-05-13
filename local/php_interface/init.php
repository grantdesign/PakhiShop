<?php
define('DEFAULT_TEMPLATE_PATH', '/local/templates/.default');

function debug($data)
{
	echo '<pre>'.print_r($data, 1).'</pre>';
}

function resizeImage($img, $width, $height)
{
	$file = CFile::ResizeImageGet($img, ['width' => $width, 'height' => $height], BX_RESIZE_IMAGE_EXACT, true);
	return $file['src'];
}