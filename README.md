#tipy-project

This is an application skeleton for a typical [tipy](https://github.com/smetana/tipy) project.
You can use it to quickly bootstrap your tipy web app.

##Prerequisites

* PHP 5.5+
* Apache 2
* MySQL
* Git
* Composer

##Installation

```shell
git clone https://github.com/smetana/tipy-project myproject
cd myproject
composer.phar install
```
Add virtual host to apache2

```apache
# /etc/apache2/sites-available/tipy-conf

<VirtualHost 127.0.0.1:80>
    ServerName localhost
    DocumentRoot /home/user/projects/tipy-project/public
    <Directory "/home/user/projects/tipy-project">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
