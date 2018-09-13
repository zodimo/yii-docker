## Setup

install docker and docker-compose

run : 

docker-compose -f docker/docker-compose.yml  up -d
docker container exec yii chmod 777 app/assets/ app/images/tinyii-uploads app/protected/runtime


and when you are done testing..
docker-compose -f docker/docker-compose.yml  down


 