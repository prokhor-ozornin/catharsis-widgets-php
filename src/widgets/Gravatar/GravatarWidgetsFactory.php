<?php
/**
 * GravatarWidgetsFactory class.
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
 * Factory for instantiation of Gravatar widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarWidgetsFactory
{
    /**
     * Creates new Gravatar's avatar URL widget.
     * @return \Catharsis\Web\GravatarImageUrlWidget
     *         Initialized widget with default options.
     */
    public function imageUrl()
    {
        return new GravatarImageUrlWidget();
    }

    /**
     * Creates new Gravatar's user profile URL widget.
     * @return \Catharsis\Web\GravatarProfileUrlWidget
     *         Initialized widget with default options.
     */
    public function profileUrl()
    {
        return new GravatarProfileUrlWidget();
    }
}

?>
