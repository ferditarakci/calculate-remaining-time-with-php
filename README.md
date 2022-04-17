# Calculating remaining time between two dates with PHP
## PHP ile iki tarih arasında kalan süreyi hesaplama

\# 2022-04-17

<br>

```php
function calculateRemaining( $time ) {
	$second = strtotime($time) - time();
	$day = floor($second / 86400);
	$hour = floor($second / 3600) - ($day * 24);
	$minute = floor($second / 60) - (($day * 24 * 60) + ($hour * 60));
	$second = $second - (($day * 24 * 60 * 60) + ($hour * 60 * 60) + ($minute * 60));

	return "
		<b>Kalan:</b>
		$day Gün
		$hour Saat
		$minute Dakika
		$second Saniye
	";
}
```

```php
echo calculateRemaining("2022-04-20 15:25:00")
```

Output TR:
```php
"Kalan: 2 Gün 23 Saat 31 Dakika 57 Saniye"
```

Output EN:
```php
EN: "Remainder: 2 Day 23 Hour 31 Minute 57 Second"
```

