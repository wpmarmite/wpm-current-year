=== Current Year ===

Contributors:      WordPress Telex
Tags:              block, year, date, copyright, dynamic, shortcode
Tested up to:      6.9
Stable tag:        0.1.0
License:           GPLv2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

A dynamic block and shortcode that automatically display the current year with customizable formatting.

== Description ==

The Current Year block is a lightweight, dynamic solution for displaying the current year on your WordPress site. Perfect for copyright notices, footer information, or any content that needs to reference the current year.

**Key Features:**

* Automatically updates to display the current year
* Customizable text formatting (font size, color, alignment)
* Optional prefix and suffix text (e.g., "Copyright © 2024")
* Inline display - works seamlessly within paragraphs and headings
* Lightweight and performant - updates on each page load
* No manual intervention required
* **[current-year] shortcode for classic themes and widgets**

**Use Cases:**

* Copyright notices: "Copyright © 2024 Your Company"
* Footer information: "Est. 2010 - 2024"
* Dynamic content: "Welcome to 2024"
* Legal disclaimers with current year references

The block provides a simple interface in the editor with live preview and comprehensive formatting controls through the WordPress block toolbar and inspector panel.

**Shortcode Usage:**

For classic themes or anywhere shortcodes are supported, use:

* `[current-year]` - Displays just the year: 2024
* `[current-year prefix="Copyright © "]` - Displays: Copyright © 2024
* `[current-year prefix="Est. 2010 - "]` - Displays: Est. 2010 - 2024
* `[current-year prefix="©" suffix=" All rights reserved"]` - Displays: ©2024 All rights reserved

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wpm-current-year` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Add the Current Year block to any post or page using the block inserter, or use the [current-year] shortcode
4. Customize the formatting and prefix/suffix text as needed

== Frequently Asked Questions ==

= Does the year update automatically? =

Yes! The year is generated dynamically on each page load using PHP, so it will always display the current year without any manual updates.

= Can I add text before or after the year? =

Absolutely. In the block editor, use the Prefix and Suffix fields in the block settings panel. With the shortcode, use the prefix and suffix attributes: `[current-year prefix="Copyright © " suffix=" Company Name"]`

= Can I use this in classic themes? =

Yes! Use the `[current-year]` shortcode anywhere shortcodes are supported, including classic theme templates, widgets, and the Classic Editor.

= Can I customize the appearance? =

Yes, the block supports standard WordPress text formatting including font size, text color, background color, and text alignment through the block toolbar and inspector controls. For the shortcode, you can wrap it in HTML with custom CSS classes.

= Will this work inline with other text? =

Yes! The block is designed to work inline within paragraphs, headings, or any other content. It renders as a span element that flows naturally with surrounding text. The shortcode also works inline.

= Does it affect site performance? =

No, the block is extremely lightweight. It simply outputs the current year using PHP's date function, which has negligible performance impact.

== Screenshots ==

1. Current Year block in the editor with formatting options
2. Block settings panel showing prefix and suffix options
3. Example of the block used in a copyright notice
4. Shortcode usage examples

== Changelog ==

= 0.1.0 =
* Initial release
* Dynamic year display
* Customizable prefix and suffix
* Text formatting controls
* Inline display support
* [current-year] shortcode for classic themes

== Usage Examples ==

**Block Usage:**
Add the Current Year block through the block inserter and customize in the settings panel.

**Shortcode Usage:**

* Simple year: `[current-year]` → 2024
* Copyright: `[current-year prefix="Copyright © "]` → Copyright © 2024
* Date range: `[current-year prefix="Est. 2010 - "]` → Est. 2010 - 2024
* Full notice: `[current-year prefix="© " suffix=" Company Name. All rights reserved."]` → © 2024 Company Name. All rights reserved.