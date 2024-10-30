=== Change Core Slugs ===
Contributors: dimadin
Donate link: https://milandinic.com/donate/
Tags: URL, permalink, slug
Requires at least: 4.9
Tested up to: 5.1
Requires PHP: 5.4
Stable tag: 1.0.0

Set custom permalink slugs instead of default ones.

== Description ==

Change Core Slugs is a plugin that allows you to set custom permalink slugs instead of default ones that are provided with WordPress core. This functionality is already available in WordPress, however it can be used by manually setting new configuration in the code. What this plugin does is that it provides friendly user interface where all site admins can change default slugs.

You can change:

* `author` base in authors archives
* `search` base in searches archives
* `page` base in pagination pages of archives or in single posts
* `comments-page` base in pagination pages of single posts comments
* `comments` base in comments feeds
* `feed` base in feeds

When you change any slug, you will not get redirection from the pages that used old slug. Same goes if you again change any slug. If you want redirection, you must set it through server rules or with other plugins.

If you disable this plugin, old, default slugs will be restored and URLs with new slugs will stop working. The only way to keep new slugs is by manually setting them in the code.

**NOTE**: because of two bugs in WordPress core, in some cases setting custom slugs will not work properly. These cases are when `page` or `comments-page` include any non-ASCII character (ticket [#41891](https://core.trac.wordpress.org/ticket/41891)), or when `feed` or `comments` bases are set (ticket [#43274](https://core.trac.wordpress.org/ticket/43274)). Until these two bugs are fixed, you can use [temporary plugin](https://github.com/dimadin/redirect-canonical-fix) that includes fixes. You do not need that plugin if you do not use features that trigger bugs from above.

And it’s on [GitHub](https://github.com/dimadin/change-core-slugs).

== Usage ==

Got to Settings > Change Core Slugs page.

== Screenshots ==

1. Change Core Slugs settings screen.
