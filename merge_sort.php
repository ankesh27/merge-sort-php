<?php
$arr = array( 4,12,1,9,4,4,6,10,99,7,90,34,2,100,77,3,102,4,2,432,5,34,5634,34,5); 

$arr=mergesort($arr);
print_r($arr);

function mergesort($numlist)
{
	if(count($numlist) == 1 ) return $numlist;

	$mid = count($numlist) / 2;
	$left = array_slice($numlist, 0, $mid);
	$right = array_slice($numlist, $mid);

	$left = mergesort($left);
	$right = mergesort($right);
	
	return merge($left, $right);
}

function merge($left, $right)
{
	$result=array();
	$leftIndex=0;
	$rightIndex=0;

	while($leftIndex<count($left) && $rightIndex<count($right))
	{
		if($left[$leftIndex]>$right[$rightIndex])
		{

			$result[]=$right[$rightIndex];
			$rightIndex++;
		}
		else
		{
			$result[]=$left[$leftIndex];
			$leftIndex++;
		}
	}
	while($leftIndex<count($left))
	{
		$result[]=$left[$leftIndex];
		$leftIndex++;
	}
	while($rightIndex<count($right))
	{
		$result[]=$right[$rightIndex];
		$rightIndex++;
	}
	return $result;
}
?>