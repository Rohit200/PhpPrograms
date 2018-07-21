<?php

include 'Utility.php';
echo "Enter the number 5 to start timer \n";
$start=0;
$stop=0;
 $n=getString();
 if(filter_var($n.FILTER_VALIDATE_INT))
 {
 if($n==5)
     {
     $start=starttimer();
     }
     else
     {
     echo "You had entered wrong number to start the timer";
     }
    }
    else
    {
    echo "Enter only 5 \n";
    }
     echo "Enter the number 6 to stop timer \n";
     $n1=getString();
     if(filter_var($n1,FILTER_VALIDATE_INT))
     {
     if($n1==6)
     {
         $stop=stoptimer();
     }
     else
     {
     echo "You had entered wrong number to stop the timer";
     }
    }
    else
    echo "Enter only 6 to stop timer \n";

     if($start!=0 && $stop!=0)
             {
         $elapsedtime=$stop-$start;
         echo "Elapsed time is ".$elapsedtime;
     }
     else
     {
         echo "Please try again";
     }

   
?>