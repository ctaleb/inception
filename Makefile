VM_PATH	=	/home/ctaleb/data/

all:
	mkdir -p $(VM_PATH)db
	mkdir -p $(VM_PATH)wp
	docker-compose -f srcs/docker-compose.yml up -d

build:
	mkdir -p $(VM_PATH)db
	mkdir -p $(VM_PATH)wp
	docker-compose -f srcs/docker-compose.yml up -d --build

stop:
	docker-compose -f srcs/docker-compose.yml down

clean:
	docker-compose -f srcs/docker-compose.yml down --rmi all

fclean:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(VM_PATH)

free:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(VM_PATH)
	docker system prune -a

re: stop build

reset:
	"docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null"

.PHONY: fclean all clean free stop build re reset