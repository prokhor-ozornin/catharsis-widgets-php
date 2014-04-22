<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of MailRu widgets.
 */
final class MailRuWidgetsFactory
{
  /**
   * Creates new Mail.ru Faces (People On Site) widget.
   * @return \Catharsis\Web\MailRuFacesWidget Initialized widget with default options.
   */
  public function faces()
  {
    return new MailRuFacesWidget();
  }

  /**
   * Creates new Mail.ru Group (People In Group) widget.
   * @return \Catharsis\Web\MailRuGroupsWidget Initialized widget with default options.
   */
  public function groups()
  {
    return new MailRuGroupsWidget();
  }

  /**
   * Creates new Mail.ru ICQ On-Site widget.
   * @return \Catharsis\Web\MailRuIcqWidget Initialized widget with default options.
   */
  public function icq()
  {
    return new MailRuIcqWidget();
  }

  /**
   * Creates new Mail.ru "Like" button widget.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Initialized widget with default options.
   */
  public function like()
  {
    return new MailRuLikeButtonWidget();
  }

  /**
   * Creates new Mail.ru embedded video widget.
   * @return \Catharsis\Web\MailRuVideoWidget Initialized widget with default options.
   */
  public function video()
  {
    return new MailRuVideoWidget();
  }
}