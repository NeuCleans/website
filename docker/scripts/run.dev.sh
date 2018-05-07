#!/bin/bash

if [ -z "$1" ]; then
	echo "missing image tag"
	exit 1
fi

docker run --rm -it \
	-v $CURRENT_PROJECT_PATH/homedir/public_html:/var/www/html \
	-v $CURRENT_PROJECT_PATH/v1.conf:/etc/nginx/sites-available/default.conf \
	-p 8084:80 \
	--name neuwebdev \
	user1m/neuweb:$1 \
	bash -c '/start.sh & bash'
