<?php
require_once('../dbconfig.php');

for ($i = 1; $i <= 10; $i++) {
    if ($i <= 9)
        $m = '0' . $i;
    else
        $m = $i;

    $date = '2017-' . $m . '-22';

    $r_times = rand(1, 3);
    for ($j = 1; $j <= $r_times; $j++) {
        $r_qty = rand(1, 20);
        $sql = "INSERT INTO orders (cu_id, food_id, orderDate, quantity) VALUES ('1', '2', '$date', '$r_qty')";

        if ($connect->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }
}