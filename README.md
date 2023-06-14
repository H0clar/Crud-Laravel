


migrar tabla users

php artisan migrate --path=database/migrations/2023_06_11_000001_create_users_table.php


migrar tabla task (tarea pa los amigos)

php artisan migrate --path=database/migrations/2023_06_11_000003_create_tasks_table.php



--------------------


migracion seeders


php artisan db:seed --class=UsersTableSeeder


php artisan db:seed --class=RolesTableSeeder


php artisan db:seed --class=TasksTableSeeder
