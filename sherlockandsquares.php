<?php 

$a = 3;
$b = 9;

$count = 0;
// echo round(memory_get_usage()/1048576,2).''.' MB';
	for($i=$a;$i<=$b;++$i){				
			$sqNum = (int) sqrt($i);
			// echo $i."</br>";
			if($sqNum*$sqNum==$i){
				$count++;
				$i += $sqNum*2 ;
				 // echo $i."</br>";
			}
	}
echo $count;
// echo round(memory_get_usage()/1048576,2).''.' MB';/