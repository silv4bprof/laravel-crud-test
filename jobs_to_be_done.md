# Jobs to be done

- Download the project (or clone using GIT)
- Copy .env.example into .env and configure your database credentials
- Go to the project's root directory using terminal window/command prompt
- Run `composer install`
- Set the application key by running `php artisan key:generate --ansi`
- Set `'collation' => env('DB_COLLATION', 'utf8mb4_0900_ai_ci')` to `'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci')` in `database.php`
- Run migrations `php artisan migrate`
- Start local server by executing `php artisan serve`
- Visit here <http://127.0.0.1:8000/products> to test the application
- Watch <https://www.youtube.com/watch?v=O8fdstRRJhk> to make a Crud.
