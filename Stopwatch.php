<?php

include 'Utility.php';
echo "Enter the number 5 to start timer \n";
$start;
$stop;
 $n=getInt();
 if($n==5)
     {
     $start=starttimer();
     }
     else
     {
     echo "You had entered wrong number to start the timer";
     }

     echo "Enter the number 6 to stop timer \n";
     $n1=getInt();
     if($n1==6)
     {
         $stop=stoptimer();
     }
     else
     {
     echo "You had entered wrong number to stop the timer";
     }

     if($start!=NULL && $stop!=NULL)
             {
         $elapsedtime=$stop-$start;
         echo "Elapsed time is ".$elapsedtime;
     }
     else
     {
         echo "Please try again";
     }

   
?>