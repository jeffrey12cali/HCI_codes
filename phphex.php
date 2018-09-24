<?php
  function hex_ver($num){
    if ($num >=0 and $num <= 9){
      return $num;
    }
    else{
      if ($num == 10)
        return 'A';
      elseif ($num == 11)
        return 'B';
      elseif ($num == 12)
        return 'C';
      elseif ($num == 13)
        return 'D';
      elseif ($num == 14)
        return 'E';
      elseif ($num == 15)
        return 'F';
    }
  }
  function rgb_to_hex($dec){
  $dec = int($dec);
    $prev = 0;
    while ($dec > 0){
      $mod = $dec % 16;
      $mod = hex_ver($mod);
      $prev += $mod;
      $dec = int($dec/16);
    }
    print($prev);
  return $prev;
  }
  $var = int(66)

  rgb_to_hex($var);
?>