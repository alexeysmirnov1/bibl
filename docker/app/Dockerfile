ARG REGISTRY_PROJECT_NAME=battle
ARG REPOSITORY_NAME=flagstudio
FROM registry.gitlab.com/${REPOSITORY_NAME}/${REGISTRY_PROJECT_NAME}/base:unit
ARG APP_WORKDIR=/var/www
ARG PHP_APP_SOURCE_PATH=.

# Add a non-root user to prevent files being created with root permissions on host machine.
ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

RUN groupadd -g ${PGID} local && \
    useradd -u ${PUID} -g local -m local -G local,unit && \
    usermod -p "*" local


###########################################################################
# Opcache:
###########################################################################

# Copy opcache configration
COPY ./docker/app/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

WORKDIR $APP_WORKDIR

COPY $PHP_APP_SOURCE_PATH $APP_WORKDIR

ARG NGINX_UNIT_CONFIG_FILENAME=unit-php.dev.json
COPY ./docker/app/unit-php.dev.json /unit-php.json
COPY ./docker/app/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh \
    && cp $APP_WORKDIR/.env.example $APP_WORKDIR/.env \
    && composer install --classmap-authoritative  \
    && php artisan key:generate \
    && php artisan storage:link

RUN npm install && npm run build

EXPOSE 8080 8081

ENTRYPOINT ["/entrypoint.sh"]
