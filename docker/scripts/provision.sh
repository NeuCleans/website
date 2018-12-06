#!/bin/bash

if [ -z "$1" ] || [ "$1" != "dev" ] && [ "$1" != "prod" ]; then
    echo "ERROR: missing env mode [dev, prod]"
    exit 1
fi

if [ -z "${CIRCLECI}" ]; then
    docker rmi -f $(docker images -f dangling=true) || true
    # https://stackoverflow.com/questions/32490229/how-can-i-delete-docker-images-by-tag-preferably-with-wildcarding
    docker rmi -f $(docker images | grep 'neuweb-' | tr -s ' ' | cut -d ' ' -f 3) || true
    IDS=$(docker ps | grep 'neuweb-' | tr -s ' ' | cut -d ' ' -f 1)
    docker stop $IDS || true
    docker rm $IDS || true
    # sleep 10
    
    export SCRIPT_DIR=$(cd $(dirname "${BASH_SOURCE[0]}") && pwd)/../../ #../web/
    export PROJECT_DIR=$(cd "${SCRIPT_DIR}" && pwd)
    # export ACCOUNT_UUID=$(echo $RANDOM | tr '[0-9]' '[a-zA-Z]')
    export IMAGE_TAG="neuweb:$1"
fi

source $PROJECT_DIR/docker/scripts/build.sh $1
if [ -z "$2" ] || [ "$2" != "build" ]; then
    source $PROJECT_DIR/docker/scripts/run.sh $1
fi
