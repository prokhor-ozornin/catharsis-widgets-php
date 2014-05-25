<?php
/**
 * IntenseDebateWidgetsFactory class.
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
 * Factory for instantiation of IntenseDebate widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class IntenseDebateWidgetsFactory
{
    /**
     * Creates new IntenseDebate comments widget.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget
     *         Initialized widget with default options.
     */
    public function comments()
    {
        return new IntenseDebateCommentsWidget();
    }

    /**
     * Creates new IntenseDebate link widget.
     * @return \Catharsis\Web\IntenseDebateLinkWidget
     *         Initialized widget with default options.
     */
    public function link()
    {
        return new IntenseDebateLinkWidget();
    }
}

?>
