Full-Text RSS
=============

About
-----
This code lies in the server's side. It takes as input an xml file (which has article summaries and links to the complete articles) and outputs an xml file which has complete articles. Currently its customized to parse articles from vnexpress.net. The basic parsing code is taken from fivefilters.org



Installation
------------

1. Download the files

2. FTP the files to a server that supports php

3. Access index.php through your browser. E.g. http://my-host.com/full-text-rss/index.php

4. Enter a URL in the form field to test the code

5. If you get an RSS feed with full-text content, all is working well. :)

Configuration (optional)
------------------------

1. Save a copy of config.php as custom_config.php and edit custom_config.php

2. If you decide to enable caching, make sure the cache folder (and its 3 sub folders) is writable.
(you might need to change the permissions of these folders to 777 through your FTP client).
