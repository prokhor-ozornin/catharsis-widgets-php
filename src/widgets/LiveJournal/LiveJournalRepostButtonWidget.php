<?php
/**
 * LiveJournalRepostButtonWidget class.
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
 * Renders LiveJournal "Repost" button.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://www.livejournal.com/support/faq/313.html
 */
class LiveJournalRepostButtonWidget extends HtmlWidget
{
    private $_text;
    private $_title;

    /**
     * Text fragment to be reposted.
     * @param string $text Text fragment.
     * @return \Catharsis\Web\LiveJournalRepostButtonWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Text fragment to be reposted.
     * @return string Text fragment.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Label text to display on the button.
     * @param string $title Button's label text.
     * @return \Catharsis\Web\LiveJournalRepostButtonWidget
     *         Reference to the current widget.
     */
    public function title($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * Label text to display on the button.
     * @return string Button's label text.
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        return self::htmlTag(
            'lj-repost',
            array('button' => $this->getTitle()),
            $this->getText() !== null ? $this->getText() : ''
        );
    }
}

?>
