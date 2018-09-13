FROM php:7.1-apache

# update sourcelist to local repo
RUN sed 's/deb.debian.org/ftp.is.co.za/g' -i /etc/apt/sources.list \
    && apt-get update && apt-get install -yq \
    zlib1g-dev unzip git bzip2 libbz2-dev\
#    GD
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
#    Mcrypt
    libmcrypt-dev \
    libxml2  libxml2-dev \
#    conveniece tools..
    net-tools tcpdump iputils-ping telnet dnsutils vim \
#    Cleanup apt
    && apt-get clean && apt-get autoremove -y && rm -rf /var/lib/apt/lists/*
#   zip
RUN docker-php-ext-install -j$(nproc) zip  \
#    gd
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) soap  \
#   mcrypt
    && docker-php-ext-install mcrypt \
#    pdo_mysql
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install -j$(nproc) bcmath \
    intl \
    mysqli \
    wddx \
    bz2

# PHP ini..
COPY ./files/usr/local/etc/php/php.ini /usr/local/etc/php/
