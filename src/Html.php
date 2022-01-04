<?php

namespace FVCode\Html;

use FVCode\Html\Parse;

class Html
{
    /**
     * Gerar tag <h1></h1>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h1($label, $data = [])
    {
        return '<h1' . Parse::attr($data) . '>' . $label . '</h1>';
    }

    /**
     * Gerar tag <h2></h2>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h2($label, $data = [])
    {
        return '<h2' . Parse::attr($data) . '>' . $label . '</h2>';
    }

    /**
     * Gerar tag <h3></h3>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h3($label, $data = [])
    {
        return '<h3' . Parse::attr($data) . '>' . $label . '</h3>';
    }

    /**
     * Gerar tag <h4></h4>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h4($label, $data = [])
    {
        return '<h4' . Parse::attr($data) . '>' . $label . '</h4>';
    }

    /**
     * Gerar tag <h5></h5>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h5($label, $data = [])
    {
        return '<h5' . Parse::attr($data) . '>' . $label . '</h5>';
    }

    /**
     * Gerar tag <h6></h6>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function h6($label, $data = [])
    {
        return '<h6' . Parse::attr($data) . '>' . $label . '</h6>';
    }
}
