ICAHD Theme
===========
Originally based on [WP Bootstrap](https://github.com/320press/wordpress-bootstrap), the ICAHD custom theme
has since been developed by Daniel Roberts and Noel Light-Hilary from 2015 onwards.

Issues
------
[Managed on GitHub](https://github.com/danjohnroberts/ICAHD_wp_theme/issues).

SASS
----
We use the SCSS flavour of [SASS](http://sass-lang.com/) as a CSS pre-processor. You can compile the theme's
top-level `style.css` using any tool you choose, but it's recommended to edit `sass/style.scss` and have
something build the CSS file from that, rather than editing it directly.

Custom settings
---------------
We're using the WordPress [Theme Customization API](https://codex.wordpress.org/Theme_Customization_API)
to let users configure colours and images. We don't currently do anything that requires the more general
Settings API.

These pages may be helpful in explaining how this works:

* [How to Set Up the WordPress Theme Customizer](http://buildwpyourself.com/wordpress-theme-customizer/)
* [Building Theme Color Options with the Customizer](http://buildwpyourself.com/building-theme-color-options-customizer/)
