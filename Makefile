VM_PATH	=	/home/ctaleb/data/inception/
LC_PATH	=	/Users/ctaleb/cursus42/inception/data/

all:
	mkdir -p $(LC_PATH)db
	mkdir -p $(LC_PATH)wp
	docker-compose -f srcs/docker-compose.yml up -d

build:
	mkdir -p $(LC_PATH)db
	mkdir -p $(LC_PATH)wp
	docker-compose -f srcs/docker-compose.yml up -d --build

stop:
	docker-compose -f srcs/docker-compose.yml down

clean:
	docker-compose -f srcs/docker-compose.yml down --rmi all

fclean:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(LC_PATH)

free:
	docker-compose -f srcs/docker-compose.yml down --rmi all -v
	rm -rf $(LC_PATH)
	docker system prune -a

re: stop build

.PHONY: fclean all clean free stop