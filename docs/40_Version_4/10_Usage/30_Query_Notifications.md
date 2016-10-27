## From Receiver

If you have added the trait to the receiver model (`User`) you can access all, by this single user, received notifications by using the trait methods.

### Example

```php
$user = User::first();
$notifications = $user->getNotifications(); // all notifactions desc ordered by created_at
$notifications = $user->getNotifications(null, 'asc'); // all notifactions asc ordered by created_at
$notifications = $user->getNotifications(10); // 10 notifactions desc ordered by created_at
$notifications = $user->getNotifications(10, 'asc'); // 10 notifactions asc ordered by created_at
$notifications = $user->getNotificationRelation() // get all notifications in category 2 that are not expired and order by read status
                    ->where('category_id', 2)
                    ->where(function($query) {
                        $query
                            ->whereNull('expires_at')
                            ->orWhere('expires_at', '>=', Carbon::now());
                    })
                    ->orderBy('read', 'asc')
                    ->get();
```

## From Model

You also can use the `\Fenos\Notifynder\Models\Notification` model as every other Laravel model. With this you can query over all notifications that are in your database.
For reference how to query Laravel models please take a look in the [Laravel Docs](https://laravel.com/docs).