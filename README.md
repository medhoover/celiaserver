CeliaLib
=====

The webserver for [CeliaLib](https://github.com/medhoover/celialib) Mobile App.

###Installation

- Clone the repository in you localhost enviroment so that the web server can be accessed via http://localhost/celialibrary/web/main/ . Don't bother the database error, it will be fixed in the next steps.
- Import the celialibrary.sql to you local sql server (using phpmyadmin create a new database, name it celialibrary and import the database inside).
- Configure the database connection parameters in _app\config\parameters.yml_ .
- Clear symfony cache by running this command in the application root (celialibrary): _php app\console cache:clear --env=pro --no-debug_ .

###Usage

You can access the application dashboard via [http://localhost/celialibrary/web/main/](http://localhost/celialibrary/web/recettes/2) .

User: _admin_.
Password: _admin_.

You can get the application services via:
- Product list: [http://localhost/celialibrary/web/produits/](http://localhost/celialibrary/web/produits/)
- Recipes list: [http://localhost/celialibrary/web/recettes/](http://localhost/celialibrary/web/recettes/)
- Recipe (example 2nd recipe): [http://localhost/celialibrary/web/recettes/2](http://localhost/celialibrary/web/recettes/2)
