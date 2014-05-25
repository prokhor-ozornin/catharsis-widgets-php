<?php
/**
 * YandexSharePanelLayout class.
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
 * Visual appearance/layout of Yandex "Share" panel.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexSharePanelLayout
{
    /**
     * Show social buttons.
     */
    const BUTTON = 'button';

    /**
     * Show social icons.
     */
    const ICON = 'icon';

    /**
     * Show weblinks.
     */
    const LINK = 'link';

    /**
     * Do not display.
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
