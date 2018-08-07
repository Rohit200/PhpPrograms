<?php
include 'Utility.php';
include 'LinkedList.php';
$a2=array();
$l1=new LinkedList();
$filecontents = file_get_contents('user.txt');
$words = preg_split('/,+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);
for( $i=0;$i < sizeof($words); $i++)
{
    $n=is_numeric($words[$i]);
    if ($n!=1)
    {
        $k=$words[$i];
        $l1->addLast($k);
    }
   
}
print_r($words);
$r=$l1->size();
for($i=1;$i<=$r;$i++)
{
    $k=$l1->get($i);
    echo $k." ";
    $a2[$i-1]=$k;
}
echo "Enter the String to be search \n";
$k=getString();
if(is_numeric($k)!=1)
{
    $k2=strtolower($k);
    $k1=ucfirst($k2);
    $n=$l1->searchString($k1);
        if($n!=1)
        {
            echo "String not found and added \n";
            $myfile=fopen("user.txt","a");
            fwrite($myfile,$k1.",");
            fclose($myfile);
        }
        else
        {
        echo "String found \n";
          $l1->deleteNode($k1);
          unlink("user.txt");
          $myfile=fopen("user.txt","a");
          for($i=1;$i<$l1->size();$i++)
          {
              $k2=$l1->get($i);
            fwrite($myfile,$k2.",");
         
        }
        fclose($myfile);
        
    } 
    
}
$l1->display();
?>