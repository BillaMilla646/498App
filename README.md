# 498App
Study app for 498

Homepage to website: http://ctma226.netlab.uky.edu/498App/src/index.html
add a new line for demo

test locallrepo upload
In order to run our application you need a LAMP server. LAMP is an acronym for Linux, Apache, MySQL, and PHP. We are using the following versions:

Linux: Ubuntu 14.04
Apache:2.4.7
MySQL:5.5.53
PHP: 5.5.9

There are numerous online tutorials on how to set this up, but we recommend using this one https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu.

We also recommend using phpMyAdmin as a nice gui for the mysql database (https://help.ubuntu.com/community/phpMyAdmin). With these in place, you are ready to run our code. This can be done by changing your directory to /var/www/html/ and cloning this repo. This repo will have all the files needed to run the server.

In order to initialize the database, upload the StudyBuddy.sql file into phpmyadmin. This will create the database and add in some default chatrooms and users. It may be necessary to change the functions/config.php file so that the host, user, and password for PhpMyAdmin reflects what you set it up to be.
