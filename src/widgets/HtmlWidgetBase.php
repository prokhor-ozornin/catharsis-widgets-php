<?php
namespace Catharsis\Web;

/**
 *
 */
class HtmlWidgetBase
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