<?php
/**
 * VkontakteCommentsAttach class.
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
 * Type of allowed Vkontakte "Comments" widget media attachments.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteCommentsAttach
{
    /**
     * All media types.
     */
    const ALL = '*';

    /**
     * Grafitti media type.
     */
    const GRAFITTI = 'graffiti';

    /**
     * Photo/image media type.
     */
    const PHOTO = 'photo';

    /**
     * Video media type.
     */
    const VIDEO = 'video';

    /**
     * Audio media type.
     */
    const AUDIO = 'audio';

    /**
     * Website hyperlink media type.
     */
    const LINK = 'link';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
