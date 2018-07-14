<?php
function getString()
{
      fscanf(STDIN, "%s", $name);
	   return $name;
	
}

function getInt()
{
  fscanf(STDIN,"%d",$num);
	return $num;
}

function getfloat()
{
fscanf(STDIN,"%f",$num);
return $num;
}

function prime($num)
{
	if($num==2)
        return true;
        if($num==0||$num==1)
        return false;
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


function removeSpace($s1)
{
    $s2=" ";
  
    $char= str_split($s1);
    $n=count($char)-1;
	for($i=0;$i<count($char)-1;$i++)
	{
        if($char[$i]==" ")
        {
        $s2=$s2.$char[$i+1];
        $i++;
        }
		else
			$s2=$s2.$char[$i];
		}
	if($char[$n-1]!=" ")
		$s2=$s2.$char[$n];
    return $s2;
    print_r($char);
}

function sortChar($s1)
{ 
	$s3=" ";
    $char= str_split($s1);
    $n=count($char);
	for($i=0;$i<count($char);$i++)
	{
		for ($j=0;$j<$n-1-$i;$j++)
		{
			if($char[$j]>$char[$j+1])
			{
				$s1=$char[$j];
				$char[$j]=$char[$j+1];
				$char[$j+1]=$s1;
			}
		}
	}
	return implode($char);
}

   function is_anagram($s1, $s2)
    {
			if(count_chars($s1,1)==count_chars($s2,1))
			return true;
			else
			return false;
	}
	function reverse($n)
	{
		$sum=0;
		while($n>0)
		{
			$r=$n%10;
			$sum=$sum*10+$r;
			$n=floor($n/10);
		}
		return $sum;
	}
	function palindrome($n)
	{
		$s=reverse($n);
		if($s==$n)
		return true;
		else
		return false;
	}
	function AnagramInt($n,$s)
	{
		$s1=reverse($s);
	if($n==$s1)
	return true;
	else
	return false;
	}

?>