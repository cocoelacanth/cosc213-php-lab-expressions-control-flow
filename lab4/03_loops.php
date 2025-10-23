<?php
// 1) for — print multiples of 7 up to 70
for ($i = 7; $i <= 70; $i += 7) {
echo $i, ' ';
}
echo PHP_EOL;

// 2) while — sum numbers until > 100
$sum = 0; $n = 1;
while ($sum <= 100) {
$sum += $n;
$n++;
}
echo "First n where sum>100 is $n, sum=$sum\n";

// 3) do...while — ensure at least one iteration
$count = 0;
do {
$count++;
} while ($count < 1);
echo "do...while ran $count time(s)\n";

// 4) foreach — iterate associative array
$cart = ['pen'=>1.2, 'notebook'=>2.5, 'bag'=>12.0, 'gum'=>0.5];
$subtotal = 0.0;
foreach ($cart as $item=>$price) {
if ($price < 1.0) continue; // skip small items
$subtotal += $price;
}
echo "Subtotal (skip < 1): $subtotal\n";

// 5) Challenge — FizzBuzz 1..30, skip 13
for ($i = 1; $i <= 30; $i++) {
if ($i === 13) continue;
$out = '';
if ($i % 3 === 0) $out .= 'Fizz';
if ($i % 5 === 0) $out .= 'Buzz';
echo $out !== '' ? $out : $i, PHP_EOL;
}

// 6) Multiplication table
echo "<table>\n<tr>\n<th></th>\n";
for ($x = 1; $x <= 10; $x++)
  echo "<th>$x</th>\n";
echo "</tr>\n";

for ($y = 1; $y <= 10; $y++) {
    echo "<tr>\n<th>$y</th>\n";
  for ($x = 1; $x <= 10; $x++) {
    echo "<td>" . ($x * $y) . "</td>\n";
  }
}
?>