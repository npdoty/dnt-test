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

## How does it work?

If you want to see the DNT value that your browser is sending, browse to `echo.php`. 

To test how your browser reacts to a particular `Tk` response header, browse to, for example, `echo.php?tk=C`. 

To test how your browser reacts to a page of frames that use all the `Tk` response headers, browse to `tk-responses.php`.

For now, you can try this out at [http://npdoty.name/dnt-test/echo.php](http://npdoty.name/dnt-test/echo.php) and [http://npdoty.name/dnt-test/tk-responses.php](http://npdoty.name/dnt-test/tk-responses.php).