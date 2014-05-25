<?php
/**
 * FacebookCommentsOrder class.
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
 * Order of comments for Facebook Comments widget.
 * 
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookCommentsOrder
{
    /**
     * Social relevance ordering.
     */
    const SOCIAL = 'social';

    /**
     * Opposite order in which comments were posted.
     */
    const REVERSE_TIME = 'reverse_time';

    /**
     * Order in which comments were posted.
     */
    const TIME = 'time';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
