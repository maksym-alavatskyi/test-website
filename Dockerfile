FROM alexcheng/apache2-php5:5.6.33

ENV MAGENTO_VERSION 1.9.3.8

RUN a2enmod rewrite

ENV INSTALL_DIR /var/www/html

RUN chown -R www-data:www-data $INSTALL_DIR

RUN apt-get update && \
    apt-get install -y mysql-client-5.7 libxml2-dev libmcrypt4 libmcrypt-dev libpng-dev libjpeg-dev libfreetype6 libfreetype6-dev
RUN docker-php-ext-install soap
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-configure gd --with-jpeg-dir=/usr/lib/ --with-freetype-dir=/usr/lib/ && \
    docker-php-ext-install gd

COPY ./custom-magento-1.9.3.8.tar.gz /tmp
COPY ./bin/install-custom-magento-1.9.3.8 /usr/local/bin/install-test-website-magento-1.9.3.8

RUN cd /tmp && \
    tar xvf custom-magento-1.9.3.8.tar.gz && \
    mv sampledata/* $INSTALL_DIR && \
    rm -rf *

RUN chown -R www-data:www-data $INSTALL_DIR/ecom/media

RUN chmod +x /usr/local/bin/install-test-website-magento-1.9.3.8

RUN bash -c 'bash < <(curl -s -L https://raw.github.com/colinmollenhour/modman/master/modman-installer)'
RUN mv ~/bin/modman /usr/local/bin

RUN 

WORKDIR $INSTALL_DIR