If you want to display notifications in a view you have to query them at first and after this you can display them in blade like all the other Laravel models.

### Controller

```php
public function getIndex()
{
    $user = \Auth::user();
    $notifications = $user->getNotifications(25);
    
    return view('notification.index')->with(compact($user, $notifications));
}

public function getRead(Notification $notification)
{
    $notification->read();
    if(empty($notification->url)) {
        return redirect()->back();
    }
    return redirect()->to($notification->url);
}
```

### View

```html
<ul id="notifications-list">
    @foreach($notifications as $notification)
        <li class="@if(!$notification->read) active @endif">
            <a href="{{ route('notification.read', $notification->getKey()) }}">
                <span class="text-content">
                    {{ $notification->text }}
                </span>
                <span class="date">
                    {{ $notification->created_at->diffForHumans() }}
                </span>
            </a>
        </li>
    @endforeach
</ul>
```