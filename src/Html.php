<?php

namespace FVCode\Html;

use FVCode\Html\Parse;

class Html
{
    /**
     * Gerar tag <!-- label -->
     *
     * @param string $label
     * @return string
     */
    public static function comment($label)
    {
        return '<!--' . $label . '-->';
    }

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

    /**
     * Gerar tag <p></p>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function p($label, $data = [])
    {
        return '<p' . Parse::attr($data) . '>' . $label . '</p>';
    }

    /**
     * Gerar tag <b></b>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function b($label, $data = [])
    {
        return '<b' . Parse::attr($data) . '>' . $label . '</b>';
    }

    /**
     * Gerar tag <strong></strong>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function strong($label, $data = [])
    {
        return '<strong' . Parse::attr($data) . '>' . $label . '</strong>';
    }

    /**
     * Gerar tag <i></i>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function i($label, $data = [])
    {
        return '<i' . Parse::attr($data) . '>' . $label . '</i>';
    }

    /**
     * Gerar tag <em></em>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function em($label, $data = [])
    {
        return '<em' . Parse::attr($data) . '>' . $label . '</em>';
    }

    /**
     * Gerar tag <mark></mark>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function mark($label, $data = [])
    {
        return '<mark' . Parse::attr($data) . '>' . $label . '</mark>';
    }

    /**
     * Gerar tag <small></small>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function small($label, $data = [])
    {
        return '<small' . Parse::attr($data) . '>' . $label . '</small>';
    }

    /**
     * Gerar tag <del></del>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function del($label, $data = [])
    {
        return '<del' . Parse::attr($data) . '>' . $label . '</del>';
    }

    /**
     * Gerar tag <ins></ins>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function ins($label, $data = [])
    {
        return '<ins' . Parse::attr($data) . '>' . $label . '</ins>';
    }

    /**
     * Gerar tag <sub></sub>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function sub($label, $data = [])
    {
        return '<sub' . Parse::attr($data) . '>' . $label . '</sub>';
    }

    /**
     * Gerar tag <sup></sup>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function sup($label, $data = [])
    {
        return '<sup' . Parse::attr($data) . '>' . $label . '</sup>';
    }

    /**
     * Gerar tag <blockquote></blockquote>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function blockquote($label, $data = [])
    {
        return '<blockquote' . Parse::attr($data) . '>' . $label . '</blockquote>';
    }

    /**
     * Gerar tag <q></q>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function q($label, $data = [])
    {
        return '<q' . Parse::attr($data) . '>' . $label . '</q>';
    }

    /**
     * Gerar tag <abbr></abbr>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function abbr($label, $data = [])
    {
        return '<abbr' . Parse::attr($data) . '>' . $label . '</abbr>';
    }

    /**
     * Gerar tag <address></address>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function address($label, $data = [])
    {
        return '<address' . Parse::attr($data) . '>' . $label . '</address>';
    }

    /**
     * Gerar tag <cite></cite>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function cite($label, $data = [])
    {
        return '<cite' . Parse::attr($data) . '>' . $label . '</cite>';
    }

    /**
     * Gerar tag <bdo></bdo>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function bdo($label, $data = [])
    {
        return '<bdo' . Parse::attr($data) . '>' . $label . '</bdo>';
    }
}
