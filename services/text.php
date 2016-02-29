<?php

class Text
{
    public static function getDateFormatted($date)
    {
        return date('d/m/Y H:i', strtotime($date));
    }

    public static function sanitizeString($string)
    {
        $string =  filter_var($string, FILTER_SANITIZE_ENCODED);
        return filter_var($string, FILTER_SANITIZE_MAGIC_QUOTES);
    }
}