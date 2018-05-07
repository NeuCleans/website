#!/bin/bash

if [ -z "$1" ]; then
	echo "missing image tag"
	exit 1
fi

docker build -t user1m/neuweb:$1 \
	-f $CURRENT_PROJECT_PATH/docker/Dockerfile \
	$CURRENT_PROJECT_PATH/.
