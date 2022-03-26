# liga.local
CRUD Liga de fútbol -> Sprint 4 - It Academy

1. Renombrar el .env.example en .env

2. Generar clave key con el siguiente comando:
php artisan key:generate (Este paso en este caso no es necesario ya que la key está en .env.example. Añado este punto ya que al descargarme el proyecto en otro ordenador, he tenido que realizar este paso, pero ahora con la información copiada en .env.example, ya no será necesario.)

3. Crear la bbdd con el nombre que hemos utilizado en el archivo .env. Ejemplo: en este proyecto se llama liga_db

4. Generar la migración de la bbdd y realizar los seeders con el siguiente comando:
php artisan migrate:fresh --seed

5. Para usar la app y comprobar su funcionamiento, existen dos usuarios creados:
    Role Admin: con acceso a todas las acciones del CRUD.
    Role User: con acceso a las vistas de index y show, es decir, las operaciones de lectura, por lo tanto el usuario no podrá realizar las acciones de eliminar, editar y crear.

Usuario Admin:
````
    'name' => 'Admin',
    'email' => 'admin@prueba.es',
    'password' => bcrypt('admin123')
````
Usuario User:
````
    'name' => 'User',
    'email' => 'user@prueba.es',
    'password' => bcrypt('user1234')
````    

Opcional Crear Virtual Host para la visualización del proyecto liga.local

````
<VirtualHost *:80>
	ServerName liga.test
	DocumentRoot "c:/wamp64/www/liga.local/public"
	<Directory  "c:/wamp64/www/liga.local/public">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
````

