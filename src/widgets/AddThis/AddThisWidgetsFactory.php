<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of AddThis widgets.
 */
final class AddThisWidgetsFactory
{
  /**
   *
   * @return \Catharsis\Web\AddThisFollowButtonsWidget Initialized widget with default options.
   */
  public function follow_buttons()
  {
    return new AddThisFollowButtonsWidget();
  }

  /**
   *
   * @return \Catharsis\Web\AddThisShareButtonsWidget Initialized widget with default options.
   */
  public function share_buttons()
  {
    return new AddThisShareButtonsWidget();
  }

  /**
   *
   * @return \Catharsis\Web\AddThisSmartLayersWidget Initialized widget with default options.
   */
  public function smart_layers()
  {
    return new AddThisSmartLayersWidget();
  }

  /**
   *
   * @return \Catharsis\Web\AddThisTrendingContentWidget Initialized widget with default options.
   */
  public function trending_content()
  {
    return new AddThisTrendingContentWidget();
  }

  /**
   *
   * @return \Catharsis\Web\AddThisWelcomeBarWidget Initialized widget with default options.
   */
  public function welcome_bar()
  {
    return new AddThisWelcomeBarWidget();
  }
}