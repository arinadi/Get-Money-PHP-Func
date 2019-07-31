<?php
function get_money($nominal, $money)
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