## The Builder

The Notifynder notification builder is callable directly or via the `Notifynder` facade. We really recommend to use the facade cause this is the supported public API.

### single Notification

```php
\Notifynder::category('user.following') // define the category to send
    ->from($sender) // define the sender of the notification
    ->to($receiver) // define the receiver of the notification
    ->url('http://notifynder.info') // define the url for the notification
    ->extra(['message' => 'Hey John, I\'m Doe.']) // define additional data
    ->expire(Carbon::tomorrow()) // define an expire date for the notification
    ->send(); // send the notification
```

### anonymous Notification

```php
\Notifynder::category('user.following') // define the category to send
    ->anonymous() // force an anonymous notification sender
    ->to($receiver) // define the receiver of the notification
    ->url('http://notifynder.info') // define the url for the notification
    ->extra(['message' => 'Hey John, I\'m Doe.']) // define additional data
    ->expire(Carbon::tomorrow()) // define an expire date for the notification
    ->send(); // send the notification
```

### extend Notification extra

```php
\Notifynder::category('user.following') // define the category to send
    ->anonymous() // force an anonymous notification sender
    ->to($receiver) // define the receiver of the notification
    ->url('http://notifynder.info') // define the url for the notification
    ->extra(['message' => 'Hey John, I\'m Doe.']) // define additional data
    ->extra(['action' => 'invitation'], false) // extend additional data
    ->expire(Carbon::tomorrow()) // define an expire date for the notification
    ->send(); // send the notification
```

### multiple Notifications

```php
\Notifynder::loop($receivers, function(\Fenos\Notifynder\Builder\Builder $builder, $receiver) use ($sender) {
    $builder->category('user.following') // define the category to send
        ->from($sender) // define the sender of the notification
        ->to($receiver) // define the receiver of the notification
        ->url('http://notifynder.info') // define the url for the notification
        ->extra(['message' => 'Hey John, I\'m Doe.']) // define additional data
        ->expire(Carbon::tomorrow()) // define an expire date for the notification
})->send(); // send the notification
```

### setting custom fields

If you have added some custom fields to the database and want to set them with the builder you can do it with the `setField()` method. To do this the column name must be configured in the `additional_fields` array.

```php
\Notifynder::category('user.following') // define the category to send
    ->from($sender) // define the sender of the notification
    ->to($receiver) // define the receiver of the notification
    ->setField('customer_id', $customer->getKey()) // set the customer_id field
    ->send(); // send the notification
```