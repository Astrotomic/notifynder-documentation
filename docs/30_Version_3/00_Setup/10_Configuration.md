The following will explain all the keys in the configuration file `config/notifynder.php`

### Models

The **model** key: is thought for none polymorphic usecases and should contain the namespaced classname to your model that sends and receives notifications.

The **polymorphic** key: is a bool to let the package know if it is polymorphic or not.

The **notification_model** key: is made for devs that want to override the default Notification model to customize some behaviours - the value should be the namespaced classname to the notification model.
 
### Parser
 
The **strict_extra** key: is a boolean that decides if there should be an `ExtraParamsException`if an extra value in the template isn't present in the model or if the placeholder should just get removed.
  
The **translations** key: is an array with all translations in all supported languages for the notifications.

### Builder

The **additional_fields.required** key: is an array with additional fields that should be present in every notification.

The **additional_fields.fillable** key: is an array with additional fillable fields - these are fields that are added to the database and can get filled but are not required. Fields in the `additional_fields.required` are added automatically.