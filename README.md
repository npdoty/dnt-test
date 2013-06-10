dnt-test
========

Test pages and scripts for Do Not Track browser and site testing.

## Setup

On a local machine (say, your Mac laptop), you may want to set up a Virtual Host and apache2, via [these instructions](http://robdodson.me/blog/2012/10/02/virtual-host-in-mountain-lion-with-apache/). I'm using the following Virtual Host in `httpd-vhosts.conf`:

    <VirtualHost *:80>
        ServerName dnt-test.local
        DocumentRoot "/Users/nick/code/dnt-test"
        <Directory /Users/nick/code/dnt-test>
            DirectoryIndex index.php index.html
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>