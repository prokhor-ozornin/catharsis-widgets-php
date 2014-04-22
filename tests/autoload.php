<?php

final class TestConstants
{
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
    "YouTube");

  private function __construct()
  {
  }
}

spl_autoload_register(function ($class)
{
  $class = end(explode("\\", $class));
  $class_path = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."widgets".DIRECTORY_SEPARATOR.$class.".php";
  if (file_exists($class_path))
  {
    include_once $class_path;
  }
  else
  {
    foreach (TestConstants::$WidgetsCategories as $category)
    {
      $class_path = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."widgets".DIRECTORY_SEPARATOR.$category.DIRECTORY_SEPARATOR.$class.".php";
      if (strpos($class, $category) === 0 && file_exists($class_path))
      {
        include_once $class_path;
      }
    }
  }
});