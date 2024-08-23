<?php

if (! function_exists('make_slug')) {
    function make_slug($string) {
        $slug = preg_replace('/\s+/u', '-', trim($string));
        $slug = str_replace("/","",$slug);
        $slug = str_replace("?","",$slug);
        return $slug;
    }
}

if (! function_exists('convertUtf8')) {
    function convertUtf8( $value ) {
        return mb_detect_encoding($value, mb_detect_order(), true) === 'UTF-8' ? $value : mb_convert_encoding($value, 'UTF-8');
    }
}

if (!function_exists('replaceBaseUrl') ) {
    function replaceBaseUrl($content) {
        $content = str_replace("{base_url}", url('/'), $content);
        return $content;
    }
}