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

Accounts & Security
-------------------
We allow SVG uploads in a theme `add_filter()` override. Currently the theme is designed to be used on sites
where all user accounts - who may upload media - are trusted. Using the theme as-is on sites where other users
can upload files may introduce SVG-related security vulnerabilities.

WordPress configuration
-----------------------
If you're setting up WordPress and want separate-domain multisite support, these steps should work.

1. [Download](https://wordpress.org/download/) and install WordPress normally. (N.B. I think cloning the
WordPress Git repo when setting up multisite is likely to cause more problems than it solves.)
2. Create an Apache virtual host. My local one looks like:

        <VirtualHost *:80>
            DocumentRoot "/path/to/ICAHD/WordPress"
            ServerName local.icahd.org
            ServerAlias local.icahduk.org
            <Directory "/path/to/ICAHD/WordPress">
                Options Includes Indexes FollowSymLinks
                Order allow,deny
                Allow from all
                AllowOverride All
            </Directory>
        </VirtualHost>
    
    To test locally like this, you also need to add the `local.*` hosts to your [hosts file](https://en.wikipedia.org/wiki/Hosts_%28file%29).
    N.B. `*.localhost` will not work with WP multisite.
    
3. Create a Network / enable multisite following [these steps](http://codex.wordpress.org/Create_A_Network), 
choosing **Sub-domains** and making sure to edit the `.htaccess` and `wp-config.php` as instructed.
4. Install the [WordPress MU Domain Mapping](https://wordpress.org/plugins/wordpress-mu-domain-mapping/installation/)
plugin and follow its setup instructions.

### Configuring sites
To set up a new standalone site having done this, it appears you need to:

1. Create a new site from *My Sites > Network Admin* using a subdomain of the network's main site domain.
2. Note the `blog_id` created for this new blog in the database, in the `wp_blogs` table.
3. Go to *Network Admin > Settings > Domains* and add a new entry, using the above `blog_id` as the **Site** ID
and your desired top-level domain.
4. Go to *Network Admin > Sites > [The new site] > Edit* and set the Site URL in line with the domain you've mapped.

### Adding this theme
To add the ICAHD theme, if you're already Git-versioning your whole WordPress installation, you can use the GitHub
repo to add it as a submodule:

    git submodule add git@github.com:danjohnroberts/ICAHD_wp_theme.git ./wp-content/themes/icahd

Or if you're not version controlling the whole installation, just clone it into `./wp-content/themes/icahd`.

### Additional plugins
You should also install and configure [Woocommerce](http://www.woothemes.com/woocommerce/),
[Ubermenu](http://wpmegamenu.com/) and [WP Custom Post Template](https://wordpress.org/plugins/wp-custom-post-template/)
to mirror what's on the live sites.
