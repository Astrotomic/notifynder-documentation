## Extend Senders

Notifynder allows you to extend it's way to deliver the notifications, for example will be the case when you are repeating your self composing a simple notification or if you want automate an action before sending.

### Create Custom Sender

For create a custom sender is easy, follow the following snippet:

```php
use Fenos\Notifynder\Contracts\Sender;
use Fenos\Notifynder\Contracts\NotifynderSender;

class CustomSender implements Sender
{
    protected $notifications;

    public function __construct($notifications) 
    {
        $this->notifications = $notifications;
    }

    public function send(NotifynderSender $sender)
    {
        // Do your extra logic here
        return $sender->send($this->notifications);
    }
}
```

### Register Sender

Now let's register it in the `App\Providers\AppServiceProvider` as the following:

```php
Notifynder::extend('sendCustom', function($notifications,$app) {
    return new CustomSender($notifications);
});
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