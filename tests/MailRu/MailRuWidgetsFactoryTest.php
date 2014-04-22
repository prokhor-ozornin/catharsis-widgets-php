<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuWidgetsFactory}
 */
final class MailRuWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsFactory::faces()} method.
   */
  public function test_faces_method()
  {
    $factory = new Catharsis\Web\MailRuWidgetsFactory();
    $this->assertNotSame($factory->faces(), $factory->faces());
    $this->assertInstanceOf("Catharsis\Web\MailRuFacesWidget", $factory->faces());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsFactory::groups()} method.
   */
  public function test_groups_method()
  {
    $factory = new Catharsis\Web\MailRuWidgetsFactory();
    $this->assertNotSame($factory->groups(), $factory->groups());
    $this->assertInstanceOf("Catharsis\Web\MailRuGroupsWidget", $factory->groups());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsFactory::icq()} method.
   */
  public function test_icq_method()
  {
    $factory = new Catharsis\Web\MailRuWidgetsFactory();
    $this->assertNotSame($factory->icq(), $factory->icq());
    $this->assertInstanceOf("Catharsis\Web\MailRuIcqWidget", $factory->icq());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsFactory::like()} method.
   */
  public function test_like_method()
  {
    $factory = new Catharsis\Web\MailRuWidgetsFactory();
    $this->assertNotSame($factory->like(), $factory->like());
    $this->assertInstanceOf("Catharsis\Web\MailRuLikeButtonWidget", $factory->like());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\MailRuWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\MailRuVideoWidget", $factory->video());
  }
}