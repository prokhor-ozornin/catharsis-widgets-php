This library is a PHP 5 port of [Catharsis Social Web Widgets](https://github.com/prokhor-ozornin/Catharsis-Social-Web-Widgets) library.

It provides useful social media widgets to include on web pages of your site. 

Web widgets are implemented as PHP 5 objects that provide convenient fluent interface to work with. Factory classes for generation of web widgets are also provided for more convenience.

***

**Support**

This project needs your support for further developments ! Please consider donating.

- _Yandex.Money_ : 41001577953208

- _WebMoney (WMR)_ : R399275865890

[![Image](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=APHM8MU9N76V8 "Donate")

***

**Project directory structure**

_/src_ : Contains all required source code along with .js files.

_--/scripts_ : JavaScript .js files, required by some groups of widgets for rendering.

_--/widgets_ : Source code of widgets, divided by groups. Each subdirectory represents a set of related files for a group of widgets (Cackle, Facebook, YouTube, etc.).

_/tests_ : Contains PHPUnit tests, divided by groups. Each subdirectory represents a set of related files for a group of widgets.

***

**Installation and usage**

1. Copy _/src_ directory to any directory under document root of your web server. Rename it to whatever you desire. Let's call this new directory "widgets", for example.
2. If you want to move JavaScript files from former _/src/scripts_ directory to another (for example, a dedicated directory where all JavaScript files in your website reside), please set a new path to it in the `define('WEB_WIDGETS_SCRIPTS_PATH', '')` instruction, located in the _/src/Widgets.php_ file. Otherwise, leave this instruction commented.
3. You are ready to rock. Read on for detailed code usage examples.

***

**Code Example**

The simplest PHP file that makes use of the library may look like the following :

` <?php`

  `/**`

   `* Include widgets bootstrap file (Widgets.php).`

   `* Assuming that this currently executing script is located in the root of the library's /src directory.`

   `* Change the path depending on where you have copied contents of /src directory.`

   `*/`

  `include_once "./Widgets.php";`

 `?>`

`<html>`

  `<head>`

  `</head>`

  `<body>`

    `<?php`

      `Catharsis\Web\Widgets::cackle()->comments()->account("20049")->render(); // Render HTML code for Cackle Comments widget.`

      `echo Catharsis\Web\WebWidgetsScripts::cackle(); // Include required local Cackle javascript file from /scripts directory. Note : not all widgets require JavaScript files.`

    `?>`

  `</body>`

`</html>`

***

**API examples**

**Cackle**

**1. Comments**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::cackle()->comments()->account("20049")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dece_4254dc0d_orig)

**2. Comments count hyperlink**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Note:_ Hyperlinks must have a specific CSS class for this to work, as described in Cackle documentation.

_Code:_

`Catharsis\Web\Widgets::cackle()->commentsCount()->account("20049")->render()`

**3. Latest comments**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::cackle()->latestComments()->account("20049")->render()`

`Catharsis\Web\Widgets::cackle()->latestComments()->account("20049")->max(15)->avatarSize(32)->titleSize(50)->textSize(255)->render()`

**4. OAuth login**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::cackle()->login()->account("20049")->render()`

**Disqus**

**1. Comments**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::disqus()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::disqus()->comments()->account("v-svete-snov")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8decd_52c79adf_orig)

**Facebook**

**1. JS API initialization**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::facebook()->initialize()->appId("1437917246425293")->render()`

**2. Activity Feed**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->activityFeed()->render()`

`Catharsis\Web\Widgets::facebook()->activityFeed()->domain("yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->activityFeed()->domain("yandex.ru")->header(false)->recommendations(true)->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8decf_7b4f254a_orig)

**3. Recommendations Feed**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->recommendationsFeed()->render()`

`Catharsis\Web\Widgets::facebook()->recommendationsFeed()->domain("yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->recommendationsFeed()->domain("yandex.ru")->header(false)->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8ded5_c2a1df46_orig)

**4. Comments**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->comments()->render()`

`Catharsis\Web\Widgets::facebook()->comments()->url("http://yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->comments()->url("http://yandex.ru")->order(Catharsis\Web\FacebookCommentsOrder::REVERSE_TIME)->posts(1)->width("500")->render()`

