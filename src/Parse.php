<?php

namespace FVCode\Html;

class Parse
{
    /**
     * Gerar os atributos da tag
     *
     * @param array $attributes Attributes in format [key=>value]
     * @return string|false
     */
    public static function attr($attributes)
    {
        if (empty($attributes)) {
            return false;
        }

        if (!is_array($attributes)) {
            return false;
        }

        foreach ($attributes as $key => $value) {
            $attr[] = !empty($key) ? "{$key}=\"{$value}\"" : $value;
        }

        return ' ' . implode(' ', $attr);
    }

    /**
     * Retorna o valor padrão se [$value] for vazio
     *
     * @param string $value
     * @param string $default
     * @return string
     */
    public static function value($value, $default)
    {
        if (empty($value)) {
            return $default;
        }

        return $value;
    }

    /**
     * Converte um array para string
     *
     * @param array $array
     * @param string $separator
     * @return string
     */
    public static function toString(array $array, $separator = '-')
    {
        return implode($separator, $array);
    }
}
