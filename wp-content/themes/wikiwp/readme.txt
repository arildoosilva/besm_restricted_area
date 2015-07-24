=== Licence ===

== Software ==
Copyright (C) 2014  Florian Steller (WikiWP)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

== Images ==
Copyright (C) 2014  Florian Steller (WikiWP)

Images used for this software are created by Florian Steller (WikiWP) 
and can be used for free: you can redistribute the images and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

You should have received a copy of the GNU General Public License
along with this images. If not, see <http://www.gnu.org/licenses/>.


=== Changelog ===

== 1.6.2 ==
Bug fix: renamed localization file into wikiwp.pot
Bug fix: not defined function for displaying category description only if it exists

== 1.6.1 ==
Bug fix: Custom background support wrong function name
Bug fix: Removed multiple credit links in footer

== 1.6 ==
* Custom header support + theme tag "custom-header"
* Custom background support (color and image) + theme tag "custom-background"
* New screenshot
* New styles for select boxes
* New theme tags "responsive-layout", "right-sidebar", "featured-images" and "custom-menu"
* Added border for images without caption and for thumbnails in excerpt
* Optimized blog title and description if no logo image is set
* Optimized navigation and sidebar for small device height (overflow scroll)
* Optimized archives widget for navigation sidebar
* Optimized script loading -> removed the jQuery enqueue because it's already being loaded with an array within the function script enqueue
* Code cleaning and documentation for JavaScript 
* Separated stylesheets for better child theme handling
* New styles for active navigation link
* Changed copyright in footer
* Bug fix: Fixed problems with default and meta navigation on devices larger 1200px
* Bug fix: header crashed on page reload for devices > 1200px
* Bug fix: wiki page template shows default sidebar
* Bug fix: removed multiple credit links from footer

== 1.5 ==

= 1.5.1 =
* Custom header support
* Custom background support (color and image)
* New screenshot
* New styles for select boxes
* New theme tags "responsive-layout", "right-sidebar", "featured-images" and "custom-menu"
* Added border for images without caption and for thumbnails in excerpt
* Optimized navigation and sidebar for small device height (overflow scroll)
* Optimized archives widget for navigation sidebar
* Optimized script loading -> removed the jQuery enqueue because it's already being loaded with an array within the function script enqueue
* Code cleaning and documentation for JavaScript 
* New styles for active navigation link
* Changed copyright in footer
* Bug fix: Fixed problems with default and meta navigation on devices larger 1200px
* Bug fix: header crashed on page reload for devices > 1200px
* Bug fix: wiki page template shows default sidebar

= 1.5.06 =
* Removed accents on media upload
* New mobile navigation icons
* Optimised functions script

= 1.5.05 =
* Tested up to WordPress 4.4.1
* Added dynamic sidebar to navigation
* Added small device support (320px - 480px) for navigation and sidebar
* Bugfix: margin top to cat title for first excerpt

== 1.5.04 ==
* Optimised sidebar and navigation for resopnsive view > 480px

= 1.5.03 =
* Added fallback for custom menu (main menu)
* Added meta menu with empty fallback
* Fixed menu and sidebar with overflow scroll when opened on mobile view
* Bugfix: optimised header, navigation and sidebar for logged in users which have activated admin bar

== 1.5.02 ==
* Added new media query brake point for devices larger then 1920px
* Bugfix: optimised input text fields width for full responsive view
* Bugfix: optimised Search input field width in the header for full responsive view
* Bugfix: fixed problem for content width on open sidebar for mobile devices larger then 768 px
* Bugfix: postinfo has been floating by images with position left at the end of post or page content

= 1.5.0 =
* Show tagline beneath the logo/blog name and front page title if it exists
* Added wiki page template
* New post excerpt
* New styles for buttons
* New styles for Forms
* New styles for iframes: max width is set to 100%
* Sidebar navigation highlights current status
* Added hypens support for content
* Updated text for custom logo update in dashboard
* Updated translation dummy file
* Updated german translation
* Plugin support: Now supporting "Table of Contents Plus" and it's different presentations with optimized styles for WikiWP
* Plugin support: Now supporting "Contact form 7"
* Bugfix: list style was not removed for custom menu in sidebar
* Bugfix: multiple border have been shown for custom menu in sidebar
* Bugfix: no hover effect for visited links
* Bugfix: no visited status for pagination links
* Bugfix: to much padding for no linked images with captions
* Code cleaning
* Updated code documentation

== 1.4 ==

= 1.4.7 =
* Tested up to WordPress 4.0.1
* New RSS icon in footer
* Show blog name if no custom logo is set
* Bugfix: Gallery items didn't float

= 1.4.6 =
* New logo
* Supporting comments for pages
* Added Styling for comments pargination
* Removed meta and OG tags from header (plugin territory)
* New words for translation dummy file: 
    - "Page not found" (Located in 404 error template)
* Bugfix: 404 page title had to much padding to the top
* Bugfix: heading 4 was smaller than heading 5
* Bugfix: Functions should not be nested within wikiwp_s_setup
* Bugfix: Date and author not shown in post meta box
* Bugfix: Title attr. of related post link in post meta & post info has shown the excerpt
* Bugfix: Header search form was cut in webkit browser

