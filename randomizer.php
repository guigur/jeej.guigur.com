<?php
/**
 * Created by PhpStorm.
 * User: guigur
 * Date: 13/07/15
 * Time: 16:19
 */

$dir = "vids/";

$content = array();
$pos = 0;
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
                $content[$pos]['file'] = $file;
                $pos++;
            }
        }
        closedir($dh);
    }
}
$fileToPlay = rand(0, $pos - 1);
$content =  $dir.$content[$fileToPlay]['file'];
echo $content;