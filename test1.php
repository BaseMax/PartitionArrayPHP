<?php
// https://github.com/BaseMax/PartitionArrayPHP
function partition($transport,$sizes) {
	$results = [];
	foreach ($sizes as $size) {
		$current = [];
		foreach(range(1,$size) as $no) {
			$mode = current($transport);
			$current[]=$mode;
			next($transport);
		}
		$results[] = array_filter($current);
	}
	return $results;
}
///////////////////////////////////////
$input=[1,2,3,4,5,6,7];
$size=[3,2,2];
$output=partition($input, $size);
print_r($output);
