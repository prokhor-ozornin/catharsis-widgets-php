<?php
namespace Catharsis\Web;

//define('WEB_WIDGETS_SCRIPTS_PATH', '');

/**
 * Global Catharsis Web Widgets constants
 */
final class Constants
{
  /**
   * @var array Names of widgets categories
   */
  public static $WidgetsCategories = array(
    "AddThis",
    "Cackle",
    "Disqus",
    "Facebook",
    "Google",
    "Gravatar",
    "InlineImage",
    "IntenseDebate",
    "LiveJournal",
    "MailRu",
    "Pinterest",
    "RuTube",
    "SoundCloud",
    "Surfingbird",
    "Tumblr",
    "Twitter",
    "VideoJS",
    "Vimeo",
    "Vkontakte",
    "Yandex",
    "YouTube"
  );

  private function __construct()
  {
  }
}

spl_autoload_register(function ($class)
{
  $class = end(explode("\\", $class));
  $class_path = __DIR__.DIRECTORY_SEPARATOR.$class.".php";
  if (file_exists($class_path))
  {
    include_once $class_path;
  }
  else
  {
    foreach (Constants::$WidgetsCategories as $category)
    {
      $class_path = __DIR__.DIRECTORY_SEPARATOR.$category.DIRECTORY_SEPARATOR.$class.".php";
      if (strpos($class, $category) === 0 && file_exists($class_path))
      {
        include_once $class_path;
      }
    }
  }
});

/**
 * Web Widgets manager
 */
final class Widgets
{
  use
  CackleWidgetsTrait,
  DisqusWidgetsTrait,
  FacebookWidgetsTrait,
  GoogleWidgetsTrait,
  GravatarWidgetsTrait,
  InlineImageWidgetsTrait,
  IntenseDebateWidgetsTrait,
  LiveJournalWidgetsTrait,
  MailRuWidgetsTrait,
  PinterestWidgetsTrait,
  RuTubeWidgetsTrait,
  SoundCloudWidgetsTrait,
  SurfingbirdWidgetsTrait,
  TumblrWidgetsTrait,
  TwitterWidgetsTrait,
  VideoJSWidgetsTrait,
  VimeoWidgetsTrait,
  VkontakteWidgetsTrait,
  YandexWidgetsTrait,
  YouTubeWidgetsTrait;

  /**
   * Returns virtual path to widgets "scripts" directory, based on the value of $_SERVER["DOCUMENT_ROOT"] global variable.
   * @return type
   */
  public static function scripts_path()
  {
    return defined('WEB_WIDGETS_SCRIPTS_PATH') ? WEB_WIDGETS_SCRIPTS_PATH : substr(__DIR__, strlen(__DIR__))."/../scripts";
  }

  private function __construct()
  {
  }
}