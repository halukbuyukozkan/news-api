# Deploy

-   composer install
-   cp .env.example .env
-   env DB_DATABASE=news DB_USERNAME=#### DB_PASSWORD=#### // set your database credentials
-   php artisan key:generate
-   php artisan migrate:fresh --seed
-   php artisan jwt:secret
-   php artisan serve
