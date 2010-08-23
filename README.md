# Asarko
An attempt to make Drupal sexy with HTML5 and a big ol' helping of CSS reset (with accessibility in mind!). This is a base theme, meant to be used in conjunction with a sub-theme of your building.

## Full Drupal Reset
Much like [Tao](code.developmentseed.org/tao), this theme overrides all the default CSS Drupal spits out that has those ugly margins, padding, and borders that break your otherwise perfect layout. I've gone through all the Drupal CSS and hand picked what's important and easy to override. I've also added a few styles that you will probably override in your stylesheets. If those base styles bother you, fork away and delete that `base.css` and `base-rtl.css`.

### template.php
Also like [Tao](code.developmentseed.org/tao), Asarko moves the construction of `class` and `id` attributes for `.tpl` files into preprocess functions. So, if you want to add a certain kind of classname to your blocks, you don't have to override the template&mdash;just write a `theme_preprocess_block()` function.

### page.tpl.php
I've rearranged things a bit in the page template so that pages keep a proper heading outline (http://gsnedders.html5.org/outliner/). You'll probably override this file anyway, though, so you probably don't need to worry about it.

### Modernizr.js
Asarko includes modernizr.js. It's main purpose is to register the new HTML5 elements for IE and other browsers that don't yet support them, but it also adds useful classnames to the root `html` element that you can use for styling using CSS3 while providing fallbacks for browsers that don't support certain things. As a happy side effect, adding this fixes the duplicate content-type `meta` tag. As a sad consequence of implementation, you can't easily override to remove this script. But you can fork!

## Accessibility
On top of providing a very clear and structured heading outline, Asarko also provides a way to hide elements from the eye but not from screenreaders using the method described at [http://adaptivethemes.com/using-css-clip-as-an-accessible-method-of-hiding-content](http://adaptivethemes.com/using-css-clip-as-an-accessible-method-of-hiding-content). So your site's navigation, breadcrumb, mission, help section, messages/alerts, and tabs will all have descriptive headings for screenreaders by default. There is also a "skip to content" link at the very top of the page hidden from the eye in the same way.