![](http://img-fotki.yandex.ru/get/9822/80185211.1d/0_8ded0_864544eb_orig)

**5. Facepile**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->facepile()->render()`

`Catharsis\Web\Widgets::facebook()->facepile()->url("http://yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->facepile()->url("http://yandex.ru")->maxRows(5)->photoSize(Catharsis\Web\FacebookFacepileSize::LARGE)->height("300")->render()`

**6. Follow Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->followButton()->url("http://www.facebook.com/zuck")->render()`

`Catharsis\Web\Widgets::facebook()->followButton()->url("http://www.facebook.com/zuck")->kidsMode(true)->faces(true)->layout(Catharsis\Web\FacebookButtonLayout::BOX_COUNT)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8ded1_e4885846_orig)

**7. Like Box**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->likeBox()->url("https://www.facebook.com/pages/Clear-Words/515749945120070")->render()`

`Catharsis\Web\Widgets::facebook()->likeBox()->url("https://www.facebook.com/pages/Clear-Words/515749945120070")->header(false)->border(false)->faces(false)->stream(true)->width("500")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8ded2_e76aa4ec_orig)

**8. Like Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->likeButton()->url("http://yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->likeButton()->url("http://yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->likeButton()->url("http://yandex.ru")->layout(Catharsis\Web\FacebookLikeButtonLayout::BOX_COUNT)->faces(true)->verb(Catharsis\Web\FacebookLikeButtonVerb::RECOMMEND)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8ded3_38a5cbe9_orig)

**9. Embedded post**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->post()->url("https://www.facebook.com/prokhor.ozornin/posts/10203109769053557")->width(640)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8ded4_d52c9373_orig)

**10. Send Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->sendButton()->render()`

`Catharsis\Web\Widgets::facebook()->sendButton()->url("http://yandex.ru")->render()`

`Catharsis\Web\Widgets::facebook()->sendButton()->url("http://yandex.ru")->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)->kidsMode()->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8ded6_4da589ba_orig)

**11. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::facebook()->video()->height("480")->width("640")->id("10203121281421359")->render()`

![](http://img-fotki.yandex.ru/get/9491/80185211.1e/0_8df01_d86a4cce_orig)

**Google**

**1. Analytics**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::google()->analytics()->domain("v-svete-snov.ru")->account("UA-27123759-16")->render()`

![](http://img-fotki.yandex.ru/get/9822/80185211.1d/0_8ded7_a5f7153d_orig)

**2. +1 Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::google()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::google()->plusOneButton()->render()`

`Catharsis\Web\Widgets::google()->plusOneButton()->url("http://yandex.ru")->alignment(Catharsis\Web\GooglePlusOneButtonAlignment::RIGHT)->size(Catharsis\Web\GooglePlusOneButtonSize::TALL)->annotation(Catharsis\Web\GooglePlusOneButtonAnnotation::INLINE)->recommendations(false)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8ded8_426fde9_orig)

**Gravatar**

**1. Avatar image URL**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::gravatar()->imageUrl()->email("prokhor.ozornin@yandex.ru")->render()`

`Catharsis\Web\Widgets::gravatar()->imageUrl()->email("prokhor.ozornin@yandex.ru")->extension("jpg")->forceDefault(true)->size(320)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8ded9_af2ee96e_orig)

**2. User profile URL**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::gravatar()->profileUrl()->email("prokhor.ozornin@yandex.ru")->render()`

`Catharsis\Web\Widgets::gravatar()->profileUrl()->email("prokhor.ozornin@yandex.ru")->xml()->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8deda_4837ca1b_orig)

**IntenseDebate**

**1. Comments**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::intensedebate()->comments()->account("a639ec3507d53023d4f213666651b6c2")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dedb_af15dfff_orig)

**2. Comments count hyperlink**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::intensedebate()->link()->account("a639ec3507d53023d4f213666651b6c2")->render()`

**LiveJournal**

**1. Like Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::livejournal()->likeButton()->render()`

