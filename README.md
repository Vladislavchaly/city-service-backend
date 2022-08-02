# Gadget Repair Service

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
3. docker compose up
4. docker exec -i -t gadget_repair_app bash
5. composer install (into docker container)
6. npm i
7. node_modules/apidoc/bin/apidoc -i api-doc -o public/api-doc
8. php artisan migrate
9. php artisan db:seed
10. php artisan passport:install

