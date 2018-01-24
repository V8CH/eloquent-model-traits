# Eloquent Model Traits
A collection of PHP traits for composing functionality into Eloquent (Laravel) Model classes. _This is
a work-in-progress and not suitable for production use._

#### CreatesUuids.php

Generates a UUID (version 1) and assigns to the configured primary key when creating a Model. Make sure to disable
autoincrementing in the Model class it's applied to:

```php
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
```

#### HasTeamScope.php

Creates a local scope to query a Model class for relations to a `team_id` parameter:

```php
$list = Model::onTeam($teamId)->get();
```

## License

This repository is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).