# Simple Relational DB performance Testing

This repo is initialized with Laravel 9 and PHP 8.1.

```sh
composer create-project --prefer-dist laravel/laravel mysql-db-testing
```

Populate DB with laravel db migration command with seed.

## Requirements

- PHP 8.0+
- Composer 2

- Install deps.

    ```sh
    composer install
    ```

- Create `.env` file.

    ```sh
    cp .env.example .env
    ```

- Run the migration with seed. You may need to run this in the background. It might fail if you run it with SSH and your SSH disconnects.

    ```sh
    php artisan migrate:refresh --seed -vvv
    ```
