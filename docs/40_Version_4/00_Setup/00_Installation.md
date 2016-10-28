## Setup the package

### Composer

Require the package via composer and download the files: 

```
composer require fenos/notifynder:^4.0
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

If you want to access the notifications that are send to a model you have to use the Trait. For Laravel5.3 you need a different trait `\Fenos\Notifynder\Traits\NotifableLaravel53` it comes with same functionality but the relation method is renamed cause of the conflict with the new internal notification system.

```php
namespace App\Models;

use Fenos\Notifynder\Traits\Notifable as NotifableTrait; // for Laravel 5.0+
use Fenos\Notifynder\Traits\NotifableLaravel53 as NotifableTrait; // for Laravel 5.3+
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

// some more examples
$user->notifications()->byCategory('user.following')->get(); // all notifications in category 'user.following'
$user->notifications()->byRead(1)->get(); // all read notifications
$user->notifications()->byRead(0)->get(); // all unread notifications
```