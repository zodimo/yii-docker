## Setup

install docker and docker-compose

run : 

docker-compose -f docker/docker-compose.yml  up -d
docker container exec yii chmod 777 app/assets/ app/images/tinyii-uploads app/protected/runtime

browse to :http://127.0.0.1
then login with admin:admin
then click on "FileManager-standalone"

and when you are done testing..
docker-compose -f docker/docker-compose.yml  down


 