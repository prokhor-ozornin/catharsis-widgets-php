<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Pinterest widgets.
 */
final class PinterestWidgetsFactory
{
  /**
   * Creates new Pinterest Board widget.
   * @return \Catharsis\Web\PinterestBoardWidget Initialized widget with default options.
   */
  public function board()
  {
    return new PinterestBoardWidget();
  }

  /**
   * Creates new Pinterest "Follow Me" button widget.
   * @return \Catharsis\Web\PinterestFollowButtonWidget Initialized widget with default options.
   */
  public function follow_button()
  {
    return new PinterestFollowButtonWidget();
  }

  /**
   * Creates new Pinterest "Pin It" button widget.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Initialized widget with default options.
   */
  public function pin_it_button()
  {
    return new PinterestPinItButtonWidget();
  }

  /**
   * Creates new Pinterest embedded pin widget.
   * @return \Catharsis\Web\PinterestPinWidget Initialized widget with default options.
   */
  public function pin()
  {
    return new PinterestPinWidget();
  }

  /**
   * Creates new Pinterest Profile widget.
   * @return \Catharsis\Web\PinterestProfileWidget Initialized widget with default options.
   */
  public function profile()
  {
    return new PinterestProfileWidget();
  }
}