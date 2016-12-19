# LTHealthCheck
----------------
LabTech overall health report dashboard


# ASSUMPTIONS
--------------
LabTech DB Access
Linux VM (with LAMP stack)


# PRE-REQS
-----------

Ubuntu 16.04.1 Setup
(LAMP Stack)

		sudo apt-get update && sudo apt-get -y upgrade
		sudo apt-get -y install apache2
		sudo ufw allow in "Apache Full"
		sudo apt-get -y install mysql-server
		 - (make a note of your 'root' passwd during your install)
		sudo mysql_secure_installation
		sudo apt-get -y install php libapache2-mod-php php-mcrypt php-mysql
		sudo a2enmod rewrite
		sudo systemctl restart apache2
		sudo apache2ctl configtest
		 - (should return ```Syntax OK``` message if successful)
		 sudo shutdown -r now


# INSTALLATION
---------------

-more to follow-
