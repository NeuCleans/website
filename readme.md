# Neu's [website](https://www.neucleans.com/)

> Dockerized version of the website 

* Nginx Server running PHP & optimized for HTTPS

## Running

```
docker run --rm -itd \
	-p 8080:80 \
	--name neuwebprod \
	user1m/neuweb:v1
```


## Building

```
> ./docker/scripts/build v1
> ./docker/scripts/run.dev v1
```

