<?php
/**
 * VkontakteRecommendationsWidget class.
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
 * Renders VKontakte Recommendations widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Recommended
 */
class VkontakteRecommendationsWidget extends HtmlWidget
{
    private $_elementId;
    private $_limit;
    private $_max;
    private $_period;
    private $_sorting;
    private $_target;
    private $_verb;

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function elementId($id)
    {
        $this->_elementId = (string) $id;
        return $this;
    }

    /**
     * Identifier of HTML container for the widget.
     * @return string HTML element's identifier.
     */
    public function getElementId()
    {
        return $this->_elementId;
    }

    /**
     * Maximum number of pages to display initially.
     * Default is 5.
     * @param integer $limit Maximum number of pages.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function limit($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * Maximum number of pages to display initially.
     * Default is 5.
     * @return integer Maximum number of pages.
     */
    public function getLimit()
    {
        return $this->_limit;
    }

    /**
     * Maximum number of pages to display when "Show all recommendations" is being pressed.
     * Default is 4 * limit.
     * @param integer $max Maximum number of pages.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function max($max)
    {
        $this->_max = (int) $max;
        return $this;
    }

    /**
     * Maximum number of pages to display when "Show all recommendations" is being pressed.
     * Default is 4 * limit.
     * @return integer Maximum number of pages.
     */
    public function getMax()
    {
        return $this->_max;
    }

    /**
     * Report statistical period.
     * Default is "week".
     * @param string $period Statistical period.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function period($period)
    {
        $this->_period = (string) $period;
        return $this;
    }

    /**
     * Report statistical period.
     * Default is "week".
     * @return string Statistical period.
     */
    public function getPeriod()
    {
        return $this->_period;
    }

    /**
     * Recommended materials sorting mode.
     * Default is "friend_likes".
     * @param string $sorting Sorting mode.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function sorting($sorting)
    {
        $this->_sorting = (string) $sorting;
        return $this;
    }

    /**
     * Recommended materials sorting mode.
     * Default is "friend_likes".
     * @return string Sorting mode.
     */
    public function getSorting()
    {
        return $this->_sorting;
    }

    /**
     * Target attribute for recommendations HTML hyperlinks.
     * Default is "parent".
     * @param string $target HTML hyperlinks target value.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function target($target)
    {
        $this->_target = (string) $target;
        return $this;
    }

    /**
     * Target attribute for recommendations HTML hyperlinks.
     * Default is "parent".
     * @return string HTML hyperlinks target value.
     */
    public function getTarget()
    {
        return $this->_target;
    }

    /**
     * Numeric code of verb to use as a label.
     * Default is 0 ("like").
     * @param integer $verb Type of verb.
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Reference to the current widget.
     */
    public function verb($verb)
    {
        $this->_verb = (int) $verb;
        return $this;
    }

    /**
     * Numeric code of verb to use as a label.
     * Default is 0 ("like").
     * @return integer Type of verb.
     */
    public function getVerb()
    {
        return $this->_verb;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        $config = array();
        if (!empty($this->getLimit())) {
            $config['limit'] = $this->getLimit();
        }
        if (!empty($this->getMax())) {
            $config['max'] = $this->getMax();
        }
        if (!empty($this->getPeriod())) {
            $config['period'] = $this->getPeriod();
        }
        if ($this->getVerb() !== null) {
            $config['verb'] = $this->getVerb();
        }
        if (!empty($this->getSorting())) {
            $config['sort'] = $this->getSorting();
        }
        if (!empty($this->getTarget())) {
            $config['target'] = $this->getTarget();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? 'vk_recommendations' : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Recommended(\"${element_id}\", {$config_json});");
    }
}

?>
