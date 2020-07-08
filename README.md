# For TA Purpose

## How to use?
Clone this repository to your /var/www/html

## Use Docker
1. clone this repository
2. Build the Dockerfile
```docker build -t <image_name> .```
3. Run the Docker image
```docker run -p<host-port>:<app-port> -d <image_name> ```