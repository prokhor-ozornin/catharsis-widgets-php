<?php
/**
 * LiveJournalWidgetsFactory class.
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
 * Factory for instantiation of LiveJournal widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class LiveJournalWidgetsFactory
{
    /**
     * Creates new LiveJournal "Like" button widget.
     * @return \Catharsis\Web\LiveJournalLikeButtonWidget
     *         Initialized widget with default options.
     */
    public function likeButton()
    {
        return new LiveJournalLikeButtonWidget();
    }

    /**
     * Creates new LiveJournal "Repost" button widget.
     * @return \Catharsis\Web\LiveJournalRepostButtonWidget
     *         Initialized widget with default options.
     */
    public function repostButton()
    {
        return new LiveJournalRepostButtonWidget();
    }
}

?>
