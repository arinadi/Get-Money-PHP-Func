<?php

function get_money_fr_nominal($nominal, $money)
{
	arsort($money);
	$remains = $nominal;
	$money_receipt = [];
	foreach ($money as $key) {
		if ($remains != 0) {
			$money_receipt[$key] = floor($remains / $key);
			$remains = $remains % $key;
		}
	}
	if ($remains > 0) {
		$money_receipt['remains'] = $remains;
	}
	return $money_receipt;
}

$money = [
	100000,
	50000,
	20000,
	5000,
	50,
	100,
];
$nominal = 1895250;

$get_money = get_money_fr_nominal($nominal, $money);

echo "Budi ingin mengambil uang tabungannya yang berada di bank sejumlah Rp 1.895.250. Pada saat ini, uang
pecahan yang belaku adalah Rp 100.000,00,-; Rp 50.000,-; Rp 20.000,-; Rp 5.000,-; Rp 100,-; dan Rp 50,-. Dengan
menggunakan script PHP, tentukan ada berapa banyak masing-masing uang pecahan yang akan diterima Budi
untuk semua tabungannya!<br><br>";

echo 'Nominal Rp ' . number_format($nominal, 2, ",", ".") . '<br>';
foreach ($get_money as $key => $value) {
	if ($key != 'remains') {
		echo 'Rp ' . number_format($key, 2, ",", ".") . " menerima " . $value . "<br>";
	} else {
		echo 'Saldo yang tidak dapat di ambil Rp ' . number_format($value, 2, ",", ".");
	}
}