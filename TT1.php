<!DOCTYPE html>
<html>
<head>
<title>Train Timetable</title>
<style>
.a1 {
	font-size=60px;
	font-color:red;
}
table {
	padding : 1px 1px 1px 1px;
	border-style:solid;
	border-color:yellow;
	
}
th, td {
  padding: 7px;
  text-align: left;
  border: 1px solid yellow;
}
th {
  background-color: #4CAF50;
  color: white;
}
td {
	border: 2px solid green;
  border-radius: 4px;
}

</style>
</head>
<body style="background-color:creamwhite;">
<h1 class = "a1" style = "text-align:center;color:gold;background-color:rgba(0,0,255,0.3);font-size:60px;">Train Timetable</h1>
<form action = "TT2.php" method = "POST">
	<table style="align:center;">
	<tr><th>Train Number</th><th>MONDAY</th><th>TUESDAY</th><th>WEDNESDAY</th><th>THURSDAY</th><th>FRIDAY</th><th>SATURDAY</th><th>SUNDAY</th></tr>
	<tr><td><input type = "number" name = "tr1" placeholder = "xxxx" max="9999" min="1000"><td>Arrival Time <input type = "time" name="tr1_at1">Departure Time <input type = "time" name="tr1_dt1">Platform<input type = "number" name="tr1_p1" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at2">Departure Time <input type = "time" name="tr1_dt2">Platform<input type = "number" name="tr1_p2" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at3">Departure Time <input type = "time" name="tr1_dt3">Platform<input type = "number" name="tr1_p3" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at4">Departure Time <input type = "time" name="tr1_dt4">Platform<input type = "number" name="tr1_p4" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at5">Departure Time <input type = "time" name="tr1_dt5">Platform<input type = "number" name="tr1_p5" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at6">Departure Time <input type = "time" name="tr1_dt6">Platform<input type = "number" name="tr1_p6" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr1_at7">Departure Time <input type = "time" name="tr1_dt7">Platform<input type = "number" name="tr1_p7" max="5" min="1"></td> </tr>
	<tr><td><input type = "number" name = "tr2" placeholder = "xxxx" max="9999" min="1000"><td>Arrival Time <input type = "time" name="tr2_at1">Departure Time <input type = "time" name="tr2_dt1">Platform<input type = "number" name="tr2_p1" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at2">Departure Time <input type = "time" name="tr2_dt2">Platform<input type = "number" name="tr2_p2" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at3">Departure Time <input type = "time" name="tr2_dt3">Platform<input type = "number" name="tr2_p3" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at4">Departure Time <input type = "time" name="tr2_dt4">Platform<input type = "number" name="tr2_p4" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at5">Departure Time <input type = "time" name="tr2_dt5">Platform<input type = "number" name="tr2_p5" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at6">Departure Time <input type = "time" name="tr2_dt6">Platform<input type = "number" name="tr2_p6" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr2_at7">Departure Time <input type = "time" name="tr2_dt7">Platform<input type = "number" name="tr2_p7" max="5" min="1"></td> </tr>
	<tr><td><input type = "number" name = "tr3" placeholder = "xxxx" max="9999" min="1000"><td>Arrival Time <input type = "time" name="tr3_at1">Departure Time <input type = "time" name="tr3_dt1">Platform<input type = "number" name="tr3_p1" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at2">Departure Time <input type = "time" name="tr3_dt2">Platform<input type = "number" name="tr3_p2" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at3">Departure Time <input type = "time" name="tr3_dt3">Platform<input type = "number" name="tr3_p3" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at4">Departure Time <input type = "time" name="tr3_dt4">Platform<input type = "number" name="tr3_p4" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at5">Departure Time <input type = "time" name="tr3_dt5">Platform<input type = "number" name="tr3_p5" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at6">Departure Time <input type = "time" name="tr3_dt6">Platform<input type = "number" name="tr3_p6" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr3_at7">Departure Time <input type = "time" name="tr3_dt7">Platform<input type = "number" name="tr3_p7" max="5" min="1"></td> </tr>
	<tr><td><input type = "number" name = "tr4" placeholder = "xxxx" max="9999" min="1000"><td>Arrival Time <input type = "time" name="tr4_at1">Departure Time <input type = "time" name="tr4_dt1">Platform<input type = "number" name="tr4_p1" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at2">Departure Time <input type = "time" name="tr4_dt2">Platform<input type = "number" name="tr4_p2" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at3">Departure Time <input type = "time" name="tr4_dt3">Platform<input type = "number" name="tr4_p3" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at4">Departure Time <input type = "time" name="tr4_dt4">Platform<input type = "number" name="tr4_p4" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at5">Departure Time <input type = "time" name="tr4_dt5">Platform<input type = "number" name="tr4_p5" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at6">Departure Time <input type = "time" name="tr4_dt6">Platform<input type = "number" name="tr4_p6" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr4_at7">Departure Time <input type = "time" name="tr4_dt7">Platform<input type = "number" name="tr4_p7" max="5" min="1"></td> </tr>
	<tr><td><input type = "number" name = "tr5" placeholder = "xxxx" max="9999" min="1000"><td>Arrival Time <input type = "time" name="tr5_at1">Departure Time <input type = "time" name="tr5_dt1">Platform<input type = "number" name="tr5_p1" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at2">Departure Time <input type = "time" name="tr5_dt2">Platform<input type = "number" name="tr5_p2" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at3">Departure Time <input type = "time" name="tr5_dt3">Platform<input type = "number" name="tr5_p3" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at4">Departure Time <input type = "time" name="tr5_dt4">Platform<input type = "number" name="tr5_p4" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at5">Departure Time <input type = "time" name="tr5_dt5">Platform<input type = "number" name="tr5_p5" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at6">Departure Time <input type = "time" name="tr5_dt6">Platform<input type = "number" name="tr5_p6" max="5" min="1"></td> <td>Arrival Time <input type = "time" name="tr5_at7">Departure Time <input type = "time" name="tr5_dt7">Platform<input type = "number" name="tr5_p7" max="5" min="1"></td> </tr>
	<input name ="SUBMIT" type = "submit">
	</table>
</form>
</body>
</html>

