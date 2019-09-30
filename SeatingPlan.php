<!DOCTYPE html>
<html>
<head>
	<title>Train Booking Chart</title>
	<!--link rel="stylesheet" type="text/css" href="moving train.css"-->
	<style>
		h2.basic {
					font-family:Cambria, sans-serif;
		}
		table {
  					font-family: arial, sans-serif;   border-collapse: collapse;   width: 100% ;font-size:30px;
		}
		tr:nth-child(even) {
  					background-color: #dddddd;
		
		}
		td, th {
  					border: 1px solid #dddddd;   text-align: left;   padding: 8px;
					}
	</style>
</head>
	
<body style = "background-color:rgba(0,0,200,0.5);">
	<h1 style = "background-color:mediumblue;text-color:black;font-size:50px;"><center><b>Booking Chart</b></center></h1>
	<h1 style = "background-color:mediumpurple; text-color:black;font-size:40px;"><center><b>Train_No.-13009  Jouney_Date:29/11/2019 Boarding_Station:New Delhi </b></center></h1>
	<br>
	<h6 style = "background-color:yellow;">		 	</h6>
	<table>
		<tr style = "background-color:lightblue; text-color:white; font-family:arial;">	<th>From Station</th>	<th>To Station</th>	<th>Coach</th>	<th>Berth No.</th>	<th>Berth</th>	<th>Booking Status</th>	</tr>					
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>B4</td>	<td>1</td>	<td>Upper</td>	<td>Book<td>	</tr>
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>B5</td>	<td>1</td>	<td>Side-Upper</td>	<td>Booked<td>	</tr>
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>A1</td>	<td>1</td>	<td>Side-Upper</td>	<td>Booked<td>	</tr>
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>A2</td>	<td>1</td>	<td>Lower</td>	<td>Book<td>	</tr>
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>B3</td>	<td>1</td>	<td>Side-Lower</td>	<td>Book<td>	</tr>
		<tr>	<td>New Delhi</td>	<td>Kanpur</td>	<td>B2</td>	<td>1</td>	<td>Upper</td>	<td>Book<td>	</tr>
	</table>
	<br>
	<br>
	<h1  style = "background-color:lightblue;text-color:white;font-size:40px;">ENTER THE DETAILS</h1>
	<form action = "info.php" method = "post">
	<table style = "border-collapse: collapse;background-color:rgba(0,255,127,0.3);"><center>
	<tr style="text-align:right;">	<th>Ticket Reservation</th>	</tr>
	<tr>	<td><b>Train Name:</b>Shanjivi Exp</td>	<td><b>Class:</b>Sleeper Class(SL)</td>	<td><b>Date:</b>16-Sept-2019</td>	</tr>
	<tr>	<td><b>From:</b>LKO</td>	<td><b>To:</b>DDN</td>	<td><b>Train No.</b>13009</td>	</tr>
	<tr>	<td><b>Boarding Point:</b><select name="dropdown"><option value ="Lucknow" selected >Lucknow</option><option value ="Hardoi" >Hardoi</option><option value ="Delhi">Delhi</option><option value ="Rorkee">Rorkee</option></select></td>	<td><b>Reservation Upto:</b>DDN</td>	<td><b>Quota</b>General</td>	</tr>
	<tr>	<td style = "text-color:blue;">Passenger Details</td>
	<tr><br></tr>
	<tr><br></tr>
	<tr>	<th>S.NO.</th>	<th>Name</th>	<th>Age</th>	<th>Sex</th>	<th>Berth Preference</th>	<th>Food Service</th>	</tr>
	<tr>	<td>1.</td>	<td><input type = "text" name = "pass1"></td>	<td><input type = "number"	name = "age1"></td>	<td><select name="dropdown"><option value ="N" selected >Select</option><option value ="Male">Male</option><option value ="Female">Female</option></select></td>	<td><select name="dropdown"><option value ="Choose Berth" selected >Choose Berth</option><option value ="Upper">Upper</option><option value ="Lower">Lower</option><option value ="Side-Lower">Side-Lower</option><option value ="Side-Upper">Side-Upper</option></select></td>	<td><input type = "checkbox" name = "food" value = "pass1"></td>	</tr>
	<tr>	<td>2.</td>	<td><input type = "text" name = "pass2"></td>	<td><input type = "number"	name = "age2"></td>	<td><select name="dropdown"><option value ="N" selected >Select</option><option value ="Male">Male</option><option value ="Female">Female</option></select></td>	<td><select name="dropdown"><option value ="Choose Berth" selected >Choose Berth</option><option value ="Upper">Upper</option><option value ="Lower">Lower</option><option value ="Side-Lower">Side-Lower</option><option value ="Side-Upper">Side-Upper</option></select></td>	<td><input type = "checkbox" name = "food" value = "pass2"></td>	</tr>
	<tr>	<td>3.</td>	<td><input type = "text" name = "pass3"></td>	<td><input type = "number"	name = "age3"></td>	<td><select name="dropdown"><option value ="N" selected >Select</option><option value ="Male">Male</option><option value ="Female">Female</option></select></td>	<td><select name="dropdown"><option value ="Choose Berth" selected >Choose Berth</option><option value ="Upper">Upper</option><option value ="Lower">Lower</option><option value ="Side-Lower">Side-Lower</option><option value ="Side-Upper">Side-Upper</option></select></td>	<td><input type = "checkbox" name = "food" value = "pass3"></td>	</tr>
	<tr>	<td>4.</td>	<td><input type = "text" name = "pass4"></td>	<td><input type = "number"	name = "age4"></td>	<td><select name="dropdown"><option value ="N" selected >Select</option><option value ="Male">Male</option><option value ="Female">Female</option></select></td>	<td><select name="dropdown"><option value ="Choose Berth" selected >Choose Berth</option><option value ="Upper">Upper</option><option value ="Lower">Lower</option><option value ="Side-Lower">Side-Lower</option><option value ="Side-Upper">Side-Upper</option></select></td>	<td><input type = "checkbox" name = "food" value = "pass4"></td>	</tr>
	<tr>	<td>5.</td>	<td><input type = "text" name = "pass5"></td>	<td><input type = "number"	name = "age5"></td>	<td><select name="dropdown"><option value ="N" selected >Select</option><option value ="Male">Male</option><option value ="Female">Female</option></select></td>	<td><select name="dropdown"><option value ="Choose Berth" selected >Choose Berth</option><option value ="Upper">Upper</option><option value ="Lower">Lower</option><option value ="Side-Lower">Side-Lower</option><option value ="Side-Upper">Side-Upper</option></select></td>	<td><input type = "checkbox" name = "food" value = "pass5"></td>	</tr>
	
	<input type = "Submit">
	</center>
	</table>
	</form>
	
</body>
</html>	
