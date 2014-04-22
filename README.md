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

      `echo Catharsis\Web\Widgets::cackle()->comments()->account("20049"); // Render HTML code for Cackle Comments widget.`

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

`Catharsis\Web\Widgets::cackle()->comments()->account("20049")`

**2. Comments count hyperlink**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Note:_ Hyperlinks must have a specific CSS class for this to work, as described in Cackle documentation.

_Code:_

`Catharsis\Web\Widgets::cackle()->comments_count()->account("20049")`

**3. Latest comments**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::cackle()->latest_comments()->account("20049")`

`Catharsis\Web\Widgets::cackle()->latest_comments()->account("20049")->max(15)->avatar_size(32)->title_size(50)->text_size(255)`

**4. OAuth login**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::cackle()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::cackle()->login()->account("20049")`

**Disqus**

**1. Comments**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::disqus()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::disqus()->comments()->account("v-svete-snov")`

**Facebook**

**1. JS API initialization**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::facebook()->initialize()->app_id("1437917246425293")`

**2. Activity Feed**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->activity_feed()`

`Catharsis\Web\Widgets::facebook()->activity_feed()->domain("yandex.ru")`

`Catharsis\Web\Widgets::facebook()->activity_feed()->domain("yandex.ru")->header(false)->recommendations()->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)`

**3. Recommendations Feed**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->recommendations_feed()`

`Catharsis\Web\Widgets::facebook()->recommendations_feed()->domain("yandex.ru")`

`Catharsis\Web\Widgets::facebook()->recommendations_feed()->domain("yandex.ru")->header(false)->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)`

**4. Comments**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->comments()`

`Catharsis\Web\Widgets::facebook()->comments()->url("http://yandex.ru")`

`Catharsis\Web\Widgets::facebook()->comments()->url("http://yandex.ru")->order(Catharsis\Web\FacebookCommentsOrder::ReverseTime)->posts(1)->width("500")`

**5. Facepile**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->facepile()`

`Catharsis\Web\Widgets::facebook()->facepile()->url("http://yandex.ru")`

`Catharsis\Web\Widgets::facebook()->facepile()->url("http://yandex.ru")->max_rows(5)->size(Catharsis\Web\FacebookFacepileSize::Large)->height("300")`

**6. Follow Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->follow()->url("http://www.facebook.com/zuck")`

`Catharsis\Web\Widgets::facebook()->follow()->url("http://www.facebook.com/zuck")->kids()->faces()->layout(Catharsis\Web\FacebookButtonLayout::BoxCount)`

**7. Like Box**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->like_box()->url("https://www.facebook.com/pages/Clear-Words/515749945120070")`

`Catharsis\Web\Widgets::facebook()->like_box()->url("https://www.facebook.com/pages/Clear-Words/515749945120070")->header(false)->border(false)->faces(false)->stream()->width("500")`

**8. Like Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->like()->url("http://yandex.ru")`

`Catharsis\Web\Widgets::facebook()->like()->url("http://yandex.ru")`

`Catharsis\Web\Widgets::facebook()->like()->url("http://yandex.ru")->layout(Catharsis\Web\FacebookLikeButtonLayout::BoxCount)->faces()->verb(Catharsis\Web\FacebookLikeButtonVerb::Recommend)`

**9. Embedded post**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->post()->url("https://www.facebook.com/prokhor.ozornin/posts/10203109769053557")->width(640)`

**10. Send Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::facebook()->initialize()`

_Code:_

`Catharsis\Web\Widgets::facebook()->send()`

`Catharsis\Web\Widgets::facebook()->send()->url("http://yandex.ru")`

`Catharsis\Web\Widgets::facebook()->send()->url("http://yandex.ru")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->kids()`

**11. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::facebook()->video()->height("480")->width("640")->id("10203121281421359")`

**Google**

**1. Analytics**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::google()->analytics()->domain("v-svete-snov.ru")->account("UA-27123759-16")`

**2. +1 Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::google()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::google()->plus_one()`

`Catharsis\Web\Widgets::google()->plus_one()->url("http://yandex.ru")->alignment(Catharsis\Web\GooglePlusOneButtonAlignment::Right)->size(Catharsis\Web\GooglePlusOneButtonSize::Tall)->annotation(Catharsis\Web\GooglePlusOneButtonAnnotation::Inline)->recommendations(false)`

**Gravatar**

**1. Avatar image URL**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::gravatar()->image_url()->email("prokhor.ozornin@yandex.ru")`

`Catharsis\Web\Widgets::gravatar()->image_url()->email("prokhor.ozornin@yandex.ru")->extension("jpg")->force_default()->size(320)`

**2. User profile URL**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::gravatar()->profile_url()->email("prokhor.ozornin@yandex.ru")`

