## Setup the package

### Composer

Require the package via composer and download the files: 

```
composer require fenos/notifynder:^3.0
```

### Config

Add the following string to `config/app.php`

```php
'providers' => [
    Fenos\Notifynder\NotifynderServiceProvider::class,
],
'aliases' => [
    'Notifynder' => Fenos\Notifynder\Facades\Notifynder::class,
],
```

### Artisan

Publish the migration and the configuration of notifynder with the following command:

```
php artisan vendor:publish --provider="Fenos\Notifynder\NotifynderServiceProvider"
php artisan migrate
```

## Setup your Models

If you want to access the notifications that are send to a model you have to use the Trait.

```php
namespace App\Models;

use Fenos\Notifynder\Notifable as NotifableTrait;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class User extends EloquentModel
{
    use NotifableTrait;
}
```

After this you can access all notifications send to this model with a normal laravel relationship method.

```php
$user = User::first();
$notifications = $user->notifications;
```