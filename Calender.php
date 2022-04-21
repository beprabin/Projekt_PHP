<html>
<head><title>Calender</title></head>
<body>
<?php
	$date=time();
	$day=date('d',$date);
	$month=date('m',$date);
	$year=date('Y',$date);
	$first_day=mktime(0,0,0,$month,1,$year);
	$title=date('F',$first_day);
	$day_of_week=date('D',$first_day);
	
	switch($day_of_week){
		case "Sun":
			$blank=0;
			break;
		case "Mon":
			$blank=1;
			break;
		case "Tue":
			$blank=2;
			break;
		case "Wed":
			$blank=3;
			break;
		case "Thu":
			$blank=4;
			break;
		case "Fri":
			$blank=5;
			break;
		case "Sat":
			$blank=7;
			break;
	}
	$days_in_month=cal_days_in_month(0,$month,$year);
	echo "<table border='5' width='350'>";
	echo "<tr><th colspan='7'>$title $year</th></tr>";
	
	echo "<tr align='center'>
			<td>Sun</td>
			<td>Mon</td>
			<td>Tue</td>
			<td>Wed</td>
			<td>Thu</td>
			<td>Fri</td>
			<td bgcolor='red'>Sat</td>
		</tr>";
		
	$day_count=1;
	echo "<tr align='center'>";
	while($blank>0){
		echo "<td></td>";
		$blank=$blank-1;
		$day_count++;
	}
			$day_num=1;
			while($day_num<=$days_in_month)
			{
				if($day_num==$day)
				{
					echo "<td><b><u><font color='blue' >$day_num</font></u></b></td>";
					$day_num++;
					$day_count++;
				}
				
				if($day_count ==7){
					echo "<td bgcolor='red'>$day_num</td>";
					$day_num++;
					$day_count++;
				}
				else{
					echo "<td>$day_num</td>";
					$day_num++;
					$day_count++;
				}
				if($day_count>7)
				{
					echo "</tr><tr align='center'>";
					$day_count=1;
				}
			}
			while($day_count>1 && $day_count<=7)
			{
				echo "<td></td>";
				$day_count++;
			}
			echo "</tr></table>"; 
?>
</body>
</html>