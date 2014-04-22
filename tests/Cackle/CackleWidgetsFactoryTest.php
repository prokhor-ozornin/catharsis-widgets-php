<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleWidgetsFactory}
 */
final class CackleWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::comments_count()} method.
   */
  public function test_comments_count_method()
  {
    $factory = new Catharsis\Web\CackleWidgetsFactory();
    $this->assertNotSame($factory->comments_count(), $factory->comments_count());
    $this->assertInstanceOf("Catharsis\Web\CackleCommentsCountWidget", $factory->comments_count());
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::comments()} method.
   */
  public function test_comments_method()
  {
    $factory = new Catharsis\Web\CackleWidgetsFactory();
    $this->assertNotSame($factory->comments(), $factory->comments());
    $this->assertInstanceOf("Catharsis\Web\CackleCommentsWidget", $factory->comments());
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::latest_comments()} method.
   */
  public function test_latest_comments_method()
  {
    $factory = new Catharsis\Web\CackleWidgetsFactory();
    $this->assertNotSame($factory->latest_comments(), $factory->latest_comments());
    $this->assertInstanceOf("Catharsis\Web\CackleLatestCommentsWidget", $factory->latest_comments());
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::login()} method.
   */
  public function test_login_method()
  {
    $factory = new Catharsis\Web\CackleWidgetsFactory();
    $this->assertNotSame($factory->login(), $factory->login());
    $this->assertInstanceOf("Catharsis\Web\CackleLoginWidget", $factory->login());
  }
}