`Catharsis\Web\Widgets::gravatar()->profile_url()->email("prokhor.ozornin@yandex.ru")->xml()`

**IntenseDebate**

**1. Comments**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::intensedebate()->comments()->account("a639ec3507d53023d4f213666651b6c2")`

**2. Comments count hyperlink**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::intensedebate()->link()->account("a639ec3507d53023d4f213666651b6c2")`

**LiveJournal**

**1. Like Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::livejournal()->like()`

**2. Repost Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::livejournal()->repost()`

`Catharsis\Web\Widgets::livejournal()->repost()->title("title")->text("text")`

**Mail.ru**

**1. ICQ On-Site**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::mailru()->icq()`

`Catharsis\Web\Widgets::mailru()->icq()->account("12345678")->language("en")`

**2. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::mailru()->video()->id("i.v.sosnin62/3023/3027.html")->height("480")->width("640")`

**3. Like Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->like()`

`Catharsis\Web\Widgets::mailru()->like()->layout(Catharsis\Web\MailRuLikeButtonLayout::Second)->text(false)->counter_position(Catharsis\Web\MailRuLikeButtonCounterPosition::Upper)->size(30)`

**4. Faces**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->faces()->domain("mail.ru")->width(640)->height(480)`

`Catharsis\Web\Widgets::mailru()->faces()->domain("mail.ru")->width(640)->height(480)->font(Catharsis\Web\MailRuFacesFont::Tahoma)->show_title(false)->background_color("aaffaa")->hyperlink_color("ffaaff")->border_color("aaaaaa")`

**5. Groups**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::mailru()` JavaScript bundle (_body_ section)

_Code:_

`Catharsis\Web\Widgets::mailru()->groups()->account("mail_ru")->width(640)->height(480)`

`Catharsis\Web\Widgets::mailru()->groups()->account("mail_ru")->width(640)->height(480)->background_color("aaffaa")->button_color("ffaaff")->subscribers(false)->text_color("aaaadd")`

**Pinterest**

**1. Follow Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->follow_button()->account("pinterest")`

`Catharsis\Web\Widgets::pinterest()->follow_button()->account("pinterest")->label("Pinterest")`

**2. Embedded Pin**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->pin()->id("99360735500167749")`

**3. Board**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->board()->account("pinterest")->id("pin-pets")`

`Catharsis\Web\Widgets::pinterest()->board()->account("pinterest")->id("pin-pets")->sidebar()`

**4. Profile**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->profile()->account("pinterest")`

`Catharsis\Web\Widgets::pinterest()->profile()->account("pinterest")->sidebar()`

**5. Pin It Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::pinterest()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::pinterest()->pin_it_button()->url("http://www.flickr.com/photos/kentbrew/6851755809")->image("http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg")->description("Next stop: Pinterest")`

`Catharsis\Web\Widgets::pinterest()->pin_it_button()->url("http://www.flickr.com/photos/kentbrew/6851755809")->image("http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg")->description("Next stop: Pinterest")->counter_position(Catharsis\Web\PinterestPinItButtonPinCountPosition::None)->size(Catharsis\Web\PinterestPinItButtonSize::Large)->red()->shape(Catharsis\Web\PinterestPinItButtonShape::Rectangular)->language("ja")`

**RuTube**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::rutube()->video()->id("6785018")->height("480")->width("640")`

**SoundCloud**

**1. User's profile icon**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::soundcloud()->profile_icon()->account("prokhor-ozornin")`

`Catharsis\Web\Widgets::soundcloud()->profile_icon()->account("prokhor-ozornin")->black_white()->size(Catharsis\Web\SoundCloudProfileIconSize::Size64)`

**Surfingbird**

**1. Surf Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::surfingbird()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::surfingbird()->surf()`

`Catharsis\Web\Widgets::surfingbird()->surf()->color(Catharsis\Web\SurfingbirdSurfButtonColor::Blue)->counter()->label("Share")->url("http://yandex.ru")->layout(Catharsis\Web\SurfingbirdSurfButtonLayout::Common)`

**Tumblr**

**1. Follow Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::tumblr()->follow()->account("clear-words-en")`

`Catharsis\Web\Widgets::tumblr()->follow()->account("clear-words-en")->color_scheme(Catharsis\Web\TumblrFollowButtonColorScheme::Dark)->type(Catharsis\Web\TumblrFollowButtonType::Second)`

**2. Share Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::tumblr()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::tumblr()->share()`

`Catharsis\Web\Widgets::tumblr()->share()->color_scheme(Catharsis\Web\TumblrShareButtonColorScheme::Gray)->type(Catharsis\Web\TumblrShareButtonType::Third)`

**Twitter**

**1. Tweet Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::twitter()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::twitter()->tweet()`

`Catharsis\Web\Widgets::twitter()->tweet()->hash_tags(array("first", "second", "third"))->url("http://yandex.ru")->text("Let's share it !")->via("Prokhor")->opt_out()`

