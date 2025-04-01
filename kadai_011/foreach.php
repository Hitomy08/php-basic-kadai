<?php
$food = [
  '名前' => '玉ねぎ',
  '値段' => 200,
  '産地' => '北海道'
];

foreach ($food as $key => $value) {

  echo "{$key}：{$value} <br>";
}
