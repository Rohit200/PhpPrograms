<?php
    include 'Utility.php';
       $win=0;
       $loss=0;
       echo "How many stacks \n";
       $stack= getInt();
       echo  "What is your goals \n";
       $goal = getInt();
       echo "How many trails \n";
       $trails=getInt();
       $i=1;
	while($i<=$trails && $stack>0 && $stack <=$goal)
	{
		$d=rand(0,1);
			if($d<0.5)
			{
				$loss++;
				$stack--;
			}
		else
		{
			$win++;
            $stack++;
        }
        $i++;
    }
    echo "winning chance is ".($win/$trails)*100;
    echo "\n";
    echo "lossing chance is ".($loss/$trails)*100;
    echo "\n";
    

?>