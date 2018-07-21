<?php
include 'Utility.php';
$str=array(array(),array());
$str=store($str);
$a=array(0,0,0,0,0,0,0,0,0,0);
$i=1;
while ($i <= 9) {
if ($i % 2 == 0) {
        $r = rand(1,9);

    if (checkDuplicate($a,$r)) {
            $str=CTurn($str,$r);
           $a[$r]=$r;            
        }
       else
          $i--;

    } else
    {
        echo "Enter your box Number \n";
        $r=getInt();
        if (checkDuplicate($a,$r)) {
            
            $a[$r]=$r;   
            $str=UTurn($str,$r);
            
        } else {
            echo "This box is Already filled";
            $i--;
        }
    }
        $i++;
    }
    
    $n1=CWinTest($str);
    $n=UWinTest($str);
    if($n==1)
    echo "You win"."\n";
    else if($n1==1)
    echo "Computer Win \n";
    else
    echo "Match is Drawn \n";
    print_r($str);
    print_r($a);
    ?>