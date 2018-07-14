<?php

function permutations($array)
{
 $list = array();
 for ($i=0; $i<=6; $i++) {
  shuffle($array);
  $tmp = implode(',',$array);
  if (isset($list[$tmp])) {
   $list[$tmp]++;
  } else {
   $list[$tmp] = 1;
  }
 }
 ksort($list);
 $list = array_keys($list);
 return $list;
}
$perms = permutations(range(1, 4));
echo '<pre>' . print_r($perms, true) . '</pre>';

?>