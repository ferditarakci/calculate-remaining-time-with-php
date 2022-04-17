<?php

date_default_timezone_set('Europe/Istanbul');

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

echo calculateRemaining("2022-04-20 15:25:00");
