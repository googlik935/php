<?php

$ages = 0;
$work = [
  [
    "name" => "Дно",
    "age" => "20"
  ],
  [
    "name" => "Бомж",
    "age" => "15"
  ],
  [
    "name" => "Днина",
    "age" => "19"
  ],
  [
    "name" => "Бомжик",
    "age" => "28"
  ]
];

foreach ($work as $key => $value) {
  foreach ($value as $k => $v) {
    $ages = $ages + $v;
  }
  $ages = $ages / 4;
}
echo "$ages";

?>
