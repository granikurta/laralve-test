# laralve-test


##Запуск docker
 "Переименовать example.env в .env"


`$ docker compose up -d --build`

----
                    
##Основные команды которые нужно выполнить после запуска контейнеров 
  
1)` $ docker exec -it php bash` - баш с соmposer
2 `$ composer install `- установка зависимостей
3)`$ php artisan migration` -выпонить миграции
4)`$ php artisan db:seed --class=ApplicationSeeder` - заполнение базы

----
#####Пример laravel окружения 
    DB_CONNECTION=pgsql
    DB_HOST=postgres 
    DB_PORT=5432 
	DB_DATABASE=laravel
	DB_USERNAME=developer
	DB_PASSWORD=postgres


