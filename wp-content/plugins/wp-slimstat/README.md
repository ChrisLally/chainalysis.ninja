# Slimstat Analytics 
**Contributors:** coolmann  
**Donate link:** https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BNJR5EZNY3W38  
**Tags:** analytics, statistics, counter, tracking, reports, wassup, geolocation, online users, spider, tracker, pageviews, stats, maxmind, statistics, statpress, power stats, hit  
**Requires at least:** 3.8  
**Tested up to:** 5.2  
**Stable tag:** 4.8.4  


## Description 
The leading web analytics plugin for WordPress. Track returning customers and registered users, monitor Javascript events, detect intrusions, analyze email campaigns. Thousands of WordPress sites are already using it.


### Main features 
* **Real-time access log**: measure server latency, track page events, keep an eye on your bounce rate and much more.
* **Shortcodes**: display reports in widgets or directly in posts and pages.
* **GDPR guidelines**: fully compliant with the European law. You can test your website at [cookiebot.com](https://www.cookiebot.com/en/).
* **Filters**: exclude users from statistics collection based on various criteria, including user roles, common robots, IP subnets, admin pages, country, etc.
* **Export to Excel**: download your reports as CSV files, generate user heatmaps or get daily emails right in your mailbox (via premium add-ons).
* **Cache**: compatible with W3 Total Cache, WP SuperCache, CloudFlare and most caching plugins.
* **Privacy**: hash IP addresses to protect your users' privacy.
* **Geolocation**: identify your visitors by city and country, browser type and operating system (courtesy of [MaxMind](https://www.maxmind.com/) and [Browscap](https://browscap.org)).
* **World Map**: see where your visitors are coming from, even on your mobile device (courtesy of [amMap](https://www.ammap.com/)).


### Premium Add-ons 
Visit [our website](https://www.wp-slimstat.com/addons/) for a list of available extensions.


### Contribute 
Slimstat Analytics is an open source project, dependent in large part on community support. You can fork our [Github repository](https://github.com/slimstat/wp-slimstat) and submit code enhancements, bugfixes or provide localization files to let our plugin speak even more languages. [This page](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BNJR5EZNY3W38)
is for those who would like to donate money - be it once, be it regularly, be it a small or a big amount. Everything is set up for an easy donation process.
Try it out, you'll be amazed how good it feels! If you're on a tight budget, and coding is not your thing, please consider writing [a review](https://wordpress.org/support/plugin/wp-slimstat/reviews/#new-post) for Slimstat as a token of appreciation for our hard work!


### Requirements 
* WordPress 3.8+
* PHP 5.2+ (or 7.1+ if you use the Browscap data file)
* MySQL 5.0.3+
* At least 40 MB of free web space
* At least 5 MB of free DB space
* At least 32 Mb of free PHP memory for the tracker (peak memory usage)
* IE9+ or any browser supporting HTML5, to access the reports


## Installation 
1. In your WordPress admin, go to Plugins > Add New
2. Search for WP Slimstat Analytics
3. Click on **Install Now** under WP Slimstat Analytics and then activate the plugin
4. Make sure your template calls `wp_footer()` or the equivalent hook somewhere (possibly just before the `</body>` tag)
5. Go to Slimstat > Settings > Maintenance tab > MaxMind IP to Country section and click on "Install GeoLite DB" to detect your visitors' countries based on their IP addresses
6. If your `wp-admin` folder is not publicly accessible, make sure to check our [knowledge base](https://docs.wp-slimstat.com/) to see if there's anything else you need to do


## Please note 
* If you decide to uninstall Slimstat Analytics, all the stats will be **PERMANENTLY** deleted from your database. Make sure to setup a database backup (wp_slim_*) to avoid losing your data.
* If you are upgrading from a version prior to 4.0, please [install version 4.0](https://downloads.wordpress.org/plugin/wp-slimstat.4.0.zip) first to upgrade the database structure and download the new Geolocation data.


## Frequently Asked Questions 
Our knowledge base is available on our [support center](https://docs.wp-slimstat.com/) website.


## Changelog 

### 4.8.4 
* [Note] If you're using any of our premium add-ons, please make sure to update them to the latest version available (see Slimstat > Add-ons) as we've updated some references in our code.
* [Note] We recently received an email from one of our users suggesting that we replace the line charts currently used to display reports over a timeline with **bar charts**, because 'the number of pageviews and IPs are discrete numbers, hence they should also be presented as discrete numbers', according to him. What do you think? Please let us know by [sending us a message](https://support.wp-slimstat.com/) on our support platform. Thank you.
* [Update] Renamed a few files in the admin. If you're including Slimstat libraries in your custom code, please make sure to check that your references are up-to-date. Also, make sure to clear your cache if you page layout doesn't look right.
* [Update] [AmCharts](https://www.amcharts.com/javascript-charts/), the library used to render all of our charts, has been updated to version 4.5.3.
* [Update] When functioning in Client mode, the tracker will now not ignore bots, spiders and the like automatically. Please use the appropriate option under Settings > Exclusions if you would like to ignore bots. This solves an incompatibility issue with some caching plugins which "prefetch" the website, presenting themselves as bots.
* [Update] Removed tracker notice field under Settings > Maintenance as it was confusing many people and generating extra work for our customer service team.
* [Update] Removed option to not track "client properties" like screen resolution, etc. Also, removed option to not honor DNT headers, as we received complaints from privacy activists on this matter.
* [Update] Removed option to change date/time formats and numeric separators: Slimstat will now use the WordPress settings to adjust its behavior.
* [Update] Removed 'About Slimstat' report, given that some of the information in it has been moved to the Settings.
* [Update] Removed unused strings, improved contextual descriptions and applied consistent naming conventions across our codebase (first pass).
* [Update] The Slimstat admin menu is now added to the Admin Bar by default. Please go to Settings > Basic > WordPress Integration and change the corresponding option, if you prefer to use the side menu instead.
* [Update] Enabled code editor in Settings.
* [Update] Implemented a new optimized function to retrieve the post count on the Edit Posts/Pages/CPTs screens. Thank you, Lance.
* [Update] Improved browser detection feature, which will now fallback to the heuristic function if the Browscap data file doesn't contain an exact match for a given browser. This usually happens whenever a new browser version is released, which is not yet included in the data file.
* [Update] Option to track same-domain referrers is now deactivated by default on new installations.
* [Update] Enabled wildcards on the exclusion rule by capability.
* [Update] Improved the overall source code readability score. Now you don't have any other excuses to not contribute to this project!
* [Update] Table indexes are now enabled by default in the database.
* [Update] Added new WordPress filter to the Browscap Library, so that third-party tools can manipulate the data before it's returned to the tracker.
* [Update] Added [nonce](https://wordpress.org/support/article/glossary/#nonce) to Settings page for improved security.


### 4.8.3 
* [Note] Thank you for all the great feedback you provided to our unofficial survey about retiring the 'browser plugins' feature. The vast majority of those who replied confirmed what we already thought. Please consider backing up your database if you would like to preserve this information for future analysis. With this update, we removed the portion of code that tracks that information, but kept the existing data untouched. In a couple of releases, code will be added to actually drop this column from the database.
* [New] If English is not your primary languge, Slimstat will now display a notice asking for your help to [translate our plugin](https://translate.wordpress.org/projects/wp-plugins/wp-slimstat/) in your language. Please consider volunteering for this great opportunity to help our community!
* [Update] We are working with the GlotPress community to improve the way Slimstat speaks your language. We had to change the way certain strings are defined in our source code. Please let us know if you notice any unexpected behavior when analyzing languages, countries and operating systems.
* [Update] Removed Facebook rankings metrics, as the API has been deprecated and the new one is not accessible without a private token.
* [Update] MozRank has been deprecated, we have replaced it with the Domain Authority metric.
* [Update] Spring cleaning in the 'admin notices' department: removed some obsolete CSS code, replaced by built-in WP classes and definitions.
* [Fix] Changed the default minimum capability to access the reports from 'activate_plugins' to 'manage_options', so that regular administrators (a.k.a. non-super admins) in a multisite environment can still see their own reports (thank you, [homepageware](https://wordpress.org/support/topic/slimstat-and-multisite/)). This update does not affect existing installations: if you want regular admins to see their own stats, please go to Slimstat > Settings > Access Control and change the values in the corresponding fields.
* [Fix] The autorefresh feature for the Access Log was not working as expected. Thank you to all the users who patiently worked with us to identify the issue.
* [Fix] A conflict between the Async loader and AmCharts 4 was causing the Screen Options tab to not work as expected (thank you, [softfully](https://wordpress.org/support/topic/screen-options-doesnt-open/)).
* [Fix] Removed unused setting 'Expand Reports'


### 4.8.2 
* [Note] Our team has been contemplating the idea of deprecating the information collected about your visitors' *browser plugins* (Java, PDF reader, RealView player, Silverlight, etc). In this day and age, where browsers use either built-in functionality to provide those features, or extensions that cannot be tracked for privacy purposes, it feels anachronistic to continue collecting this outdated information. By getting rid of this specific feature, we can streamline our code, improve performance, and reduce the database size. However, we wanted to hear from our users before anything is actually implemented. Please do not hesitate [to let us know](https://support.wp-slimstat.com) if you are using the 'browser plugins' field for your reporting needs.
* [New] Many CRM integration plugins rely mostly on the user emails, not usernames. For this reason, a new email field has been added to the database (thank you, [sandrodz](https://github.com/sandrodz)).
* [Update] Changed the preset intervals in the date filter dropdown so that you can get a day over day comparison (Monday over Monday, etc) for improved accuracy.
* [Update] [AmCharts](https://www.amcharts.com/javascript-charts/), the library used to render all of our charts, has been updated to version 4.4.9.
* [Fix] The countdown timer on the Access Log was not working as expected (thank you, [anniest](https://wordpress.org/support/topic/no-refresh-2/)).
* [Fix] The countdown timer was causing an warning message to appear on other screens.
* [Fix] Minor aesthetic improvements.


### 4.8.1 
* [Update] Async mode will now serialize concurrent requests to the backend to optimize performance and reduce server load.
* [Fix] Addressed a remote XSS vulnerability disclosed by Sucuri/GoDaddy.
* [Fix] Charts were displaying the wrong label for certain values (thank you, Alex).


### 4.8 
* [Note] Now that we have a cleaner foundation to build on, it's time to start introducing new reports and new ways to segment your audience and the traffic they generate. While our users test the latest changes and updates (to confirm that the foundation is indeed solid and bug-free), we are hard at work implementing the first batch of new reports. Some of them will be made available in the free version, while others will be added to our premium add-on, [User Overview](https://www.wp-slimstat.com/downloads/user-overview/). And we need your help! If you think that a specific report should be added to Slimstat, please do not hesitate to let us know!
* [Note] Worried about the recent [news regarding jQuery vulnerabilities](https://www.zdnet.com/article/popular-jquery-javascript-library-impacted-by-prototype-pollution-flaw/)? Slimstat doesn't use jQuery as a dependency, so you can sleep tight knowing that your website will not be affected.
* [Update] [AmCharts](https://www.amcharts.com/javascript-charts/), the library used to render all of our charts, has been updated to version 4. This new release is not backward compatible, so the code to integrate it with Slimstat had to be completely rewritten. Please let us know if you notice any issues.
* [Update] [Plugin Update Checker](https://github.com/YahnisElsts/plugin-update-checker), the library we use to check if a new version of our premium add-ons is available for download, has been update to version 4.6.
* [Update] If you're using our partner's CDN functionality (JsDelivr) to load the tracker, their link is now always loaded over HTTPS for added security.
* [Update] Switched the Add-on Update checker URL to HTTPS, for added security (thank you, Peter).
* [Update] Changed the protocol of all the URLs used within Slimstat, including references to our documentation, to HTTPS.
* [Update] Added icon to geolocate Originating IP addresses, when detected.
* [Fix] The optout cookie path was not being set correctly (thank you, [ralfkerkhoff](https://wordpress.org/support/topic/opt-out-cookie-per-page/)).
* [Fix] Google seems to be using a new User Agent string for its "mobile" crawler, which was causing Slimstat from incorrectly identifying visits as coming from mobile devices, instead of bots (thank you, Ron).
* [Fix] An error was being returned if SVG elements were using the A tag on a page (thank you, [snaphappyme](https://wordpress.org/support/topic/uncaught-typeerror-all_linksn-href-indexof/)).
* [Fix] A bug was causing Slimstat to incorrectly geolocate visits to websites behind a Cloudflare load balancer. Please update the IP Address Fix add-on as well.
* [Fix] Tweaked the formula to determine your website bounce rate, and updated the associated description to better reflect the underlying calculations.