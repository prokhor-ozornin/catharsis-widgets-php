<?php
/**
 * PinterestFollowButtonWidget class.
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
 * Renders Pinterest "Follow Me" button.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://business.pinterest.com/widget-builder/#do_follow_me_button
 */
class PinterestFollowButtonWidget extends HtmlWidget
{
    private $_account;
    private $_label = "Follow";

    /**
     * Pinterest user account.
     * @param string $account Account name.
     * @return \Catharsis\Web\PinterestFollowButtonWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Pinterest user account.
     * @return string Account name.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Text label on the button.
     * @param string $label Button's label.
     * @return \Catharsis\Web\PinterestFollowButtonWidget
     *         Reference to the current widget.
     */
    public function label($label)
    {
        $this->_label = (string) $label;
        return $this;
    }

    /**
     * Text label on the button.
     * @return string Button's label.
     */
    public function getLabel()
    {
        return $this->_label;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount()) || empty($this->getLabel())) {
            return '';
        }

        return self::htmlTag(
            'a',
            array(
                'data-pin-do' => 'buttonFollow',
                'href' => "http://www.pinterest.com/{$this->getAccount()}"
            ),
            $this->getLabel()
        );
    }
}

?>
