<?php
    include 'Utility.php';
       
       echo "How many stacks \n";
       $stack= getString();
       echo  "What is your goals \n";
       $goal = getString();
       echo "How many trails \n";
       $trails=getString();
       if(filter_var($trails, FILTER_VALIDATE_INT));
        $n=$trails;
       if(filter_var($stack, FILTER_VALIDATE_INT));
       $n1=$stack;
       if(Filter_var($goal, FILTER_VALIDATE_INT));
         $n2=$goal;
       if($n>=1 && $n1>=1 && $n2>=1)
       {
           gambler($n,$n1,$n2);
       }
       else
       echo "Enter the positive whole number \n";

?>