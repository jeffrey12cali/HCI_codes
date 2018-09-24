<?php
  function hex_ver($num){
    if ($num >=0 and $num <= 9){
      return (string)$num;
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
  function dec_to_hex($dec){
  	$dec = (int)$dec;
    $prev = '';
    if ($dec == 0)
    	return '0';
    while ($dec > 0){
      $mod = $dec % 16;
      $mod = hex_ver($mod);
      if ($mod != '0')
      	$prev = $prev.$mod;
      $dec = (int)$dec/16;
    }
    return strrev($prev);
  }
  function rgb_to_hex($var1,$var2,$var3){
  	print(dec_to_hex($var1).dec_to_hex($var2).dec_to_hex($var3));
  }
  rgb_to_hex(244,66,66);
  //dec_to_hex(244);
?>