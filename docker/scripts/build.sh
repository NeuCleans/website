#!/bin/bash

if [ -z "$1" ]; then
    echo "missing image tag"
    exit 1
fi

# if [ "$1" == 'prod' ]; then
FILE="$PROJECT_DIR/docker/Dockerfile"
# else
#     FILE="$PROJECT_DIR/docker/Dockerfile.dev"
# fi

# docker build -t user1m/neuweb:$1 \
# 	-f $CURRENT_PROJECT_PATH/docker/Dockerfile \
# 	$CURRENT_PROJECT_PATH/.

docker build \
-f $FILE \
-t $AWS_ACCOUNT_ID.dkr.ecr.us-west-2.amazonaws.com/neucleans/$IMAGE_TAG \
$PROJECT_DIR/.

