#!/bin/bash

if [ -z "$1" ]; then
	echo "missing image tag"
	exit 1
fi

docker run --rm -itd \
	-v $CURRENT_PROJECT_PATH/v1.conf:/etc/nginx/sites-available/default.conf \
	-p 8081:80 \
	--name neuwebprod \
	user1m/neuweb:$1
