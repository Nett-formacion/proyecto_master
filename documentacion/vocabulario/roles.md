# Sistema de Roles
Para establecer un control de tipos de usuarios en Laravel, se pueden utilizar varios enfoques
Uno de los métodos comunes es utilizar el sistema de roles y permisos.
Para ello utilizaremos un paquete se ***spatie***:
 https://spatie.be/docs/laravel-permission/v5/introduction
 ***permission***
* Instalación
Instalamos el paquete 
```shell
composer require spatie/laravel-permission
```
Aunque se publica de forma automática el ***service provider***, podemos especificar de manera explícita en el fichero de configuracion config/app.php

```shell
'providers' => [
// ...
Spatie\Permission\PermissionServiceProvider::class,
];
```

## El modelo User
añadimos el traid ***HasRoles*** en el modelo User
```php

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
...
 */

```
Creamos los roles que vamos a utilizar en nuestra aplicación, no siendo ésto algo dinámico en nuestra aplicacion sino que quedarán establecidos los tres roles que vamos a utilizar:

* Profesor
* Alumno
* Admin
