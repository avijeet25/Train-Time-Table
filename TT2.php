<?php

$tr1=$_POST['tr1'];
$tr2=$_POST['tr2'];
$tr3=$_POST['tr3'];
$tr4=$_POST['tr4'];
$tr5=$_POST['tr5'];

$tr1_at1=$_POST['tr1_at1'];
$tr1_at2=$_POST['tr1_at2'];
$tr1_at3=$_POST['tr1_at3'];
$tr1_at4=$_POST['tr1_at4'];
$tr1_at5=$_POST['tr1_at5'];
$tr1_at6=$_POST['tr1_at6'];
$tr1_at7=$_POST['tr1_at7'];

$tr2_at1=$_POST['tr2_at1'];
$tr2_at2=$_POST['tr2_at2'];
$tr2_at3=$_POST['tr2_at3'];
$tr2_at4=$_POST['tr2_at4'];
$tr2_at5=$_POST['tr2_at5'];
$tr2_at6=$_POST['tr2_at6'];
$tr2_at7=$_POST['tr2_at7'];


$tr3_at1=$_POST['tr3_at1'];
$tr3_at2=$_POST['tr3_at2'];
$tr3_at3=$_POST['tr3_at3'];
$tr3_at4=$_POST['tr3_at4'];
$tr3_at5=$_POST['tr3_at5'];
$tr3_at6=$_POST['tr3_at6'];
$tr3_at7=$_POST['tr3_at7'];


$tr4_at1=$_POST['tr4_at1'];
$tr4_at2=$_POST['tr4_at2'];
$tr4_at3=$_POST['tr4_at3'];
$tr4_at4=$_POST['tr4_at4'];
$tr4_at5=$_POST['tr4_at5'];
$tr4_at6=$_POST['tr4_at6'];
$tr4_at7=$_POST['tr4_at7'];


$tr5_at1=$_POST['tr5_at1'];
$tr5_at2=$_POST['tr5_at2'];
$tr5_at3=$_POST['tr5_at3'];
$tr5_at4=$_POST['tr5_at4'];
$tr5_at5=$_POST['tr5_at5'];
$tr5_at6=$_POST['tr5_at6'];
$tr5_at7=$_POST['tr5_at7'];


$tr1_dt1=$_POST['tr1_dt1'];
$tr1_dt2=$_POST['tr1_dt2'];
$tr1_dt3=$_POST['tr1_dt3'];
$tr1_dt4=$_POST['tr1_dt4'];
$tr1_dt5=$_POST['tr1_dt5'];
$tr1_dt6=$_POST['tr1_dt6'];
$tr1_dt7=$_POST['tr1_dt7'];

$tr2_dt1=$_POST['tr2_dt1'];
$tr2_dt2=$_POST['tr2_dt2'];
$tr2_dt3=$_POST['tr2_dt3'];
$tr2_dt4=$_POST['tr2_dt4'];
$tr2_dt5=$_POST['tr2_dt5'];
$tr2_dt6=$_POST['tr2_dt6'];
$tr2_dt7=$_POST['tr2_dt7'];


$tr3_dt1=$_POST['tr3_dt1'];
$tr3_dt2=$_POST['tr3_dt2'];
$tr3_dt3=$_POST['tr3_dt3'];
$tr3_dt4=$_POST['tr3_dt4'];
$tr3_dt5=$_POST['tr3_dt5'];
$tr3_dt6=$_POST['tr3_dt6'];
$tr3_dt7=$_POST['tr3_dt7'];


$tr4_dt1=$_POST['tr4_dt1'];
$tr4_dt2=$_POST['tr4_dt2'];
$tr4_dt3=$_POST['tr4_dt3'];
$tr4_dt4=$_POST['tr4_dt4'];
$tr4_dt5=$_POST['tr4_dt5'];
$tr4_dt6=$_POST['tr4_dt6'];
$tr4_dt7=$_POST['tr4_dt7'];


