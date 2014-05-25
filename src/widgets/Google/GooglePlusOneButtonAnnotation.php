<?php
/**
 * GooglePlusOneButtonAnnotation class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Annotation to display next to the button.
 * 
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GooglePlusOneButtonAnnotation
{
    /**
     * Display the number of users who have +1'd the page in a graphic next to
     * the button.
     */
    const BUBBLE = 'bubble';

    /**
     * Display profile pictures of connected users who have +1'd the page and
     * a count of users who have +1'd the page.
     */
    const INLINE = 'inline';

    /**
     * Do not render additional annotations.
     */
    const NONE = 'none';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
