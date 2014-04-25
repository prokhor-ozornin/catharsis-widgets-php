<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest "Follow Me" button.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_follow_me_button
 */
class PinterestFollowButtonWidget extends HtmlWidget
{
    private $_account;
    private $_label = "Follow";

    /**
     * Pinterest user account.
     * @param string $account Account name.
     * @return \Catharsis\Web\PinterestFollowButtonWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Text label on the button.
     * @param string $label Button's label.
     * @return \Catharsis\Web\PinterestFollowButtonWidget Reference to the current widget.
     */
    public function label($label)
    {
        $this->_label = (string) $label;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account) || empty($this->_label)) {
            return "";
        }

        return self::htmlTag("a", array(
            "data-pin-do" => "buttonFollow",
            "href" => "http://www.pinterest.com/{$this->_account}"),
            $this->_label
        );
    }
}

?>
