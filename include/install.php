<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmnews module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */

function xoops_module_install_xmnews()
{
    $namemodule = 'xmnews';

    //Creation ".$namemodule."/
    $dir = XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '';
    if (!is_dir($dir)) {
        mkdir($dir, 0777);
    }
    chmod($dir, 0777);

    //Creation ".$namemodule."/images/
    $dir = XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images';
    if (!is_dir($dir)) {
        mkdir($dir, 0777);
    }
    chmod($dir, 0777);

    //Creation ".$namemodule."/images/category
    $dir = XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/category';
    if (!is_dir($dir)) {
        mkdir($dir, 0777);
    }
    chmod($dir, 0777);

    //Creation ".$namemodule."/images/news
    $dir = XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/news';
    if (!is_dir($dir)) {
        mkdir($dir, 0777);
    }
    chmod($dir, 0777);

    //Copy index.php
    $indexFile = XOOPS_ROOT_PATH . '/modules/' . $namemodule . '/include/index.php';
    copy($indexFile, XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/index.php');
    copy($indexFile, XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/index.php');
    copy($indexFile, XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/category/index.php');
    copy($indexFile, XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/news/index.php');
	
	//Copy no-image.png
    $blankFile = XOOPS_ROOT_PATH . '/modules/' . $namemodule . '/assets/images/no-image.png';
    copy($blankFile, XOOPS_ROOT_PATH . '/uploads/' . $namemodule . '/images/no-image.png');

    return true;
}
