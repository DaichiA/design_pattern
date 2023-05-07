FROM nginx:1.22

RUN apt-get update && \
  apt-get install -y nodejs npm && \
  npm install -g n && \
  n 18.15.0

WORKDIR /data