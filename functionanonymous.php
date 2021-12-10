<?php
$maxmarks=300;
$percent=function ($marks) use ($maxmarks)
 {
 	return $marks*100/$maxmarks;
 };
echo "Percentage: ". $percent(286);
?>
