## Extend Senders

Notifynder allows you to extend it's way to deliver the notifications, for example will be the case when you are repeating your self composing a simple notification or if you want automate an action before sending.

### Create Custom Sender

For create a custom sender is easy, follow the following snippet:

```php
namespace App\Senders;

use Fenos\Notifynder\Contracts\SenderContract;
use Fenos\Notifynder\Contracts\SenderManagerContract;
class CustomSender implements SenderContract
{
    protected $notifications;
    
    public function __construct(array $notifications)
    {
        $this->notifications = $notifications;
    }
    
    public function send(SenderManagerContract $sender)
    {
        // Do your extra logic here
        foreach($this->notifications as $notification) {
            $message = $notification->getText(); // get the parsed notification text
        }
        return true; // or false if not successfull
    }
}
```

### Register Sender

Now let's register it in the `App\Providers\AppServiceProvider` as the following:

```php
namespace App\Providers;

use App\Senders\CustomSender;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        app('notifynder')->extend('sendCustom', function (array $notifications) {
            return new CustomSender($notifications);
        });
    }
}
```

### Use custom Sender

Now you are ready to send with your custom method created:

```php
Notifynder::category('sayhello')
           ->from(1)
           ->to(2)
           ->url('http://localhost')
           ->extra(compact('period_day'))
           ->sendCustom();
```