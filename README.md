# City Service

Used technologies stack

1. Laravel
2. Postgres (as database)
3. Nginx (as main web server)
4. Caddy (as dev web server)
5. Redis
6. Docker (for deploy)
7. Apidoc (documentation for api) http://apidocjs.com/


Install project
1. create CaddyFile /docker/caddy/Caddyfile
2. create /api-doc/apidoc.json
3. create .env in root
4. docker network create city-service-proxy
5. docker compose up
6. docker exec -i -t city_service_app bash
7. composer install (into docker container)
8. npm i
9. node_modules/apidoc/bin/apidoc -i api-doc -o public/api-doc
10. php artisan migrate
11. php artisan db:seed
12. php artisan passport:install

