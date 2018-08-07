<?php
include 'Utility.php';
include 'Queue.php';
echo "Enter the String \n";
$str=getString();
$a=str_split($str);
$que=new Queue();
if(is_numeric($str))
{
    echo "Enter only string \n";
}
else
{
    for($i=0;$i<count($a)/2;$i++)
    {
      $que->enqueue($a[$i]);
    }
    
   $i=count($a)-1;
   while($que->isEmpty()!=1)
   {
       $k=$que->dequeue();
       if($a[$i]==$k)
       {
           $i--;        
       continue;
       }
       else
       {
       break;
       }
      
   }
   $n=$que->isEmpty();
   echo $n."\n";
   if($i<sizeof($a)/2 &&$n==1)
   echo "Palindrome \n";
   else
   echo "Not Palindrome \n";
}

?>