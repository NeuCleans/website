# Neu's [website](https://www.neucleans.com/)

> Dockerized version of the website

* Nginx Server running PHP & optimized for HTTPS

## Current version

* v3

## Running

```
> ./docker/scripts/run.dev.sh $current_version
```

## Building

```
> ./docker/scripts/build.sh $current_version
> ./docker/scripts/run.dev.sh $current_version
```

Where [`$current_version`](https://github.com/NeuCleans/website/blob/master/readme.md#current-version) is something like `v1`


## Pushing to AWS Container Repo

```
> $(aws ecr get-login --region us-west-2 --profile neucleans)
```

If you encounter the following error:

```
....
CJleHBpcmF0aW9uIjoxNTI1NzY0OTEzfQ== -e none https://978098345431.dkr.ecr.us-west-2.amazonaws.com
unknown shorthand flag: 'e' in -e
```
Then remove the `-e none` and try again

Lastly,

```
> docker push $AWS_ACCOUNT_ID.dkr.ecr.us-west-2.amazonaws.com/neucleans/neuweb:$current_version
```