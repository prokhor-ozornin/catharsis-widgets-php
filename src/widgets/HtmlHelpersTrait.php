<?php
namespace Catharsis\Web;

/**
 * HTTP and HTML helper methods trait.
 */
trait HtmlHelpersTrait
{
    /**
     * Creates inline CSS <style> tag.
     * @param string $code Inline CSS code.
     * @return string CSS tag string.
     */
    public static function cssInline($code)
    {
        return self::htmlTag('style', array('type' =>'text/css'),
                (string) $code);
    }

    /**
     * Creates CSS <link> tag with external source.
     * @param string $url URL of external CSS file.
     * @return string CSS tag string.
     */
    public static function cssLink($url)
    {
        if (empty($url)) {
            return '';
        }

        return self::htmlTag('link', array(
            'href' => (string) $url,
            'rel' => 'stylesheet',
            'type' => 'text/css'
        ));
    }

    /**
     * Creates valid HTML tag string.
     * @param string $name Name of tag.
     * @param array $attributes Map of tag's attributes and their values.
     * @param string $body Inner body contents of tag (text or valid HTML).
     * @return string HTML tag string.
     */
    public static function htmlTag($tag, $attributes = array(), $body = '')
    {
        if (empty($tag)) {
            return '';
        }

        $attributes_pairs = array();
        foreach ((array) $attributes as $name => $value) {
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
            else if (!isset($value) || $value === '') {
                continue;
            }
            else {
                $value = htmlentities($value, ENT_HTML401 | ENT_QUOTES);
            }

            $name = htmlentities($name, ENT_HTML401 | ENT_QUOTES);
            $attributes_pairs[] = "{$name}=\"{$value}\"";
        }

        $attributes_string = empty($attributes_pairs) ? '' : ' '
                             .implode(' ', $attributes_pairs);

        return isset($body)
            ? "<{$tag}{$attributes_string}>{$body}</{$tag}>"
            : "<{$tag}{$attributes_string}/>";
    }

    /**
     * Creates inline JavaScript <script> tag.
     * @param string $code Inline JavaScript code.
     * @return string JavaScript tag string.
     */
    public static function javascriptInline($code)
    {
        return self::htmlTag('script', array('type' => 'text/javascript'), (string) $code);
    }

    /**
     * Creates JavaScript <script> tag with external source.
     * @param string $url URL of external JavaScript file.
     * @return string JavaScript tag string.
     */
    public static function javascriptLink($url)
    {
        if (empty($url)) {
            return '';
        }

        return self::htmlTag('script', array(
            'src' => (string) $url,
            'type' => 'text/javascript'
        ));
    }

    /**
     * Builds up URL's query part string from a set of values.
     * @param type $parameters Map of query parameters names and their values.
     * @return type URL query string.
     */
    public static function urlQuery($parameters)
    {
        $parameters_pairs = array();

        foreach ((array) $parameters as $name => $value) {
            $name = urlencode($name);
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
            else {
                $value = urlencode($value);
            }
            $parameters_pairs[] = "{$name}={$value}";
        }

        return implode('&', $parameters_pairs);
    }

    /**
     * Determines languages of user's HTTP request by inspecting HTTP request parameters and headers.
     * @return string Two letter ISO language code of HTTP request. If it cannot be determined, English ("en") is returned as a default.
     */
    public static function userLanguage()
    {
        if (!empty($_REQUEST['lang'])) {
            $language = $_REQUEST['lang'];
        }
        else if (!empty($_REQUEST['language'])) {
            $language = $_REQUEST['language'];
        }
        else if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $language = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
        }
        else {
            $language = 'en';
        }

        return $language;
    }
}

?>
