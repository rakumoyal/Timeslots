<?php 

function timeslots($start,$end,$timeslot){

	echo "<h3>$timeslot Minutes Timeslots</h3>";
	$finish = strtotime(date($end));
	$k =0 ;
	for($i=1; $i<=96;$i++){
		$k+=$timeslot;
		$selectedTime = date($start);
		$endTime = strtotime("+".$k." minutes", strtotime($selectedTime));
		if($finish<$endTime){
			break;
		}
		echo date('h:i a', $endTime)."<br>";
	}
}

echo timeslots("09:15:00","20:15:00","20");
?>