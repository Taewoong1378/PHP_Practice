<?php
$f = -50;
while ($f <= 50) {
    $c = ($f - 32) * (5/9);
    printf("화씨 %d도 = 섭씨 %d도\n", $f, $c);
    $f += 5;
}