<?php
// https://github.com/BaseMax/PartitionArrayPHP
function check($input,$size) {
	$result=[];
	$i=0;
	foreach($size as $in=>$s) {
		for($x=1;$x<=$s;$x++) {
			$result[$in][]=$input[$i];
			$i++;
		}
	}
	return $result;
}
///////////////////////////////////////
$input=[1,2,3,4,5,6,7];
$size=[3,2,2];
$output=partition($input, $size);
print_r($output);
