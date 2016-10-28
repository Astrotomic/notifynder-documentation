Creating a notification category is the first and basic step to use this package. Like all other Laravel Eloquent Models you can create them in migrations and/or seeds.

### Attributes

* **name** - this is the name/key of the category to find it by a string and not just the ID. This field must be unique and we force it to be lowercase, alpha-numeric with underscores and dots. This can be also a dot separated key to have the categories in something like namespaces.
* **text** - this field is optional if you use translations. If not this is the template for all notifications in this category. You can use placeholders like `{from.name}` - these placeholders are dot separated array keys on the Notification model.

### Example

```php
$category = \Fenos\Notifynder\Models\NotificationCategory::create([
    'name' => 'user.follow', // we recommend lowercase and dot seperated names
    'text' => 'Hello {to.name}, {from.name} is now following you and want to let you know "{extra.message}".',
]);
```