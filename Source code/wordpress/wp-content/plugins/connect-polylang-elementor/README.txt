=== Polylang Connect for Elementor - Language Switcher & Template Tweaks ===
Contributors: daveshine, p4fbradjohnson, deckerweb, wpautobahn, pacotole, creapuntome
Donate link: https://www.paypal.me/deckerweb
Tags: elementor, polylang, multilingual, language switcher, languages, templates, widget, finder, dynamic tags, deckerweb
Requires at least: 4.7
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 1.0.6
License: GPL-2.0-or-later
License URI: https://opensource.org/licenses/GPL-2.0

Connect Polylang with Elementor - show correct Templates, plus Elementor language switcher widget.

== Description ==

Connect the Polylang multilingual plugin with Elementor Page Builder: This plugin will make Elementor and Polylang **show the correct language templates**, especially with Elementor Pro Theme Builder. Plus: native **Polylang Language Switcher Elementor widget**, new Dynamic Tags, and Polylang links added to the **Elementor Finder** feature.

= ⚡ Try the new Version 2.0 ⚡ =
If you are starting with a new project we recommend using the new version 2.0 (it's in beta phase but with it you will not lose the changes you make when the final version is published).

[Download v2.0 beta](https://github.com/creame/connect-polylang-elementor/releases/download/v2.0.0-beta.1/connect-polylang-elementor-2.0.0-beta.1.zip) [(more info)](https://wordpress.org/support/topic/try-new-version-2-0/)


https://www.youtube.com/watch?v=tMmJ6sdMdxw

= What the Plugin Does =
* **Shows the correct Template** (for different languages): Polylang Connect for Elementor allows Polylang to show the correct Elementor template to be displayed on the front end. Before this plugin, Elementor did not show the correct language (translated) template.
* Beyond enabling the Elementor post type in Polylang settings, plus assigning every post/page/template to a language, no further settings are needed for these template tweaks. It just works out of the box. All the heavy lifting happens under the hood.
* **Usage Example:**
  * Make a header template in Elementor, set display conditions in Elementor panel, assign this to one language (English for example)
  * Make a second header template in Elementor, set NO display conditions for this one (by assigning 2 of the same display conditions, you can create a conflict in Elementor), but assign to another Polylang language (Portuguese for example), meaning to link those languages/templates in Polylang.
  * Result: when viewing in frontend the proper English content appears with the English header template, translated content in Portuguese appears with the Portuguese header template.
  * Go on: The principle is always the same, now add German language, Spanish and so on ;-)
  * [See **live demo** on co-author's own website](https://mariselaveludo.fashion/) // [Screenshot gallery](https://www.dropbox.com/sh/3i9tuh76etmhl1a/AADm_4L_aesp8Q9ss5NXuSiMa?dl=0)

= Plus: Even More Features =
* **Polylang Language Switcher Widget**: A native Elementor Widget to easily build a nice language switcher menu and have **more styling options** for non-coders at hand
* **Elementor Finder integration**: Adds Polylang languages, admin settings links, plus support resources as quick jump links to the Elementor Finder feature (Elementor v2.3.0+) - so you can navigate more quickly from whereever you are
* **Dynamic Tags** in Elementor Pro: Polylang Language Names (all registered/active) / Current Language Name / Current Language Code / Current Language Flag (image) / Current Language URL

= Further Plugin Info =
* More features might be added in the future.
* Community collaboration between David Decker and Brad Johnson, and more code coming from the Elementor/ Polylang community
* Plugin website: [https://polyglotwp.com](https://polyglotwp.com "PolyGlotWP.com - Multilingual WordPress Websites with Polylang and Elementor") - please sign up for our newsletter

= Where to Get Support? =
* [**Polylang User Community Group at Facebook**](https://www.facebook.com/groups/polylang.users/) - highly recommended for all users of this plugin!
* We monitor [the plugin's support forum](https://wordpress.org/support/plugin/connect-polylang-elementor) here on WordPress.org as well - but our preferred support channel is the FB community group
* **What is covered by our support?** - All regarding THIS plugin ("Polyang Connect for Elementor"), plus the relation to *Polylang*, *Elementor* and *Elementor Pro* of course.
* **What is NOT covered by support?** - Anything general regarding multilingual topics and WordPress. Explicitely we **DO NOT** offer any "WPML", "WPBakery" or "Visual Composer" support, and also not for your theme etc.!!!

= Translations =
* English (default, `en_US`) - always included
* German (`de_DE`) - always included
* German formal (`de_DE_formal`) - always included
* `.pot` file (`connect-polylang-elementor.pot`) for translators is also always included :)
* Easy plugin translation platform with GlotPress tool: [Translate "Polylang Connect for Elementor"...](https://translate.wordpress.org/projects/wp-plugins/connect-polylang-elementor)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Join our [**Facebook User Community Support Group**](https://www.facebook.com/groups/deckerweb.wordpress.plugins/)


== Installation ==

= Minimum Requirements =

* WordPress version 4.7 or higher
* [Elementor](https://wordpress.org/plugins/elementor/) and [Polylang](https://wordpress.org/plugins/polylang/) plugins - free versions from WordPress.org Plugin Directory
* **Optional:** *Elementor Pro* which is needed for Theme Building possibilities (Header templates etc.). This is a paid premium product by Elementor LTD, [available via elementor.com](https://toolbarextras.com/go/elementor-pro/)
* PHP version 5.6 or higher
* MySQL version 5.0 or higher

= We Recommend Your Host Supports at least: =

* PHP version 7.3 or higher
* MySQL version 5.6 or higher / or MariaDB 10 or higher

= Installation =

1. Install using the WordPress built-in Plugin installer (via **Plugins > Add New** - search for `connect polylang elementor`), or extract the ZIP file and drop the contents in the `wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to **Polylang > Settings > Custom post types and Taxonomies**, enable the "My Templates" post type (Elementor)
4. Assign languages to your pages/ posts/ Elementor templates
5. For Elementor templates: set display conditions in Elementor for one template only (your main language is recommended) - templates in the other languages will then get loaded via this plugin magically! :)
6. Additionally use the native Elementor Widget: Polylang Switcher


== Frequently Asked Questions ==

= Where to get support? =
At best in our [**Polylang User Community Group at Facebook**](https://www.facebook.com/groups/polylang.users/) - highly recommended for all users of this plugin!

Additionally, we also monitor [the plugin's support forum](https://wordpress.org/support/plugin/connect-polylang-elementor) here on WordPress.org as well - but our preferred support channel is the FB community group.

* **What is covered by our support?** - All things regarding THIS plugin ("Polyang Connect for Elementor"), plus the relation to *Polylang*, *Elementor* and *Elementor Pro* of course.
* **What is NOT covered by support?** - Anything general regarding multilingual topics and WordPress. Explicitely we **DO NOT** offer any "WPML", "WPBakery" or "Visual Composer" support, and also not for your theme etc.!!!


= Is there a live demo? =
Yes, there is.

[**See live demo on co-author's own website**](https://mariselaveludo.fashion/)

[Plus: *bigger* versions of the above screenshots are in this external gallery ;-)](https://www.dropbox.com/sh/3i9tuh76etmhl1a/AADm_4L_aesp8Q9ss5NXuSiMa?dl=0)


= Recommended Workflow? =

1. Setup Polylang at first, add at least TWO languages, one of them make your default language (in Polylang)
2. Add content to your default Polylang language - if Polylang asks you to apply existing content to it, you should most likely click "ok" and proceed - it works really fine :)
3. After that setup an Elementor Theme Builder template - asign it to your Polylang default language, apply conditions in Elementor
4. Next, setup a translation template for the template of 3.) -- asign your second Polylang language, DO NOT apply conditions in Elementor


= Recommended Polylang settings? =

If you have issues with proper display of your translated templates, pages, content it is recommended to check your settings:

In Polylang Settings at `Languages > Settings > URL Modificatons` set to the following option: "The language is set from the directory name in pretty permalinks" ([see screenshot](https://ps.w.org/connect-polylang-elementor/assets/screenshot-10.png))

And in the case, all is working well with your current settings then please do not touch them. The above recommendation can be necessary for some users/ installs but not necessarily for all.


= Will this work with Elementor Popup Builder? =
It most likely will work totally fine if you follow our recommended workflow (see above). If not, please ask in [our FB user group](https://www.facebook.com/groups/polylang.users/).


= Correct Elementor template does not show up? =
Every page/ post/ template must be assigned a language for this to work. This is standard Polylang procedure but it should be noted in case "it doesnt work".

Also, for Elementor Templates, the post type must be enabled for Polylang support: Go to **Polylang > Settings > Custom post types and Taxonomies**, enable the "My Templates" post type (Elementor).


= Where is the Elementor Widget to be found? =
It's in the widget category "General Elements". Plus, if Elementor Pro is active and you're editing a template, the widget additionally appears in the "Site" widget category.

*Always via search:* When searching for widgets type "polylang" or "languages" and it will show up immediately! ;-)


= Where is the plugin's settings page? =
This plugin has NO settings page, as it does not need one. All it does works just under the hood. Activate the plugin. Done.

(If there will be settings needed in the future, we might add options in later plugin versions.)


= Is Elementor Pro required? =
Technically, Elementor Pro is not required - but highly recommended, though.

Elementor Pro is required for these features of the plugin:

* Translating Elementor Theme Builder Templates the version is required, otherwise this will not work.
* Dynamic Tags, additionally added by the plugin

For the other features of the plugin the regular free version of Elementor is sufficient - so the native Elementor language switcher widget will work also that way already ;-)


= Is Polylang Pro supported? =
Yes, it is! :)
All features of "Polylang Connect for Elementor" work with both, *Polylang* (free) AND *Polylang Pro* (Premium).


= Are custom flags supported? =
In general, [custom flags](https://polylang.pro/doc/can-i-use-my-own-flags-for-the-language-switcher/) are supported in the Polylang Switcher Elementor widget and in the Dynamic Tag (Current Language Flag).
However, the default flags in Polylang are sized `16px` wide and `11px` high, this automatically applies to custom flags - as it is fully handled internally by Polylang.

To use a different size for custom flags we are trying to find ways to implement this for Elementor in future versions of this plugin.


= Typography and uppercase settings? =
In the Polylang Switcher Elementor widget there are typography settings available for the Switcher menu items. These settings are CSS based of course, and applied "globally" to the various states they are for: normal, hover, active (current language). The available toggles for uppercase are done code-wise and therefore have a lower priority - this means the CSS always takes over, if wanted. That way you are most flexible with quick settings (toggles) but have all styling options at hand if needed.


= Is Elementor plugin needed? =
Yes, it is. Otherwise this connect plugin won't do anything. Elementor is available for free on WordPress.org.

The Elementor Pro Add-On plugin is needed for the Theme Builder capabilities (for example Header templates), plus the feature of "Dynamic Tags". So it is highly recommended. But if it is not installed/ activated, the depending features from the connect plugin won't even load. So it is all optional.

The language switcher widget only needs Elementor base plugin to work ;-)


= Other recommended plugins for multilingual websites? =
There are quite a few:

* [**Country Flags for Elementor**](https://wordpress.org/plugins/country-flags-for-elementor/) - Native Elementor widget
* [**Polylang Pro** (Premium)](https://polylang.pro/downloads/polylang-pro/) - The official premium version with more features, plus premium support
* [**Polylang for WooCommerce** (Premium)](https://polylang.pro/downloads/polylang-for-woocommerce/) - Makes WooCommerce multilingual - official Polylang Add-On
* [**Lingotek Translation**](https://wordpress.org/plugins/lingotek-translation/) - Native Polylang integration - Lingotek brings convenient cloud-based localization and translation for WordPress
* [**Integrate Gravity Forms + Polylang**](https://wordpress.org/plugins/integrate-gravity-forms-polylang/) - Add form titles, descriptions, field labels, etc. to Polylang string translations
* [**WPML to Polylang**](https://wordpress.org/plugins/wpml-to-polylang/) - From the Polylang developer himself


= More info on Translations? =

* English - default, always included
* German (de_DE): Deutsch - immer dabei! :-)
* For custom and update-safe language files please upload them to `/wp-content/languages/connect-polylang-elementor/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that as well, just use a language file like `connect-polylang-elementor-en_US.mo/.po` to achieve that (for creating one see the following tools).

**Easy WordPress.org plugin translation platform with GlotPress platform:** [**Translate "Polylang Connect for Elementor"...**](https://translate.wordpress.org/projects/wp-plugins/connect-polylang-elementor)

*Note:* All my plugins are internationalized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating and validating I recommend the awesome ["Poedit Editor"](https://www.poedit.net/), which works fine on Windows, macOS and Linux.


== Screenshots ==

1. Ensure that my templates is ticked in Polylang post types and Taxonomies. Although the plugin will automatically tick this for you 😊

2. Header Template in Elementor showing that they have both been translated

3. Polylang Widget in Elementor under Site

4. Polylang Widget options in Elementor

5. Polylang Widget Styling Options in Elementor

6. Set your primary language display conditions for your primary language

7. DO NOT SET A DISPLAY CONDITION FOR ANY OTHER LANGUAGE ---> Polylang will do this for you. Save without conditions

8. (1/2) Working language header templates on the front end. Styled by the widget. Previously this was not an option in Polylang. (other than editing the menu options) Polylang users could not display language codes but now they can 😉. Thanks to Polylang Connect for Elementor.

9. (2/2) Working language header templates on the front end. Styled by the widget. Previously this was not an option in Polylang. (other than editing the menu options) Polylang users could not display language codes but now they can 😉. Thanks to Polylang Connect for Elementor.

10. Recommended Polylang URL settings if you have issues with translated templates/ templates


== Changelog ==

= 1.0.6 - 2021-06-05 =
* Fixed PHP notice undefined 'post_type'.

= 1.0.5 - 2021-05-17 =
* Fixed Elementor editor don't load with Global Widgets in secondary language.

= 1.0.4 - 2021-04-30 =
* Translated templates with conditions for categories/tags also works with translated categories/tags.
* Fixed PHP notice on activation

= 1.0.3 - 2021-04-27 =
* Ensure Theme Builder conditions for all languages (prev. version only saves main language conditions)
* When a template is a translation override with empty conditions

= 1.0.2 - 2021-04-26 =
* Fix Elementor template display conditions reset
* Fix wp-cli error languages undefined
* Fix Elementor deprecations
* Added Elementor Landing Pages CPT translatable
* Added JetEngine Listing CPT translatable
* WordPress PHP Coding Standards

= 1.0.1 - 2020-06-17 =
* Stability update for edge cases were experiencing fatal errors
* Thanks to sebastienserre for correct fatal unknow pll_the_languages();

= 1.0.0 - 2018-11-28 =
* Official public release on WordPress.org

= 0.9.1 - 2018-11-27 =
* *First Release Candidate (RC) version*
* New: Automatic enabling of Elementor My Templates post type for Polylang support
* Tweak: Code improvements throughout
* Tweak: Inline documentation and PHP doc improvements

= 0.9.0 - 2018-11-26 =
* *Second beta version*
* New: More settings for Polylang Switcher widget
* Tweak: Improved Dynamic Tags additions
* Tweak: Improved Elementor Finder integration

= 0.8.0 - 2018-11-25 =
* *First beta version*
* New: Added native Elementor Widget - Polylang Language Switcher
* New: Added Dynamic Tags for Polylang (requires Elementor Pro)

= 0.7.0 - 2018-11-24 =
* *Second alpha version*
* New: Added Elementor Finder integration for Polylang plugin links and resources
* New: Make plugin translateable - added German translations
* New: Added Readme file, plus `composer.json`
* New: First public alpha release on GitHub

= 0.5.0 - 2018-10-30 =
* *Plugin idea by Brad*
* *First alpha version by David*
* New: Template tweaks work in form of plugin code - coding standards improvements


== Upgrade Notice ==

= 1.0.2 =
Fix Elementor template display conditions reset and other minor fixes.

= 1.0.1 =
A fix for edge users were in certain cases Elementor Pro would not load.

= 1.0.0 =
Just released into the wild.


== Donate ==
Enjoy using *Polylang Connect for Elementor*? [**Please consider making a donation**](https://www.paypal.me/deckerweb) to support the project's continued development.


== Credits ==
Credit where credit is due. The following code/ classes, all licensed under the GPL. Note: Credit is also referenced in the code doc block inline where used.

* Polylang Switcher class (Elementor Widget) and its CSS based on widget from plugin "Language Switcher for Elementor" by Solitweb (GPLv2 or later)


== Plugin Links ==
* [Translations (WP GlotPress Platform)](https://translate.wordpress.org/projects/wp-plugins/connect-polylang-elementor)
* [User support forums](https://wordpress.org/support/plugin/connect-polylang-elementor)
* [Polylang Users Facebook Group](https://www.facebook.com/groups/polylang.users/)
* [DECKERWEB WordPress Plugins Facebook Group](https://www.facebook.com/groups/deckerweb.wordpress.plugins/)
* [**Creame** We are a digital design company](https://crea.me/)
