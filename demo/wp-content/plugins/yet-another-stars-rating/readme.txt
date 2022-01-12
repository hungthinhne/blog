=== Yasr - Yet Another Stars Rating ===
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AXE284FYMNWDC
Tags: rating, rate post, rate page, star rating, google rating, votes
Requires at least: 5.0
Contributors: Dudo
Tested up to: 5.9
Stable tag: 2.9.5
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Boost the way people interact with your site with an easy WordPress stars rating system! With schema.org rich snippets YASR will improve your SEO

== Description ==
Improving the user experience with your website is a top priority for everyone who cares about their online activity,
as it promotes familiarity and loyalty with your brand, and enhances visibility of your activity.

Yasr - Yet Another Stars Rating is a powerful way to add SEO-friendly user-generated reviews and testimonials to your
website posts, pages and CPT, without affecting its speed.

== How To use ==

== Reviewer Vote ==
With the classic editor, when you create or update a page or a post, a box (metabox) will be available in the upper right corner where you'll
be able to insert the overall rating.
With the new Guteneberg editor, just click on the "+" icon to add a block and search for Yasr Overall Rating.
You can either place the overall rating automatically at the beginning or the end of a post (look in "Settings"
-> "Yet Another Stars Rating: Settings"), or wherever you want in the page using the shortcode [yasr_overall_rating] (easily added through the visual editor).

== Visitor Votes ==
You can give your users the ability to vote, pasting the shortcode [yasr_visitor_votes] where you want the stars to appear.
If you're using the new Gutenberg editor, just click on the "+" icon to add a block and search for Yasr Visitor Votes
Again, this can be placed automatically at the beginning or the end of each post; the option is in "Settings" -> "Yet Another Stars Rating: Settings".

== Multi Set ==
Multisets give the opportunity to score different aspects for each review: for example, if you're reviewing a videogame, you can create the aspects "Graphics", "Gameplay", "Story", etc.

== Migration tools ==
You can easily migrate from *WP-PostRatings*, *kk Star Ratings*, *Rate My Post* and *Multi Rating*
A tab will appear in the settings if one of these plugin is detected.

== Supported itemtypes ==
YASR supports the following schema.org itemtypes:

BlogPosting ✝,
Book ¶,
Course,
CreativeWorkSeason,
CreativeWorkSeries,
Episode,
Event,
Game,
LocalBusiness ‡,
MediaObject,
Movie Δ,
MusicPlaylist,
MusicRecording,
Organization,
Product §,
Recipe ||,
SoftwareApplication