**2. Repost Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::livejournal()->repostButton()->render()`

`Catharsis\Web\Widgets::livejournal()->repostButton()->title("title")->text("text")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dedc_e64cb946_orig)

**Mail.ru**

**1. ICQ On-Site**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::mailru()->icq()->render()`

`Catharsis\Web\Widgets::mailru()->icq()->account("12345678")->language("en")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dedf_48c0f729_orig)

**2. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::mailru()->video()->id("i.v.sosnin62/3023/3027.html")->height("480")->width("640")->render()`

**3. Like Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->likeButton()->render()`

`Catharsis\Web\Widgets::mailru()->likeButton()->layout(Catharsis\Web\MailRuLikeButtonLayout::SECOND)->text(false)->counterPosition(Catharsis\Web\MailRuLikeButtonCounterPosition::UPPER)->size(30)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dee0_ab70e64f_orig)

**4. Faces**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->faces()->domain("mail.ru")->width(640)->height(480)->render()`

`Catharsis\Web\Widgets::mailru()->faces()->domain("mail.ru")->width(640)->height(480)->font(Catharsis\Web\MailRuFacesFont::TAHOMA)->title(false)->backgroundColor("aaffaa")->hyperlinkColor("ffaaff")->borderColor("aaaaaa")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dedd_1e4bea58_orig)

**5. Groups**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->groups()->account("mail_ru")->width(640)->height(480)->render()`

`Catharsis\Web\Widgets::mailru()->groups()->account("mail_ru")->width(640)->height(480)->backgroundColor("aaffaa")->buttonColor("ffaaff")->subscribers(false)->textColor("aaaadd")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8dede_dcf4ba5a_orig)

**Pinterest**

**1. Follow Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->followButton()->account("pinterest")->render()`

`Catharsis\Web\Widgets::pinterest()->followButton()->account("pinterest")->label("Pinterest")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8dee2_b4b37dac_orig)

**2. Embedded Pin**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->pin()->id("99360735500167749")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8dee3_be322660_orig)

**3. Board**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->board()->account("pinterest")->id("pin-pets")->render()`

`Catharsis\Web\Widgets::pinterest()->board()->account("pinterest")->id("pin-pets")->sidebar()->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dee1_71b1ce7d_orig)

**4. Profile**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->profile()->account("pinterest")->render()`

`Catharsis\Web\Widgets::pinterest()->profile()->account("pinterest")->sidebar()->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dee5_6a6520e5_orig)

**5. Pin It Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->pinItButton()->url("http://www.flickr.com/photos/kentbrew/6851755809")->image("http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg")->description("Next stop: Pinterest")->render()`

`Catharsis\Web\Widgets::pinterest()->pinItButton()->url("http://www.flickr.com/photos/kentbrew/6851755809")->image("http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg")->description("Next stop: Pinterest")->counter(Catharsis\Web\PinterestPinItButtonPinCountPosition::NONE)->size(Catharsis\Web\PinterestPinItButtonSize::LARGE)->red()->shape(Catharsis\Web\PinterestPinItButtonShape::RECTANGULAR)->language("ja")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8dee4_3a2af139_orig)

**RuTube**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::rutube()->video()->id("6785018")->height("480")->width("640")->render()`

