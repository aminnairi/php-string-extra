FROM php:8.0.0-alpine

ARG USER_IDENTIFIER
ARG USER_GROUP_IDENTIFIER
ARG COMPOSER_VERSION

RUN addgroup -g $USER_IDENTIFIER -S user \
  && adduser -h /home/user -g "" -s /bin/sh -G user -SDu $USER_GROUP_IDENTIFIER user \
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php --version $COMPOSER_VERSION --filename composer --install-dir /usr/local/bin \
  && php -r "unlink('composer-setup.php');"

USER user

WORKDIR /home/user

ENTRYPOINT [ "composer" ]
CMD [ "--help" ]
