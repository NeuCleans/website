#!/bin/bash

if [ -z "$1" ]; then
    echo "missing env mode [dev, prod]"
    exit 1
fi

if [ "$1" == 'prod' ]; then
    docker run --rm -itd \
    -v $CURRENT_PROJECT_PATH/v1.conf:/etc/nginx/sites-available/default.conf \
    -p 8081:80 \
    --name neuweb \
    $IMAGE_TAG
    # --restart always \
else
    docker run --rm -it \
    -v $CURRENT_PROJECT_PATH/homedir/public_html:/var/www/html \
    -v $CURRENT_PROJECT_PATH/v1.conf:/etc/nginx/sites-available/default.conf \
    -p 8081:80 \
    --name neuweb \
    $IMAGE_TAG \
    bash -c '/start.sh & bash'
fi