$tr5_dt1=$_POST['tr5_dt1'];
$tr5_dt2=$_POST['tr5_dt2'];
$tr5_dt3=$_POST['tr5_dt3'];
$tr5_dt4=$_POST['tr5_dt4'];
$tr5_dt5=$_POST['tr5_dt5'];
$tr5_dt6=$_POST['tr5_dt6'];
$tr5_dt7=$_POST['tr5_dt7'];


$tr1_p1=$_POST['tr1_p1'];
$tr1_p2=$_POST['tr1_p2'];
$tr1_p3=$_POST['tr1_p3'];
$tr1_p4=$_POST['tr1_p4'];
$tr1_p5=$_POST['tr1_p5'];
$tr1_p6=$_POST['tr1_p6'];
$tr1_p7=$_POST['tr1_p7'];

$tr2_p1=$_POST['tr2_p1'];
$tr2_p2=$_POST['tr2_p2'];
$tr2_p3=$_POST['tr2_p3'];
$tr2_p4=$_POST['tr2_p4'];
$tr2_p5=$_POST['tr2_p5'];
$tr2_p6=$_POST['tr2_p6'];
$tr2_p7=$_POST['tr2_p7'];


$tr3_p1=$_POST['tr3_p1'];
$tr3_p2=$_POST['tr3_p2'];
$tr3_p3=$_POST['tr3_p3'];
$tr3_p4=$_POST['tr3_p4'];
$tr3_p5=$_POST['tr3_p5'];
$tr3_p6=$_POST['tr3_p6'];
$tr3_p7=$_POST['tr3_p7'];


$tr4_p1=$_POST['tr4_p1'];
$tr4_p2=$_POST['tr4_p2'];
$tr4_p3=$_POST['tr4_p3'];
$tr4_p4=$_POST['tr4_p4'];
$tr4_p5=$_POST['tr4_p5'];
$tr4_p6=$_POST['tr4_p6'];
$tr4_p7=$_POST['tr4_p7'];


$tr5_p1=$_POST['tr5_p1'];
$tr5_p2=$_POST['tr5_p2'];
$tr5_p3=$_POST['tr5_p3'];
$tr5_p4=$_POST['tr5_p4'];
$tr5_p5=$_POST['tr5_p5'];
$tr5_p6=$_POST['tr5_p6'];
$tr5_p7=$_POST['tr5_p7'];

echo"<h1 style='gold;text-align:center;background-color:rgba(0,0,130,0.3);'> Train TimeTable</h1>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


