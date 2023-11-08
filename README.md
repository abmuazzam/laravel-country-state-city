Laravel Country, State and City
======

World's Country, State and City Provider for Laravel.


Installation
-----

```
composer require ab-muazzam/country-state-city
```

To publish configurations,

```
php artisan world-data:publish
```


Usage
-----
To get all the data from Country:

```php
use App\Models\Country;

// To get all the countries
$countries = Country::all();


// To get all the states from country
$states = Country::where('name','india')->first()->states; 
$stateNames = Country::where('name','india')->first()->states->pluck('name');


// To get all the cities from country
$cities = Country::where('name','india')->first()->cities; 
$cityNames = Country::where('name','india')->first()->cities->pluck('name');
```

To get all the data from State:

```php
use App\Models\State;

// Retrieve all the states
$states = State::all();


// Retrieve country of any state
$country = State::where('name','quebec')->first()->country; 


// Retrieve all the cities of any state
$cities = State::where('name','quebec')->first()->cities; 
```

To get all the data from City:

```php
use App\Models\City;

// Retrieve all the cities
$cities = City::all();


// Retrieve state of any city
$state = City::where('name','montreal')->first()->state; 


// Retrieve country of any city
$country = City::where('name','montreal')->first()->state->country; 
```

License
-----
This package is licensed under the `MIT` License. Please see the [License File](https://github.com/abmuazzam/laravel-country-state-city/blob/master/LICENSE) for more details.
