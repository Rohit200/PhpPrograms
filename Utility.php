<?php
/*function count_digit($number)
{
    return strlen((string) $number);
}*/
function getString()
{
      fscanf(STDIN, "%s", $name);
	   return $name;
	
}
function leap($year)
{
	if($year%400==0)
	{
		echo 'Leap Year';	
	}
		
	else if($year%100!=0 && $year%4==0)
		 {
				echo 'Leap Year';
		 }
	
		else
			echo 'Not Leap Year';
}
function getInt()
{
  fscanf(STDIN,"%d",$num);
	return $num;
}
function prime($num)
{
	if($num==2)
		return true;
	$i=2;
	while($i<=$num/2)
	{
		if($num%$i==0)
		{
			return false;
			break;
		}
		$i++;
	}
	if($i>$num/2)
		return true;
}
function storeNumber($array,$n)
{
	for($i=0;$i<$n;$i++)
	{
		$array[$i]=getInt();
	}
	return $array;
}

function starttimer()
{
    $i=microtime();
	return $i;
}

function stoptimer()
{
    $i=microtime();
	return $i;
}

function getfloat()
{
fscanf(STDIN,"%f",$num);
return $num;
}

function permute($str, $l, $r)
{
    if ($l == $r)
        echo $str. "\n";
    else
    {
        for ($i = $l; $i <= $r; $i++)
        {
            $str = swap($str, $l, $i);
            permute($str, $l + 1, $r);
            $str = swap($str, $l, $i);
        }
    }
}

function swap($a, $i, $j)
{
    $temp;
    $charArray = str_split($a);
    $temp = $charArray[$i] ;
    $charArray[$i] = $charArray[$j];
    $charArray[$j] = $temp;
    return implode($charArray);
}
 function integerArray($row,$col,$a1)
 {
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo "Enter the Number in array"."[".$i."]"."[".$j."]". "\n";
			$a1[$i][$j]=getInt();
		   // echo $a1[$i][$j];
		}
		//echo $a1[0][1];
	}
	// foreach ($variable as $key => $a1) {
	// 	foreach ($singlevalue as $key => $variable) {
	// 		echo "testing".$singlevalue;
	// 	}
	// }
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo $a1[$i][$j]." ";
		}
	   echo "\n";
	}
	   print_r($a1);
 }
 function stringArray($row,$col,$a1)
 {
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo "Enter the Number in array"."[".$i."]"."[".$j."]". "\n";
			$a1[$i][$j]=getString();
		   // echo $a1[$i][$j];
		}
		//echo $a1[0][1];
	}
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo $a1[$i][$j]." ";
		}
	   echo "\n";
	}
	   print_r($a1);
 }
 function bubbleString($a)
	{
		$n=sizeof($a);
		for($i=0;$i<sizeof($a);$i++)
		{
			for ($j=0;$j<$n-1-$i;$j++)
			{
				if(strcmp($a[$j],$a[$j+1])>0)
				{
					$k=$a[$j];
					$a[$j]=$a[$j+1];
					$a[$j+1]=$k;
				}
			}
		}
		return $a;
}

function insertionString($a)
	{

   for($i=1;$i<sizeof($a);$i++)
   {
	   $j=$i;
	   while($j>0 && strcmp($a[$j],$a[$j-1])<0)
	   {
		   $k=$a[$j];
		   $a[$j]=$a[$j-1];
		   $a[$j-1]=$k;
		   $j--;
	   }
   }
   return $a;
}
function binaryString($a,$k)
  {
	  $a1=array();
  	$a1=bubbleString($a);
  	$low=0;
  	$high=sizeof($a1)-1;
  	while($low<=$high)
  	{
		  $mid=floor(($high+$low)/2);
		  echo "mid value is ".$mid;
  		if(strcmp($a1[$mid],$k)<0)
  			$low=$mid+1;
  		    elseif(strcmp($a1[$mid],$k)>0)
  			$high= $mid-1;
  			else 
  			return $mid;
  	}
  	return -1;
}

function binaryIntegerN($a,$k)
  {
	  $a1=array();
  	$a1=bubbleInteger($a);
  	$low=0;
  	$high=sizeof($a1);
  	while($low<=$high)
  	{
  		//System.out.println(low+"----->"+high);
  	
  		$mid=floor(($high+$low)/2);
  		if($a1[$mid]<$k)
  		{
  			$low=$mid+1;
  		}
  		else if($a1[$mid]>$k)
  		{
  			$high= $mid-1;
  		}
  		else
  		{
  			return $mid;
  		}
  	}
return -1;
  }


	function bubbleInteger($a)
	{
		$n=sizeof($a);
		for($i=0;$i<sizeof($a);$i++)
		{
			for ($j=0;$j<$n-1-$i;$j++)
			{
				if($a[$j]>$a[$j+1])
				{
					$k=$a[$j];
					$a[$j]=$a[$j+1];
					$a[$j+1]=$k;
				}
			}
		}
		return $a;
}


$mergeArray=array();
function mergeParts($low, $mid, $high)
{
	$mergeArray=array();
	for($i=$low;$i<=$high;$i++)
	{
		$mergeArray[$i]=$a1[$i];
	}
	$i=$low;
	$j=$mid+1;
	$k=$low;
	while($i<=$mid && $j<=$high)
	{
		if($mergeArray[$i]<$mergeArray[$j])
		{
			$megeArray[$k]=$megeArray[$i];
			$i++;
		}
		else if($mergeArray[$i]>$mergeArray[$j])
		{
			$megeArray[$k]=$megeArray[$i];
			$j++;
		}
		$k++;
	}
	While($i<=$mid)
	{
		$mergeArray[$k]=$mergearray[$i];
		$i++;
		$k++;
	}
	While($j<=$high)
	{
		$mergeArray[$k]=$mergearray[$j];
		$j++;
		$k++;
	}
	return $mergeArray;
}
 function doMergeSort($low,$high,$a1)
 {
	 $mid=($low+($high-$low))/2;
	 doMergeSort($low,$mid,$a1);
	 doMergeSort($mid+1,$high,$a1);
	 return mergeParts($low,$mid,$high);
	 }


function insertionInteger($a)
{

   for($i=1;$i<sizeof($a);$i++)
   {
	   $j=$i;
	   while($j>0 && $a[$j]>$a[$j-1])
	   {
		   $k=$a[$j];
		   $a[$j]=$a[$j-1];
		   $a[$j-1]=$k;
		   $j--;
	   }
   }
   return $a;
}
function CtoFconversation($c)
{
	$f=($c*9/5) + 32;
	return $f; 
}
function FtoCconversion($f)
{
$c=($f-32)*5/9;
	return $c;
}

?>