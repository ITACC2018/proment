Kanboard Installation on Debian
===============================

Debian 8 (Jessie)
-----------------

Install Apache and PHP:

```bash
apt-get update
apt-get install -y php5 php5-sqlite php5-gd unzip
service apache2 restart
```

Install Kanboard:

```bash
cd /var/www/html

# Download the latest release from https://github.com/Kanboard/Kanboard/releases
wget https://github.com/Kanboard/Kanboard/archive/v<version>.zip

unzip Kanboard-<version>.zip
chown -R www-data:www-data Kanboard-<version>/data
rm Kanboard-<version>.zip
```

Debian 7 (Wheezy)
-----------------

Install Apache and PHP:

```bash
apt-get update
apt-get install -y php5 php5-sqlite php5-gd unzip
```

Install Kanboard:

```bash
cd /var/www

# Download the latest release from https://github.com/Kanboard/Kanboard/releases
wget https://github.com/Kanboard/Kanboard/archive/v<version>.zip

unzip Kanboard-<version>.zip
chown -R www-data:www-data Kanboard-<version>/data
rm Kanboard-<version>.zip
```

Debian 6 (Squeeze)
------------------

Install Apache and PHP:

```bash
apt-get update
apt-get install -y libapache2-mod-php5 php5-sqlite php5-gd unzip
```

Install Kanboard:

```bash
cd /var/www

# Download the latest release from https://github.com/Kanboard/Kanboard/releases
wget https://github.com/Kanboard/Kanboard/archive/v<version>.zip

unzip Kanboard-<version>.zip
chown -R www-data:www-data Kanboard-<version>/data
rm Kanboard-<version>.zip
```

Notes
-----

Some features of Kanboard require that you run [a daily background job](cronjob.markdown).
