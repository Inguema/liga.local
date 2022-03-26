# liga.local
CRUD Liga de fútbol
1. Renombrar el .env.example en .env

2. Generar clave key con el siguiente comando:

php artisan key:generate
3. Crear la bbdd con el nombre que tenemos en la bbdd del .env. Ejemplo: en este proyecto se llama liga_db

4. Generar la migración de la bbdd más realizar los seeders con el siguiente comando:
php artisan migrate:fresh --seed

5. Para usar la app y comprobar su funcionamiento, existen dos usuarios creados:
    Role Admin: con acceso a todas las acciones del Crud.
    Role User: con acceso a las vistas de index y show, es decir, las operaciones de lectura.
