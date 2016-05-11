# osticket-v1.10-rc.2
-- After cloning it you will have osticket-v1.10-rc.2/upload folder and that's the base folder for the app.  Next steps are to prep it so that apache can serve it under http://localhost/osticket
1) Optional, I personally like links so I do this: ln -s osticket-v1.10-rc.2 osticket
2) Make sure everyone can read it the files: chmod uog+r -R osticket-v1.10-rc.2
3) edit /etc/apache2/httpd.conf and fine the line "Include /private/etc/apache2/extra/httpd-vhosts.conf" and ensure it's uncommented.
4) edit /etc/apache2/extra/httpd-vhosts.conf and add the following, assuming ur folder is at: "/Users/jyuan/Documents/eku/osticket/upload/"
Add the text under <VirtualHost> stanza:
    Alias /osticket/ /Users/jyuan/Documents/eku/osticket/upload/
    <Directory "/Users/jyuan/Documents/eku/osticket/upload/">
        Options Indexes
        DirectoryIndex index.php
        AllowOverride None
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
5) restart apache 'sudo apachectl restart'
6) Now logon to your mysql instance: mysql -u root -p 
7) Create a database called osticket: create database osticket
8) point the browser to http://localhost/osticket and installation page will show up.  Follow the instructions in the wizard and when it's prompting you for database connection information just ensure the instance is called "osticket" and user name password is root/{whatever ur passwd is}
