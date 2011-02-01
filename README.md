# Asarko
An attempt to make Drupal sexy with HTML5 and a big ol' helping of CSS reset. This is a base theme, meant to be used in conjunction with a sub-theme of your building.

## HTML-, not XML-based templates
So far, only html.tpl.php, page.tpl.php, node.tpl.php and block.tpl.php are overridden with HTML5 markup, with more to come. This might be a risky decision since the new Drupal standard is XML, but I think I'd rather stick to the HTML standard and if I need to, add microdata myself.

## Full Drupal Reset
For the 7-x branch, I'm using Tao's CSS, CSS overrides, and drupal.css completely. I will probably make it more my own as time goes by.

## HTML5 shim
We include Modernizr which does this and much more. Like another HTML5 shim better? Override it by creating an html5shim.tpl.php in your theme, and the contents of that file will be included in the head of the document right after the stylesheets.