✝ BlogPosting itemtype will not show stars in search result.
More info [here](https://wordpress.org/plugins/yet-another-stars-rating/faq/)

¶ Book supports the following properties
* author
* bookEdition
* BookFormat
* ISBN
* numberOfPages

‡ LocalBusiness supports the following properties
* Address
* PriceRange
* Telephone

Δ Movie supports the following properties
* actor
* director
* Duration
* dateCreated

§ Products supports the following properties
* Brand
* Sku
* Global identifiers
* Price
* Currency
* Price Valid Until
* Availability
* Url

|| Recipe supports the following properties
* cookTime
* prepTime
* description
* keywords
* nutrition
* recipeCategory
* recipeCuisine
* recipeIngredient

== Video Tutorial ==

= Old video, but still valid. =
[youtube https://www.youtube.com/watch?v=M47xsJMQJ1E]

= New videos, talked in Italian but easily to understand (eng subs will comes) =
[Tutorial's playlist](https://www.youtube.com/playlist?list=PLFErQFOLUVMcx8Qb9--KKme3bQ_KGri71)

== Developers ==
While YASR - Yet Another Stars Rating does not require any coding, it is developer friendly!
It is the first (and for now only) rating plugin that uses REST API.
[Here](https://documenter.getpostman.com/view/12873985/TzJycbVz) you can find the documentation.
Further, it comes with a lot of hooks, you can find more info [here](https://yetanotherstarsrating.com/docs/developers/) .

== Related Link ==
* Documentation at [Yasr Official Site](https://yetanotherstarsrating.com/docs/)
* [Demo page for Overall Rating and Vistor Rating](https://yetanotherstarsrating.com/yasr-basics-shortcode/)
* [Demo page for Multi Sets](https://yetanotherstarsrating.com/yasr-multi-sets/)
* [Demo page for Rankings](https://yetanotherstarsrating.com/yasr-rankings/)

Do you want more feature? [Check out Yasr Pro!](https://yetanotherstarsrating.com/#yasr-pro)

== Press ==
[Tutorial by Qode Magazine](https://qodeinteractive.com/magazine/how-to-add-post-rating-to-your-wordpress-website/)
[Tutorial by Greengeeks](https://www.greengeeks.com/tutorials/star-rating-system-yasr-wordpress/)

== Installation ==
1. Navigate to Dashboard -> Plugins -> Add New and search for YASR
2. Click on "Installa Now" and than "Activate"

== Frequently Asked Questions ==

= What is "Overall Rating"? =
It is the vote given by who writes the review: readers are able to see this vote in read-only mode. Reviewer can vote using the box on the top right in the editor screen. Remember to insert this shortcode **[yasr_overall_rating]** to make it appear where you like.

= What is "Visitor Rating"? =
It is the vote that allows your visitors to vote: just paste this shortcode **[yasr_visitor_votes]** where you want the stars to appear.

[Demo page for Overall Rating and Vistor Rating](https://yetanotherstarsrating.com/yasr-basics-shortcode/)

= What is "Multi Set"? =
It is the feature that makes YASR awesome. Multisets give the opportunity to score different aspects for each review: for example, if you're reviewing a videogame, you can create the aspects "Graphics", "Gameplay", "Story", etc. and give a vote for each one. To create a set, just go in "Settings" -> "Yet Another Stars Rating: Settings" and click on the "Multi Sets" tab. To insert it into a post, just paste the shortcode that YASR will create for you.

[Demo page for Multi Sets](https://yetanotherstarsrating.com/yasr-multi-sets/)

= What is "Ranking reviews" ? =
It is the 10 highest rated item ranking by reviewer. In order to insert it into a post or page, just paste this shortcode **[yasr_ov_ranking]**

= Wht is "Users' ranking" ? =
This is 2 charts in 1. Infact, this chart shows both the most rated posts/pages or the highest rated posts/pages.
For an item to appear in this chart, it has to be rated twice at least.
Paste this shortcode to make it appear where you want **[yasr_most_or_highest_rated_posts]**

= What is "Most active reviewers" ? =
If in your site there are more than 1 person writing reviews, this chart will show the 5 most active reviewers. Shortcode is **[yasr_top_reviewers]**

= What is "Most active users" ? =
When a visitor (logged in or not) rates a post/page, his rating is stored in the database. This chart will show the 10 most active users, displaying the login name if logged in or "Anonymous" otherwise. The shortcode : **[yasr_most_active_users]**

[Demo page for Rankings](https://yetanotherstarsrating.com/yasr-rankings/)

= Wait, wait! Do I need to keep in mind all this shortcode? =
If you're using the new Gutenberg editor, you don't need at all: just use the blocks.
If, instead, you're using the classic editor, in the visual tab just click the "Yasr Shortcode" button above the editor

= Does it work with caching plugins? =
Since version 2.3.0 YASR works with *every caching plugin available out there*.
In the settings, just select "yes" to "Load results with AJAX".
YASR has been tested with:
* Wp Super Cache
* LiteSpeed Cache
* Wp Fastest Cache
* WP-Optimize
* Cache Enabler
* Hyper Cache
* Wp Rocket

= Why I don't see stars in google? =
[Read here](https://yetanotherstarsrating.com/docs/rich-snippet/reviewrating-and-aggregaterating/) and find out how to set up rich snippets.
You can use the [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/u/0/) to validate your pages.
Also [read this](https://webmasters.googleblog.com/2019/09/making-review-rich-results-more-helpful.html) google announcement.
If you set up everythings fine, in 99% of cases your stars will appear in a week.
If doesn't, you should work on your seo reputation.

= Does it work with PHP 8? =
Yes, YASR is 100% fully compatible with PHP 8

== Screenshots ==
1. Example of Yasr Overall Rating and Yasr Visitor Votes shortcodes
2. Yasr Multi Set
3. User's ranking showing most rated posts
4. User's ranking showing highest rated posts
5. Ranking reviews

== Changelog ==

The full changelog can be found in the plugin's directory. Recent entries:

= 2.9.5 =
* NEW FEATURE: In the settings, is now possible to customize the text when a rating is saved / updated
* minor fixes

= 2.9.4 =
* Minor changes

= 2.9.3 =
* TWEAKED: Added support for Catch Infinite Scroll

= 2.9.2 =
* FIXED: rich snippets error that could occur in some circumstances
* FIXED: css fix
* TWEAKED: code cleanup

= 2.9.1 =
* FIXED: if shortcode exists for a post or page, but there are no ratings, wrong rich snippets are returned

= 2.9.0 =
* FIXED: ranking yasr_most_or_highest_rated_posts doesn't load in some circumstances

= 2.8.9 =
* FIXED: stars next to the title didn't work if shortcode doesn't exists in a post or page
* TWEAKED: minor changes

= 2.8.8 =
* TWEAKED: rich snippets are now included only if shortcode exists in post or page
* TWEAKED: global yasr_plugin_imported is now refactored into a constant
* FIXED: removed duplicated query
* FIXED: Import functions from external plugins is now compatible with mysql8
* FIXED: itemTypename didn't get saved into Rich snippet options above the editor

= 2.8.7 =
* TWEAKED: added a check to improve compatibility with external plugins
* TWEAKED: removed old and useless languages files: only three were left to use as example
* FIXED: litespeed compatibility

= 2.8.6 =
* FIXED: Missing dependency for rankings shortcodes

= 2.8.5 =
* TWEAKED: YASR js assets are now loaded only if shortcode exists, and every shortcode has is ows js file. This will reduce
the unused js code, increasing lighthouse/pagespeed results.
* NEW FEATURE: new shortcode, ' yasr_user_rate_history ' : this will works only for logged in users, and will show
all the ratings that the user has give.
* FIX: js console error in widget page

= 2.8.4 =
* ENHANCEMENT: All gutenberg's blocks have been updated to apiVersion 2. This mean that YASR now requires at least
WordPress version 5.6
* FIX: some errors that occur using yasr_overall_rating and yasr_visitor_votes gutenberg blocks
* ENHANCEMENT: All gutenberg's blocks now support alignment

= 2.8.3 =
* FIXED: compatibility with WordPress 5.8
* FIXED: link to trial page
* TWEAKED: added some hooks

= 2.8.2 =
* FIXED: if "Enable stars next to the title?" is activated, the ratings also appears in rss feed.

= 2.8.1 =
* FIXED: error that could occurs in some circumstances

= 2.8.0 =
* FIXED: if blogPosting itemType is selected, and a non valid url image is is supplied in the rich snippets settings,
a php warning is returned
* TWEAKED: The ajax method yasr_stats_visitors_votes now returns only json data, instead of HTML
* TWEAKED: Ajax error responses are now json_encoded
* TWEAKED: stats tooltip in yasr_visitor_votes works now with flexbox
* TWEAKED: minor changes

= 2.7.9 =
* FIXED: missing stats in some circumstances for yasr_visitor_votes shortcode

= 2.7.8 =
* FIXED: error when "Load results with AJAX?" is enabled, and the attribute "readonly" is set to yasr_visitor_votes shortcode
* TWEAKED: css minor changes

= 2.7.7 =
* TWEAKED: When "Load results with AJAX?" is enabled, data is loaded through admin-ajax.php instead of REST API.
* TWEAKED: most of caching plugins are automatically detected: if one is found, "load results with ajax" is enabled by default.
* Minor changes

= 2.7.6 =
* TWEAKED: new pricing page
* Minor changes

= 2.7.5 =
* TWEAKED: in yasr_visitor_votes, chart icon now has same color of the text.

= 2.7.4 =
* TWEAKED: in front end, dashicons are not required anymore!
* TWEAKED: Vertical align of text and stars on yasr_visitor_votes shortcode.
The class yasr-total-average-container has be renamed yasr-vv-stats-text-container.
* TWEAKED: Custom texts support.
* TWEAKED: Updated support for Autoptimize, Litespeed, Cache Enabler and WpRocket.
* TWEAKED: Removed "itemListElement" from Recipe microdata.
* TWEAKED: added samesite attribute when cookie is set.

= 2.7.3 =
* NEW FEATURE: new shortcode: yasr_multi_set_ranking : this will show rankings from yasr_multiset
* TWEAKED: code cleanup.

= 2.7.2 =
* NEW FEATURE: new shortcode: yasr_visitor_multi_set_ranking : this will show rankings from yasr_visitor_multiset
* TWEAKED: minor fixes

= 2.7.1 =
* FIXED: minor bugs that could happen in rare circumstances

= 2.7.0 =
* FIXED: fixed warning that can return on fresh installations

= 2.6.9 =
* FIXED: error YasrMultiSetData.php on line 61 if multiSet are not used

= Additional Info =
See credits.txt file