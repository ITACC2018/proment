Installation on OpenSuse
========================

OpenSuse Leap 42.3
------------------

```bash
# install required packages
sudo zypper install apache2-mod_php7 php7-openssl php7-gd php7-mbstring php7-mcrypt php7-mysql php7-xmlrpc php7-ctype php7-json

# enable php7
sudo a2enmod php7

cd /srv/www/htdocs

# Download the latest release from https://github.com/Kanboard/Kanboard/releases

sudo wget https://github.com/Kanboard/Kanboard/archive/v<version>.zip
sudo unzip Kanboard-<version>.zip

# Add permissions
sudo chown -R wwwrun /srv/www/htdocs/Kanboard-<version>/app/data

# restart apache
sudo rcapache2 restart

# cleanup
sudo rm Kanboard-<version>.zip
```

