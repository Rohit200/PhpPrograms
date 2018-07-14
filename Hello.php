<?php
$subject= "Hello <<UserName>>, How are you? \n";
$search="<<Username>>";
echo "Enter the name \n"  ;
fscanf(STDIN, "%s", $name);
echo $name;
echo str_replace($search,$name,$subject);
?><?php
echo "Hello World";
$value1 =25;
$value2=40;
echo "addtion is ",$value1+$value2  ;
?>
