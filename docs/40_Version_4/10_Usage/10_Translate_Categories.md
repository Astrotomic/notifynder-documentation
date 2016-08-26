It is possible to translate the template of the categories - we use the default [laravel translation](https://laravel.com/docs/5.2/localization) way for this.
 
To translate categories you have to enable it in the configuration file and after this create a new file in your language folder with the translation-domain as filename, by default it's `notifynder`.
Inside this you can place all translations referenced by the category name.

```php
return [
    'user' => [
        'follow' => 'Hello {to.name}, {from.name} is now following you and want to let you know "{extra.message}".',
        'like' => '{from.name} has liked your {extra.post_type}.',
    ],
    'admin' => [
        'new_user' => 'A new user has registered in your application - {from.name}<{from.email}>.',
    ],
];
```