<?php
namespace Catharsis\Web;

/**
 *
 */
class HtmlWidget
{
    use HtmlHelpersTrait;

    /**
     *
     */
    public function render()
    {
        echo $this;
    }
}

?>
