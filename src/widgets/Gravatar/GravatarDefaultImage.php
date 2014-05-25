<?php
/**
 * GravatarDefaultImage class.
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
 * Type of default image for Gravatar's avatar.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarDefaultImage
{
    /**
     * Do not load any image if none is associated with the email hash,
     * instead return an HTTP 404 (File Not Found) response.
     */
    const NOT_FOUND = '404';

    /**
     * A simple, cartoon-style silhouetted outline of a person
     * (does not vary by email hash).
     */
    const MYSTERY_MAN = 'mm';

    /**
     * A geometric pattern based on an email hash.
     */
    const IDENT_ICON = 'identicon';

    /**
     * A generated 'monster' with different colors, faces, etc.
     */
    const MONSTER_ID = 'monsterid';

    /**
     * Generated faces with differing features and backgrounds.
     */
    const WAVATAR = 'wavatar';

    /**
     * Awesome generated, 8-bit arcade-style pixelated faces.
     */
    const RETRO = 'retro';

    /**
     * A transparent PNG image (border added to HTML below for
     * demonstration purposes).
     */
    const BLANK = 'blank';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
