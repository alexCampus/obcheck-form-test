#!/bin/bash
Uwamp='c:\uwamp' # A personnaliser avec le repertoire d'install de uwamp
sed -e "s/{PHPEXTPATH}/$(echo ${Uwamp} | sed -e 's/[]\/$*.^|[]/\\&/g')\\\bin\\\php\\\php-5.6.18\\\ext/g" -e "s/{APACHEPATH}/$(echo ${Uwamp} | sed -e 's/[]\/$*.^|[]/\\&/g')\\\apache/g" -e "s/{PHPZENDPATH}/$(echo ${Uwamp} | sed -e 's/[]\/$*.^|[]/\\&/g')\\\bin\\\php\\\php-5.6.18\\\zend_ext/g" -e "s/{TEMPPATH}/$(echo ${Uwamp} | sed -e 's/[]\/$*.^|[]/\\&/g')\\\temp/g" -e "s|^;\(date\.timezone[[:space:]]*=\).*|\1 \"Europe/Paris\"|g" ${Uwamp}/bin/php/php-5.6.18/php_uwamp.ini  > php.ini
echo "export PATH=\$PATH:'${Uwamp}\bin\database\mysql-5.7.11\bin\:${Uwamp}\bin\php\php-5.6.18\'"  >> ~/.bashrc
source ~/.bashrc

php -r "copy('http://getcomposer.org/composer.phar', 'composer.phar');"
php -c ./php.ini ./composer.phar install;

cp .env.example .env;
php artisan key:generate;