echo"<table style='align:center;border:1px solid grey;background-color:rgba(0,0,255,0.4);'>
	<tr><th style = 'border: 1px solid blue;'>Train Number</th><th style = 'border: 1px solid blue;'>MONDAY</th><th style = 'border: 1px solid blue;'>TUESDAY</th><th style = 'border: 1px solid blue;'>WEDNESDAY</th><th style = 'border: 1px solid blue;'>THURSDAY</th><th style = 'border: 1px solid blue;'>FRIDAY</th><th style = 'border: 1px solid blue;'>SATURDAY</th><th style = 'border: 1px solid blue;'>SUNDAY</th></tr>
	<tr><td style = 'border: 1px solid #dddddd;'>$tr1<td>Arrival Time:$tr1_at1 Departure Time:$tr1_dt1 Platform:$tr1_p1</td> <td>Arrival Time:$tr1_at2 Departure Time:$tr1_dt2 Platform:$tr1_p2</td> <td>Arrival Time:$tr1_at3 Departure Time:$tr1_dt3 Platform:$tr1_p3</td> <td>Arrival Time:$tr1_at4 Departure Time:$tr1_dt4 Platform:$tr1_p4</td> <td>Arrival Time:$tr1_at5 Departure Time:$tr1_dt5 Platform:$tr1_p5</td> <td>Arrival Time:$tr1_at6 Departure Time:$tr1_dt6 Platform:$tr1_p6</td> <td>Arrival Time:$tr1_at7 Departure Time:$tr1_dt7 Platform:$tr1_p7</td> </tr>
	<tr><td style = 'border: 1px solid #dddddd;'>$tr2<td>Arrival Time:$tr2_at1 Departure Time:$tr2_dt1 Platform:$tr2_p1</td> <td>Arrival Time:$tr1_at2 Departure Time:$tr2_dt2 Platform:$tr2_p2</td> <td>Arrival Time:$tr2_at3 Departure Time:$tr2_dt3 Platform:$tr2_p3</td> <td>Arrival Time:$tr2_at4 Departure Time:$tr2_dt4 Platform:$tr2_p4</td> <td>Arrival Time:$tr2_at5 Departure Time:$tr2_dt5 Platform:$tr2_p5</td> <td>Arrival Time:$tr2_at6 Departure Time:$tr2_dt6 Platform:$tr2_p6</td> <td>Arrival Time:$tr2_at7 Departure Time:$tr2_dt7 Platform:$tr2_p7</td> </tr>
	<tr><td style = 'border: 1px solid #dddddd;'>$tr3<td>Arrival Time:$tr3_at1 Departure Time:$tr3_dt1 Platform:$tr3_p1</td> <td>Arrival Time:$tr1_at2 Departure Time:$tr3_dt2 Platform:$tr3_p2</td> <td>Arrival Time:$tr3_at3 Departure Time:$tr3_dt3 Platform:$tr3_p3</td> <td>Arrival Time:$tr3_at4 Departure Time:$tr3_dt4 Platform:$tr3_p4</td> <td>Arrival Time:$tr3_at5 Departure Time:$tr3_dt5 Platform:$tr3_p5</td> <td>Arrival Time:$tr3_at6 Departure Time:$tr3_dt6 Platform:$tr3_p6</td> <td>Arrival Time:$tr3_at7 Departure Time:$tr3_dt7 Platform:$tr3_p7</td> </tr>
	<tr><td style = 'border: 1px solid #dddddd;'>$tr4<td>Arrival Time:$tr4_at1 Departure Time:$tr4_dt1 Platform:$tr4_p1</td> <td>Arrival Time:$tr1_at2 Departure Time:$tr4_dt2 Platform:$tr4_p2</td> <td>Arrival Time:$tr4_at3 Departure Time:$tr4_dt3 Platform:$tr4_p3</td> <td>Arrival Time:$tr4_at4 Departure Time:$tr4_dt4 Platform:$tr4_p4</td> <td>Arrival Time:$tr4_at5 Departure Time:$tr4_dt5 Platform:$tr4_p5</td> <td>Arrival Time:$tr4_at6 Departure Time:$tr4_dt6 Platform:$tr4_p6</td> <td>Arrival Time:$tr4_at7 Departure Time:$tr4_dt7 Platform:$tr4_p7</td> </tr>
	<tr><td style = 'border: 1px solid #dddddd;'>$tr5<td>Arrival Time:$tr5_at1 Departure Time:$tr5_dt1 Platform:$tr5_p1</td> <td>Arrival Time:$tr1_at2 Departure Time:$tr5_dt2 Platform:$tr5_p2</td> <td>Arrival Time:$tr5_at3 Departure Time:$tr5_dt3 Platform:$tr5_p3</td> <td>Arrival Time:$tr5_at4 Departure Time:$tr5_dt4 Platform:$tr5_p4</td> <td>Arrival Time:$tr5_at5 Departure Time:$tr5_dt5 Platform:$tr5_p5</td> <td>Arrival Time:$tr5_at6 Departure Time:$tr5_dt6 Platform:$tr5_p6</td> <td>Arrival Time:$tr5_at7 Departure Time:$tr5_dt7 Platform:$tr5_p7</td> </tr>
	</table>";









?>