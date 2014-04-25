<?php
namespace Catharsis\Web;

/**
 * InlineImage widgets helpers trait.
 */
trait InlineImageWidgetsTrait
{
    /**
     * Creates new inline image widget.
     * @return \Catharsis\Web\InlineImageWidget Initialized widget with default options.
     */
    public static function inlineImage()
    {
        return new InlineImageWidget();
    }
}

?>
