<?php declare(strict_types=1);

/**
 * Require form for add one or multiple images
 * @param boolean $multiple
 * @return void
 */
function getFormAddImg(bool $multiple = false)
{
    return ($multiple) ? require_once $config['forms']['addImg']['oneImg'] : $config['forms']['addImg']['multipleImgs'];
}