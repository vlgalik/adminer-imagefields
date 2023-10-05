<?php

/**
 * Imagefields plugin for Adminer.
 *
 * @link https://github.com/vlgalik/adminer-imagefields
 * @author Ladislav Galik, https://galik.it
 */

class AdminerImagefields
{
    private $width, $height, $url;

    public static $template = '<img src="%s" style="display: block; max-width: %spx; max-height: %spx;" alt="%s"/>%s';

    function __construct($width = 200, $height = 200, $url = false) {
        $this->width = $width;
        $this->height = $height;
        $this->url = $url;
    }

    public function selectVal(&$val, $link, $field, $original) {

        $trimmed = trim($val);

        if ($link !== null && self::hasImageExtension($trimmed)) {
            $val = sprintf(self::$template, $trimmed, $this->width, $this->height, $val, $this->url ? $val : '');
        }
    }

    private static function hasImageExtension($input) {
        return preg_match('/^.*\.(jpg|jpeg|png|gif)(\?.*)?$/i', $input);
    }

}
