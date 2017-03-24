# RVN CMS #
Hi I'm Earl Evan Amante and my online persona is RaeveN.

This is a very simple website template engine with limited helpers and a crude Content Management System (CMS).
Our aim is to create a CMS that does not use any database, to be useful for simple CMS sites but has no sql storage in their hosting package.

## How do I install the CMS? ##
* Just extract the files to your web server, and on first visit, it will prompt you that you're not using a valid key and one shall be provided for you.  Insert that key in the **lib/rvn.class.php line 536**


```
#!php
$rvn = new RVN('INSERT_KEY_HERE');
```


* Also you will need the **cfg/settings.php** and make sure to update the site_url.  By default it's set to http://localhost/rvn_cms/

* Make sure to update the RewriteBase of the **.htaccess** file with the site_url above, your RewriteBase is */rvn_cms/*.  It must be pointed to subfolder where your site is.  More info about [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html)

### Documentation coming soon ###