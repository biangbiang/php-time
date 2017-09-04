# php-time

## install

```bash
composer require biangbiang/time
```

## Usage

```php
<?php

require 'vendor/autoload.php';

$time = new Biang\Time\Time();
$now_timestamp              = $time->get_now_timestamp();
$now_datetime               = $time->get_now_datetime();
$today_start_timestamp      = $time->get_today_start_timestamp();
$today_start_datetime       = $time->get_today_start_datetime();
$yesterday_start_timestamp  = $time->get_yesterday_start_timestamp();
$yesterday_start_datetime   = $time->get_yesterday_start_datetime();
$tomorrow_start_timestamp   = $time->get_tomorrow_start_timestamp();
$tomorrow_start_datetime    = $time->get_tomorrow_start_datetime();
$next_month_start_timestamp = $time->get_next_month_start_timestamp();
$next_month_start_datetime  = $time->get_next_month_start_datetime();
$next_year_start_timestamp  = $time->get_next_year_start_timestamp();
$next_year_start_datetime   = $time->get_next_year_start_datetime();
```

