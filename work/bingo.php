<?php

namespace MyApp;

class Bingo {

  public function create() {
  $nums = [];

  for ($i = 0; $i < 5; $i++) {
    $col = range($i * 15 + 1, $i * 15 + 15);
    shuffle($col);
    $nums[$i] = array_slice($col, 0, 5);
  }

  // 中央だけ数字ではなくFREEにする
  $nums[2][2] = 'FREE';
  return $nums;
  }
}
