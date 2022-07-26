# Simple Relational DB performance Testing

Populate DB with laravel db migration command with seed.

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