= 1.4.5 =
* Bugfix: Removed Whitespace at the end of comments.php
* Bugfix: Removed text domain from header.php (dublicate of text domain in functions.php)
* Bugfix: Using get_serch_form in header.php instead of custom form and added custom searchform.php (for localisation)
* Bugfix: Removed SEO meta elements in head
* bugfix: Image with caption was smaller than image of same size without caption
* Bugfix: Added padding to post navigation because of problems with titles which are too long for floating

= 1.4.4 =
* function "_s_setup" should be prefixed with the theme slug "wikiwp_setup"
* load_theme_textdomain should use the theme slug
* function "new_excerpt_more" should be prefixed with the theme slug
* "?>" should be removed from the end of functions.php (whitespace after can cause issues)
* Any instances of "theme_name" should changed to your theme slug (i.e. "wikiwp")
* Added thumbnails to excerpt on category pages

= 1.4.3 =
* Optimised title 
* New styles for numeric and unordered lists
* Numeric list with nested counters
* New styles for heading 4 to 6
* New styles for numeric lists
* New styles for non floating images
* New stylings for blockquotes
* New styles for tables
* New styles for links - using #rebeccapurple for visited links as tribute to Rebecca Alison Meyer, Eric Meyer's daughter who recently passed away ... (http://lists.w3.org/Archives/Public/www-style/2014Jun/0316.html) 
* Displaying all authors on author page with number of written posts
* Supporting custom menus - first is the main menu in the sidebar under the logo
* Removed blog description from sidebar and set smaller size for the blog title because of long title problems
* Added blog description to front page
* Using after_theme_setup hook
* Added post and page pargination
* New words for translation dummy file:
  - "Search" (Located in header > main search form)
  - "Sections" (Located in pargination for posts and pages)
  * Updated german translation
* Bugfix: Text in pre tags (code) is now wrapping
* Bugfix: Headings had different negative text indent
* Bugfix: Headings 4 to 6 had no negative text indent
* Bugfix: Image with align center was behaving like an non floating image
* Bugfix: Wide image not sized properly
* Bugfix: Logo was partially obscured when wp menu is visible (while user is logged in)
* Bugfix: Added Comments styling for comments reply level tree deeper than 2
* Bugfix: Added translation for date ("on") in postinfo

= 1.4.2 =
* Bugfix: Replaced old theme screenshot

= 1.4.1 =
* Changed style because it was to close to the look and feel of Wikipedia (Wordpress.org theme requirements)
* Added thumbnail support (default: 100x100, 150x150, 300x300, 640x640 and full size)
* Added post meta information for artikles and post meta wiht further information for the Category "Wiki"
* Added author template including a list of all authors, who have written posts for the website
* Styled Comments
* New words for translation dummy file:
  - "read more" (Located in post excerpt)
  - "Last posts" (Located beneath single post)
  - "Other posts" (Located in post info beneath single post)
* Updated german translation

* Bugfix: the welcome title was shown in a few templates (tag search, archives etc.) instead of the real title of the page
* Bugfix: in postinfo of excerpt a seperator for comments was shown, even if there where no comments opened
* Bugfix: Fixed broken comment number. The number of comments was always 0, even if the post had comments

= 1.4.0 =
* Localised theme (multi language support)
* Added translation dummy file "translate-in-your-language.po" with the following Words:
  - "Add post" (Located in header for logged in users next to main search form)
  - "Author" (Located in postinfo for home post excerpt, posts and search results)
  - "Categories" (Located in postinfo for home post excerpt, posts and search results)
  - "Comment" (Located in postinfo for home post excerpt, posts and search results)
  - "Comments"(Located in postinfo for home post excerpt, posts and search results)
  - "edit" (Located in postinfo for home post excerpt, posts, pages and search results)
  - "Logo" (Located in dashboard > Appearance > Customize for choosing your own logo file)
  - "Newer entries" (Located in home)
  - "Older entries" (Located in home)
  - "Replace the default WikiWP logo with your own brand." (Located in dashboard > Appearance > Customize for choosing your own logo file)
  - "results found for %s" (Located in search page title)
  - "Set your own logo (Located in dashboard > Appearance > Customize for choosing your own logo file)
  - "Tags" (Located in postinfo for home post excerpt, posts, pages and search results)
  - "So empty here ... leave a comment!" (Located in single posts over comments form if no comments where left so far)
  - "By" (Located in postinfo for home post excerpt and search results)
  - "on" (Located in postinfo for home post excerpt and search results)
* Added German translation
* Code cleaning
* PHP request optimization
* Optimized 404 Template
* New styles for sidebar navigation
* New styles for image aligment and capiton
* Added search form in header
* Added "Add post" button next to the main search form in header for logged in users
* Updated german translation
* New theme tags:
  - translation-ready
  - full-width-template 
* Added category description support for category template
* Added other post navigation to post info
* Added related posts (by most shared tags) to post info
* New Button style
* Show comment form only if comments are opended
* Request users to leave a comment, if comments are opened but there are no comment so far ("So empty here ... leave a comment!")

== 1.3 ==
* Theme update for upload requirements to the official theme repository
* Requires WordPress 3+
* HTML validation
* Code cleaning
* PHP request optimization
* Added more code documentation
* New logo + alt text for logo image
* Prepared header for dynamic sidebar
* Updated post info
* New look depending on WIKIPEDIA
* New colors 

== 1.2 ==
* Tested up to WordPress 3.9.1
* New header and meta data
* Optimized Stylesheet loading
* New link color
* First HTML5 tags
* Optimized footer
* Optimized Sidebar