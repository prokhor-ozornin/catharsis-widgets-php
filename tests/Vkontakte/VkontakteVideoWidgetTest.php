<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteVideoWidget}
 */
final class VkontakteVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_hash", $widget);
        $this->assertAttributeEmpty("_hd", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEmpty("_user", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::hash(string $hash)} method.
     */
    public function test_hash_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_hash", $widget);
        $this->assertSame($widget, $widget->hash("hash"));
        $this->assertAttributeEquals("hash", "_hash", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::hdQuality(boolean $enabled)} method.
     */
    public function test_hd_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_hd", $widget);
        $this->assertSame($widget, $widget->hd());
        $this->assertAttributeEquals(true, "_hd", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::user(string $user)} method.
     */
    public function test_user_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_user", $widget);
        $this->assertSame($widget, $widget->user("user"));
        $this->assertAttributeEquals("user", "_user", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget->user("oid")->hash("hash")->width("width")->height("height"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->hash("hash")->width("width")->height("height"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->user("user")->width("width")->height("height"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->user("user")->hash("hash")->height("height"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->user("user")->hash("hash")->width("width"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://vk.com/video_ext.php?oid=user&amp;id=id&amp;hash=hash&amp;hd=0" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->user("user")->hash("hash")->width("width")->height("height"));

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://vk.com/video_ext.php?oid=user&amp;id=id&amp;hash=hash&amp;hd=1" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->user("user")->hash("hash")->width("width")->height("height")->hd());
    }
}

?>
