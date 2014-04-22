<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Cackle widgets.
 */
final class CackleWidgetsFactory
{
  /**
   * Creates new Cackle comments widget.
   * @return \Catharsis\Web\CackleCommentsWidget Initialized widget with default options.
   */
  public function comments()
  {
    return new CackleCommentsWidget();
  }

  /**
   * Creates new Cackle comments count widget.
   * @return \Catharsis\Web\CackleCommentsCountWidget Initialized widget with default options.
   */
  public function comments_count()
  {
    return new CackleCommentsCountWidget();
  }

  /**
   * Creates new Cackle latest comments widget.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Initialized widget with default options.
   */
  public function latest_comments()
  {
    return new CackleLatestCommentsWidget();
  }

  /**
   * Creates new Cackle OAuth login widget.
   * @return \Catharsis\Web\CackleLoginWidget Initialized widget with default options.
   */
  public function login()
  {
    return new CackleLoginWidget();
  }
}