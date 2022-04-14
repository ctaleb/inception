VM_PATH	=	/home/ctaleb/data/
LC_PATH	=	/Users/ctaleb/cursus42/inception/data/

PATH	=	$(VM_PATH)

all:
	mkdir -p $(PATH)db/
	mkdir -p $(PATH)wp/
	docker-compose -f srcs/docker-compose.yml up -d

build:
	mkdir -p $(PATH)db
	mkdir -p $(PATH)wp
	docker-compose -f srcs/docker-compose.yml up -d --build

stop:
	docker-compose -f srcs/docker-compose.yml down

clean:
	docker-compose -f srcs/docker-compose.yml down --rmi all

fclean:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(PATH)

free:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(PATH)
	docker system prune -a

re: stop build

reset:
	"docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null"

.PHONY: fclean all clean free stop build re reset