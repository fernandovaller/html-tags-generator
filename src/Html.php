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

    /**
     * Gerar tag <a></a>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function a($label, $data = [])
    {
        return '<a' . Parse::attr($data) . '>' . $label . '</a>';
    }

    /**
     * Gerar tag <img />
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function img($data = [])
    {
        return '<img' . Parse::attr($data) . ' />';
    }

    /**
     * Gerar tag <picture></picture>
     *
     * @param string $content
     * @return string
     */
    public static function picture($content)
    {
        return '<picture>' . $content . '</picture>';
    }

    /**
     * Gerar tag <figure></figure>
     *
     * @param string $content
     * @return string
     */
    public static function figure($content)
    {
        return '<figure>' . $content . '</figure>';
    }

    /**
     * Gerar tag <figcaption></figcaption>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function figcaption($label, $data = [])
    {
        return '<figcaption' . Parse::attr($data) . '>' . $label . '</figcaption>';
    }

    /**
     * Gerar tag <ul></ul>
     *
     * @param array $content li tags
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function ul($content = [], $data = [])
    {
        return '<ul' . Parse::attr($data) . ' >' . Parse::toString($content, "\n") . '</ul>';
    }

    /**
     * Gerar tag <ol></ol>
     *
     * @param array $content li tags
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function ol($content = [], $data = [])
    {
        return '<ol' . Parse::attr($data) . ' >' . Parse::toString($content, "\n") . '</ol>';
    }

    /**
     * Gerar tag <dl></dl>
     *
     * @param array $content dt tags
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function dl($content = [], $data = [])
    {
        return '<dl' . Parse::attr($data) . ' >' . Parse::toString($content, "\n") . '</dl>';
    }

    /**
     * Gerar tag <li></li>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function li($label, $data = [])
    {
        return '<li' . Parse::attr($data) . '>' . $label . '</li>';
    }

    /**
     * Gerar tag <dt></dt>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function dt($label, $data = [])
    {
        return '<dt' . Parse::attr($data) . '>' . $label . '</dt>';
    }

    /**
     * Gerar tag <dd></dd>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function dd($label, $data = [])
    {
        return '<dd' . Parse::attr($data) . '>' . $label . '</dd>';
    }

    /**
     * Gerar tag <header></header>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function header($content = [], $data = [])
    {
        return '<header' . Parse::attr($data) . ' >' . $content . '</header>';
    }

    /**
     * Gerar tag <footer></footer>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function footer($content = [], $data = [])
    {
        return '<footer' . Parse::attr($data) . ' >' . $content . '</footer>';
    }

    /**
     * Gerar tag <main></main>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function main($content = [], $data = [])
    {
        return '<main' . Parse::attr($data) . ' >' . $content . '</main>';
    }

    /**
     * Gerar tag <nav></nav>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function nav($content = [], $data = [])
    {
        return '<nav' . Parse::attr($data) . ' >' . $content . '</nav>';
    }

    /**
     * Gerar tag <div></div>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function div($content = [], $data = [])
    {
        return '<div' . Parse::attr($data) . ' >' . $content . '</div>';
    }

    /**
     * Gerar tag <article></article>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function article($content = [], $data = [])
    {
        return '<article' . Parse::attr($data) . ' >' . $content . '</article>';
    }

    /**
     * Gerar tag <section></section>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function section($content = [], $data = [])
    {
        return '<section' . Parse::attr($data) . ' >' . $content . '</section>';
    }

    /**
     * Gerar tag <aside></aside>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function aside($content = [], $data = [])
    {
        return '<aside' . Parse::attr($data) . ' >' . $content . '</aside>';
    }

    /**
     * Gerar tag <fieldset></fieldset>
     *
     * @param string $content
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function fieldset($content = [], $data = [])
    {
        return '<fieldset' . Parse::attr($data) . ' >' . $content . '</fieldset>';
    }

    /**
     * Gerar tag <legend></legend>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function legend($label, $data = [])
    {
        return '<legend' . Parse::attr($data) . '>' . $label . '</legend>';
    }


    /**
     * Gerar tag <span></span>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function span($label, $data = [])
    {
        return '<span' . Parse::attr($data) . '>' . $label . '</span>';
    }

    /**
     * Gerar tag <iframe></iframe>
     *
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function iframe($data = [])
    {
        return '<iframe ' . Parse::attr($data) . '></iframe>';
    }

    /**
     * Gerar tag <table></table>
     *
     * @param array $content [ thead => [], tbody => [] , tfoot => [] ]
     * @param array $data Attributes [ table => [key=>value], thead => [...], tbody => [...], tfoot => [...] ]
     * @return string
     */
    public static function table($content = [], $data = [])
    {
        $thead = isset($content['thead']) ? self::thead($content['thead'], isset($data['thead']) ? $data['thead'] : []) : '';

        $tbody = isset($content['tbody']) ?  self::tbody($content['tbody'], isset($data['tbody']) ? $data['tbody'] : []) : '';

        $tfoot = isset($content['tfoot']) ?  self::tfoot($content['tfoot'], isset($data['tfoot']) ? $data['tfoot'] : []) : '';

        return '<table' . Parse::attr(isset($data['table']) ? $data['table'] : []) . '>' . $thead . $tbody . $tfoot . '</table>';
    }

    /**
     * Gerar tag <thead></thead>
     *
     * @param array $content th
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function thead($content = [], $data = [])
    {
        $tr = [];
        $td = [];

        foreach ($content as $key => $row) {

            if (is_array($row)) {
                $td_temp = [];

                foreach ($row as $value) {
                    $td_temp[] = self::th($value);
                }

                $tr[] = self::tr($td_temp, $data);
            }

            if (is_string($row)) {
                $td[$key] = self::th($row);
            }
        }

        if (!empty($td)) {
            $tr[] = self::tr($td, $data);
        }

        return '<thead>' . Parse::toString($tr, "\n") . '</thead>';
    }

    /**
     * Gerar tag <tbody></tbody>
     *
     * @param array $data tr
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function tbody($content = [], $data = [])
    {
        $tr = [];
        $td = [];

        foreach ($content as $key => $row) {

            if (is_array($row)) {
                $td_temp = [];

                foreach ($row as $value) {
                    $td_temp[] = self::td($value);
                }

                $tr[] = self::tr($td_temp, $data);
            }

            if (is_string($row)) {
                $td[$key] = self::td($row);
            }
        }

        if (!empty($td)) {
            $tr[] = self::tr($td, $data);
        }

        return '<tbody>' . Parse::toString($tr, "\n") . '</tbody>';
    }

    /**
     * Gerar tag <tfoot></tfoot>
     *
     * @param array $data tr
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function tfoot($content = [], $data = [])
    {
        $tr = [];
        $td = [];

        foreach ($content as $key => $row) {

            if (is_array($row)) {
                $td_temp = [];

                foreach ($row as $value) {
                    $td_temp[] = self::td($value);
                }

                $tr[] = self::tr($td_temp, $data);
            }

            if (is_string($row)) {
                $td[$key] = self::td($row);
            }
        }

        if (!empty($td)) {
            $tr[] = self::tr($td, $data);
        }

        return '<tfoot>' . Parse::toString($tr, "\n") . '</tfoot>';
    }


    /**
     * Gerar tag <tr></tr>
     *
     * @param array $td
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function tr($td = [], $data = [])
    {
        return '<tr' . Parse::attr($data) . '>' . Parse::toString($td, '') . '</tr>';
    }

    /**
     * Gerar tag <td></td>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function td($label, $data = [])
    {
        return '<td' . Parse::attr($data) . '>' . $label . '</td>';
    }

    /**
     * Gerar tag <th></th>
     *
     * @param string $label
     * @param array $data Attributes in format [key=>value]
     * @return string
     */
    public static function th($label, $data = [])
    {
        return '<th' . Parse::attr($data) . '>' . $label . '</th>';
    }
}
