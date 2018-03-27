Инсталяция на OpenSuse
======================



OpenSuse Leap 42.1[¶](#opensuse-leap-42-1 "Ссылка на этот заголовок")
---------------------------------------------------------------------



    sudo zypper install php5 php5-sqlite php5-gd php5-json php5-mcrypt php5-mbstring php5-openssl

    cd /srv/www/htdocs

    # Download the latest release from https://github.com/Kanboard/Kanboard/releases
    sudo wget https://github.com/Kanboard/Kanboard/archive/v<VERSION>.zip

    sudo unzip Kanboard-<version>.zip
    sudo chown -R wwwrun /srv/www/htdocs/Kanboard-<version>/data
    sudo rm Kanboard-<version>.zip

 



 



 



[Русская документация Kanboard](http://Kanboard.ru/doc/)

