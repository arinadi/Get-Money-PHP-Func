<?php
require("get_money.php");

$money = [
	100000,
	50000,
	20000,
	5000,
	50,
	100,
];
$nominal = 1895250;

$get_money = get_money($nominal, $money);

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