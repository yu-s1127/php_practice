<?php

# 任意精度数学関数
# 小数点一桁まで計算する
$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul);