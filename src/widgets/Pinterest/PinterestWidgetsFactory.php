<?php
/**
 * PinterestWidgetsFactory class.
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
 * Factory for instantiation of Pinterest widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestWidgetsFactory
{
    /**
     * Creates new Pinterest Board widget.
     * @return \Catharsis\Web\PinterestBoardWidget
     *         Initialized widget with default options.
     */
    public function board()
    {
        return new PinterestBoardWidget();
    }

    /**
     * Creates new Pinterest "Follow Me" button widget.
     * @return \Catharsis\Web\PinterestFollowButtonWidget
     *         Initialized widget with default options.
     */
    public function followButton()
    {
        return new PinterestFollowButtonWidget();
    }

    /**
     * Creates new Pinterest "Pin It" button widget.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Initialized widget with default options.
     */
    public function pinItButton()
    {
        return new PinterestPinItButtonWidget();
    }

    /**
     * Creates new Pinterest embedded pin widget.
     * @return \Catharsis\Web\PinterestPinWidget
     *         Initialized widget with default options.
     */
    public function pin()
    {
        return new PinterestPinWidget();
    }

    /**
     * Creates new Pinterest Profile widget.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Initialized widget with default options.
     */
    public function profile()
    {
        return new PinterestProfileWidget();
    }
}

?>