**2. Follow Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::twitter()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::twitter()->follow()->account("prokhor_ozornin")`

`Catharsis\Web\Widgets::twitter()->follow()->account("prokhor_ozornin")->opt_out(false)->count(false)->screen_name(false)`

**Vimeo**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::vimeo()->video()->id("55456906")->width("640")->height("480")`

**Vkontakte**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::vkontakte()->video()->id("167533148")->hash("7a0cdf6ef7a69e67")->user("5707198")->width("607")->height("360")->hd_quality()`

**2. JS API initialization**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::vkontakte()` JavaScript bundle (_head_ section)

_Code:_

`Catharsis\Web\Widgets::vkontakte()->initialize()->api_id("3816272")`

**3. Comments**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->comments()`

`Catharsis\Web\Widgets::vkontakte()->comments()->attach(Catharsis\Web\VkontakteCommentsAttach::All)->limit(Catharsis\Web\VkontakteCommentsLimit::Limit15)`

**4. Community**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->community()->account("44545550")`

`Catharsis\Web\Widgets::vkontakte()->community()->account("44545550")->mode(Catharsis\Web\VkontakteCommunityMode::News)->height(400)->width(600)`

**5. Like Button**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->like()`

**6. Subscription**

_Requirements:_ Call to `Catharsis\Web\Widgets::vkontakte()->initialize()`

_Code:_

`Catharsis\Web\Widgets::vkontakte()->subscribe()->account("5707198")`

`Catharsis\Web\Widgets::vkontakte()->subscribe()->account("5707198")->only_button()`

**Yandex**

**1. Metrika**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->analytics()->account("12066574")`

**2. Like Button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->like()`

`Catharsis\Web\Widgets::yandex()->like()->title("Yandex Main Page")->text("Share")->url("http://yandex.ru")->size(Catharsis\Web\YandexLikeButtonSize::Small)`

**3. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->video()->id("6ea0ugstkx.2528")->user("leonevskiy")->width("450")->height("253")`

**4. Yandex.Money payment button**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->money_button()->account("41001577953208")->sum(15.5)->description("Test Payment")`

`Catharsis\Web\Widgets::yandex()->money_button()->account("41001577953208")->sum(15.5)->description("Test Payment")->type(Catharsis\Web\YandexMoneyButtonType::Card)->text(Catharsis\Web\YandexMoneyButtonText::Buy)->size(Catharsis\Web\YandexMoneyButtonSize::Medium)->color(Catharsis\Web\YandexMoneyButtonColor::White)->payer_address()->payer_email()->payer_full_name()->payer_phone()`

**5. Yandex.Money donation form**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->money_donate_form()->account("41001577953208")->description("Test Donation")`

`Catharsis\Web\Widgets::yandex()->money_donate_form()->account("41001577953208")->description("Test Donation")->show_description()->sum(15.5)->cards()->project_name("Yandex")->project_site("http://yandex.ru")->text(Catharsis\Web\YandexMoneyDonateFormText::Give)->payer_phone()->payer_full_name()->payer_comment()->payer_email()`

**6. Yandex.Money payment form**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::yandex()->money_payment_form()->account("41001577953208")->description("Test Payment")`

`Catharsis\Web\Widgets::Yandex()->money_payment_form()->account("41001577953208")->description("Test Payment")->sum(15.5)->cards(false)->text(Catharsis\Web\YandexMoneyPaymentFormText::Transfer)->payer_comment()->payer_email()->payer_full_name()->payer_address()->payer_phone()->payer_purpose()`

**7. Share Button**

_Requirements:_ `Catharsis\Web\WebWidgetsScripts::yandex()` JavaScript bundle (_head_ or _body_ section)

_Code:_

`Catharsis\Web\Widgets::yandex()->share()`

`Catharsis\Web\Widgets::yandex()->share()->services("facebook")->language("en")`

**YouTube**

**1. Embedded video**

_Requirements:_ None

_Code:_

`Catharsis\Web\Widgets::youtube()->video()->id("eYJSlHiXegI")->width("100%")->height("480")`

**VideoJS**

**1. Media Player**

_Requirements:_ 

- `Catharsis\Web\WebWidgetsScripts::videojs()` JavaScript bundle (_head_ or _body_ section)

- `Catharsis\Web\WebWidgetsStyles::videojs()` CSS bundle (_head_ section)

_Code:_

`Catharsis\Web\Widgets::videojs()->player()->width("640")->height("480")->videos(array("http://vjs.zencdn.net/v/oceans.mp4" => Catharsis\Web\VideoContentTypes::MP4, "http://vjs.zencdn.net/v/oceans.webm" => Catharsis\Web\VideoContentTypes::WebM))->extra('<track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en" label="English"/>')`