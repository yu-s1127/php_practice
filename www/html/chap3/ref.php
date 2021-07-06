<?php
# 値渡し
$a = 1;
$b = $a;
$a = 5;
print "Aの値は{$a}";
print "Bの値は{$b}";

#参照渡し
$b = &$a;
$a = 100;
print "Aの値は{$a}";
print "Bの値は{$b}";