![](http://img-fotki.yandex.ru/get/9822/80185211.1d/0_8dee6_43358fbd_orig)

**SoundCloud**

**1. User's profile icon**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::soundcloud()->profileIcon()->account("prokhor-ozornin")->render()`

`Catharsis\Web\Widgets::soundcloud()->profileIcon()->account("prokhor-ozornin")->blackWhite()->size(Catharsis\Web\SoundCloudProfileIconSize::SIZE_64)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8deed_d181e855_orig)

**Surfingbird**

**1. Surf Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::surfingbird()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::surfingbird()->surfButton()->render()`

`Catharsis\Web\Widgets::surfingbird()->surfButton()->color(Catharsis\Web\SurfingbirdSurfButtonColor::BLUE)->counter(true)->label("Share")->url("http://yandex.ru")->layout(Catharsis\Web\SurfingbirdSurfButtonLayout::COMMON)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8dee7_74e3c86c_orig)

**Tumblr**

**1. Follow Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::tumblr()->followButton()->account("clear-words-en")->render()`

`Catharsis\Web\Widgets::tumblr()->followButton()->account("clear-words-en")->colorScheme(Catharsis\Web\TumblrFollowButtonColorScheme::DARK)->type(Catharsis\Web\TumblrFollowButtonType::SECOND)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8deea_60c1333d_orig)

**2. Share Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::tumblr()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::tumblr()->shareButton()->render()`

`Catharsis\Web\Widgets::tumblr()->shareButton()->colorScheme(Catharsis\Web\TumblrShareButtonColorScheme::GRAY)->type(Catharsis\Web\TumblrShareButtonType::THIRD)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dee8_5fd0a553_orig)

**Twitter**

**1. Tweet Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::twitter()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::twitter()->tweetButton()->render()`

`Catharsis\Web\Widgets::twitter()->tweetButton()->hashTags(array("first", "second", "third"))->url("http://yandex.ru")->text("Let's share it !")->via("Prokhor")->suggestions(false)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8deeb_cd475dfc_orig)

**2. Follow Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::twitter()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::twitter()->followButton()->account("prokhor_ozornin")->render()`

`Catharsis\Web\Widgets::twitter()->followButton()->account("prokhor_ozornin")->suggestions(true)->counter(false)->screenName(false)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1d/0_8dee9_39fe8a8c_orig)

**Vimeo**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::vimeo()->video()->id("55456906")->width("640")->height("480")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1d/0_8deec_a89cc026_orig)

**Vkontakte**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::vkontakte()->video()->id("167533148")->hash("7a0cdf6ef7a69e67")->user("5707198")->width("607")->height("360")->hd(true)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1e/0_8def8_8c281838_orig)

**2. JS API initialization**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::vkontakte()` JavaScript bundle (_head_ section)

_Code:_

`Catharsis\Web\Widgets::vkontakte()->initialize()->apiId("3816272")->render()`

**3. OAuth Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->authButton()->standard('http://yandex.ru')->render()`

`Catharsis\Web\Widgets::vkontakte()->authButton()->dynamic('onAuth')->width(640)->render()`

![](http://img-fotki.yandex.ru/get/5204/80185211.1e/0_8ee77_efa1aeb_orig)

**4. Comments**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->comments()->render()`

`Catharsis\Web\Widgets::vkontakte()->comments()->attach(Catharsis\Web\VkontakteCommentsAttach::ALL)->limit(Catharsis\Web\VkontakteCommentsLimit::LIMIT_15)->autoPublish(true)->autoUpdate(true)->mini(true)->render()`

![](http://img-fotki.yandex.ru/get/9822/80185211.1d/0_8deef_1d93c587_orig)

**5. Community**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->community()->account("44545550")->render()`

`Catharsis\Web\Widgets::vkontakte()->community()->account("44545550")->mode(Catharsis\Web\VkontakteCommunityMode::NEWS)->height(400)->width(600)->backgroundColor("AABBCC")->textColor("FF0000")->buttonColor("00FF00")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1e/0_8def1_155d6ab8_orig)

**6. Like Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->likeButton()->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8def2_6a491b94_orig)

**7. Poll**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->poll()->id('6564504_c2a6ccb7df15aff473')->render()`

`Catharsis\Web\Widgets::vkontakte()->poll()->id('6564504_c2a6ccb7df15aff473')->width(640)->render()`

![](http://img-fotki.yandex.ru/get/5204/80185211.1e/0_8ee78_e69406c8_orig)

**8. Wall Post**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->post()->id(45616)->owner(1)->hash('Yss6aNhrrQhOL5FfXZeuga8yKA')->render()`

`Catharsis\Web\Widgets::vkontakte()->post()->id(45616)->owner(1)->hash('Yss6aNhrrQhOL5FfXZeuga8yKA')->width(640)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8def5_d36b01d0_orig)

**9. Recommendations Feed**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->recommendations()->render()`

`Catharsis\Web\Widgets::vkontakte()->recommendations()->limit(VkontakteRecommendationsLimit.Ten)->max(50)->period(VkontakteRecommendationsPeriod.Month)->sorting(VkontakteRecommendationsSorting.Likes)->verb(VkontakteRecommendationsVerb.Like)->target('_blank')->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8def6_9a22aa7c_orig)

**10. Subscription**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->subscription()->account("5707198")->render()`

`Catharsis\Web\Widgets::vkontakte()->subscription()->account("5707198")->onlyButton(true)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8def7_62688243_orig)

**Yandex**

**1. Metrika**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->analytics()->account("12066574")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8defa_a0bc72d8_orig)

**2. Like Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->likeButton()->render()`

`Catharsis\Web\Widgets::yandex()->likeButton()->title("Yandex Main Page")->text("Share")->url("http://yandex.ru")->size(Catharsis\Web\YandexLikeButtonSize::SMALL)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8def9_dcb28653_orig)

**3. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->video()->id("6ea0ugstkx.2528")->user("leonevskiy")->width("450")->height("253")->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1e/0_8deff_387a5ec2_orig)

**4. Yandex.Money payment button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->moneyButton()->account("41001577953208")->sum(15.5)->description("Test Payment")->render()`

`Catharsis\Web\Widgets::yandex()->moneyButton()->account("41001577953208")->sum(15.5)->description("Test Payment")->type(Catharsis\Web\YandexMoneyButtonType::CARD)->text(Catharsis\Web\YandexMoneyButtonText::BUY)->size(Catharsis\Web\YandexMoneyButtonSize::MEDIUM)->color(Catharsis\Web\YandexMoneyButtonColor::WHITE)->askPayerAddress(true)->askPayerEmail(true)->askPayerFullName(true)->askPayerPhone(true)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1e/0_8defb_508fd66c_orig)

**5. Yandex.Money donation form**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->moneyDonateForm()->account("41001577953208")->descriptionText("Test Donation")->render()`

`Catharsis\Web\Widgets::yandex()->moneyDonateForm()->account("41001577953208")->descriptionText("Test Donation")->description()->sum(15.5)->cards(true)->projectName("Yandex")->projectSite("http://yandex.ru")->text(Catharsis\Web\YandexMoneyDonateFormText::GIVE)->askPayerPhone(true)->askPayerFullName(true)->askPayerComment(true)->askPayerEmail(true)->render()`

![](http://img-fotki.yandex.ru/get/5203/80185211.1e/0_8defc_3a3f4bf0_orig)

**6. Yandex.Money payment form**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->money_payment_form()->account("41001577953208")->description("Test Payment")->render()`

`Catharsis\Web\Widgets::Yandex()->money_payment_form()->account("41001577953208")->description("Test Payment")->sum(15.5)->cards(false)->text(Catharsis\Web\YandexMoneyPaymentFormText::TRANSFER)->askPayerComment(true)->askPayerEmail(true)->askPayerFullName(true)->askPayerAddress(true)->askPayerPhone(true)->askPayerPurpose(true)->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8defd_154be7bd_orig)

**7. Share Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::yandex()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::yandex()->shareButton()->render()`

`Catharsis\Web\Widgets::yandex()->shareButton()->services("facebook")->language("en")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8defe_9ec5f03a_orig)

**YouTube**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::youtube()->video()->id("eYJSlHiXegI")->width("100%")->height("480")->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8df00_839c0d10_orig)

**VideoJS**

**1. Media Player**

_Requirements:_ 

- `Catharsis\Web\WebWidgetsScripts::videojs()` JavaScript bundle (_head_ or _body_ section)

- `Catharsis\Web\WebWidgetsStyles::videojs()` CSS bundle (_head_ section)

_Code:_

`Catharsis\Web\Widgets::videojs()->player()->width("640")->height("480")->videos(array("http://vjs.zencdn.net/v/oceans.mp4" => Catharsis\Web\VideoContentTypes::MP4, "http://vjs.zencdn.net/v/oceans.webm" => Catharsis\Web\VideoContentTypes::WebM))->extra('<track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en" label="English"/>')->render()`

![](http://img-fotki.yandex.ru/get/9489/80185211.1e/0_8deee_352bf71e_orig)