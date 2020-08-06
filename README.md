# Laravel Date Scopes

Provides date scopes for Laravel Eloquent models

## Requirements

* Composer
* Laravel or Lumen
* PHP >= 7.1

## Installation

Install composer package
```
composer require codekj/laravel-date-scopes
```

## Usage

Use `DateScopes` trait in model

```
<?php

namespace App;

use CodeKJ\Laravel\DateScopes;

class User extends Model
{
    use DateScopes;

    /* ... */
}
```

### Methods

> Default date field: `created_at`. All methods can have custom date field parameter, example `today('updated_at')`

| Scope method         | Description                             |
|----------------------|-----------------------------------------|
| `thisSecond()`       | Records in this second                  |
| `lastSecond()`       | Records in last second                  |
| `secondAgo()`        | Records second ago until this moment    |
| `secondsAgo($count)` | Records x seconds ago until this moment |
| `thisMinute()`       | Records in this minute                  |
| `lastMinute()`       | Records in last minute                  |
| `minuteAgo()`        | Records minute ago until this moment    |
| `minutesAgo($count)` | Records x minutes ago until this moment |
| `thisHour()`         | Records in this hour                    |
| `lastHour()`         | Records in last hour                    |
| `hourAgo()`          | Records an hour ago until this moment   |
| `hoursAgo($count)`   | Records x hours ago until this moment   |
| `today()`            | Records today                           |
| `yesterday()`        | Records yesterday                       |
| `dayAgo()`           | Records day ago until this moment       |
| `daysAgo($count)`    | Records x days ago until this moment    |
| `thisWeek()`         | Records this week                       |
| `lastWeek()`         | Records last week                       |
| `weekAgo()`          | Records week ago until this moment      |
| `weeksAgo($count)`   | Records x weeks ago until this moment   |
| `thisMonth()`        | Records this month                      |
| `lastMonth()`        | Records last month                      |
| `monthAgo()`         | Records month ago until this moment     |
| `monthsAgo($count)`  | Records x months ago until this moment  |
| `thisYear()`         | Records this year                       |
| `lastYear()`         | Records last year                       |
| `yearAgo()`          | Records year ago until this moment      |
| `yearsAgo($count)`   | Records x years ago until this moment   |

### Examples

```
// Get records only from today
$todayUsers = User::today()->get();
```
```
// Get records from last minute (previous minute)
// Example: if time is 10:30, you will get records ONLY from 10:29
$lastMinuteUsers = User::lastMinute()->get();
```
```
// Get records from an hour ago until this moment
// Example: if time is 10:30, you will get records from 09:30 until 10:30
$hourAgoUsers = User::hourAgo()->get();
```
```
// Get records from 2 weeks ago until this moment
// Example: if date is 2020-08-30 10:30:00, you will get records from 2020-08-16 10:30:00 until 2020-08-30 10:30:00
$weeksAgoUsers = User::weeksAgo(2)->get();
```

## License
 
The MIT License (MIT)
