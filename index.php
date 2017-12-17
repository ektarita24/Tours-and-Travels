<html>
<head>
<title>Form</title>
<style>
.Head
{
	background-color : #D0A020;

}

h1
{
       	 color:black;
       	 font-family:"comic sans ms";
	 font-size:30pt;	
	text-shadow: 5px 5px 5px #F0E890;
}
.border
{
	border-style: solid;
	border-color: black;
	border-width: 2px;
    border-radius: 10px;
	background-color:#E2F9F9;
}

</style>
<script>
function Validate()
{
	var name=document.enquiry.name;
	var address=document.enquiry.address;
	var mobile=document.enquiry.mobile;
	var email=document.enquiry.email;
	var emailExp;
	var city=document.enquiry.city;

	if (name.value == "")
	{	window.alert("Please enter your Full Name.");
		name.focus();
		return false;
	}
	if (address.value == "")
	{	window.alert("Please enter your Address.");
		address.focus();
		return false;
	}
	if(mobile.value == "")
	{	window.alert("Please enter your Mobile number.");
		mobile.focus();
		return false;
	}
	emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(email.value.match(emailExp));
	else
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}
	if (city.value == "")
	{	window.alert("Please enter your City.");
		city.focus();
		return false;
	}
	if(document.enquiry.destination.selectedIndex<1)
	{	window.alert("Please select a Destination");
		return false;
	}
	if(document.enquiry.date.selectedIndex<1)
	{	window.alert("Please select your Travel Date.");
		return false;
	}
	if(document.enquiry.people.selectedIndex<1)
	{	window.alert("Please select Number of People.");
		return false;
	}
	if (document.enquiry.tc.checked == false)
	{
		window.alert("Please check Terms & Conditions to Proceed!");
		return false;
            	}
	return true;
}
</script>

</head>
<body bgcolor=#F0E890>
<?php
include 'config.php';
?>
<table width="100%" bgcolor=#D0A020>
<tr>
<td width="40%"><div class="Head"><img src="book.png" width="100%" height="30%"></div></td>
<td><div class="Head"><h1> DJ Tours and Travels</h1></div></td>
<td width="15%"><div class="Head"><img src="now.jpg" width="100%" height="40%"></div></td>
</tr>
</table><br>
<img src="form.png" width="100%" height="40%"><br><br>
<table width="100%">
<tr>
<td width="25%">
</td>
<td width="50%" align="center">
<h2><font style="comic sans ms">Tour Enquiry</font></h2>
<form action="insert.php" method="POST" name="enquiry" onsubmit="return Validate();" class="border">
<br>
NAME:<input type="text" name="name" placeholder="ENTER FULL NAME"><br><br>
ADDRESS::<TEXTAREA ROWS="5" COLS="20" NAME="address"></TEXTAREA><BR><BR>
MOBILE NO.:<INPUT TYPE="TEXT" NAME="mobile" PLACEHOLDER="Eg.: 9876543210"><BR><br>
EMAIL ID : <INPUT TYPE="EMAIL" NAME="email" PLACEHOLDER="ENTER YOUR EMAIL"><BR><BR>
CITY:<input type="text" name="city" placeholder="ENTER CITY"><br><br>
DESTINATION: <select name="destination"><BR><BR>
		<option selected>--Select Destination--</option>
		<option>Australia</option>
		<option>Switzerland</option>
		<option>Dubai</option>
		<option>Europe</option>
		<option>USA-West Coast</option>
		<option>Singapore/Malaysia</option>
		</select><BR><BR>
TRAVEL DATE: <select name="date"><BR><BR>
		<option selected>--Select Travel Date--</option>
		<option>October 2014</option>
		<option>November 2014</option>
		<option>December 2014</option>
		<option>2015 Onwards</option>
		</select><BR><BR>
NUMBER OF PEOPLE: <select name="people"><BR><BR>
		<option selected>--Select--</option>
		<option>below 15</option>
		<option>above 15-below 25</option>
		<option>above 25-below 50</option>
		<option>above 50</option>
		</select><BR><BR>
<input type="CHECKBOX" name="tc" value="tc">I agree to <u>Terms & Conditions</u><BR><BR>
<input type="submit" value="Submit">
	<input type="reset" value="Reset"><br><br>
</form>
</td>
<td width="25%">
</td>
</body>
</html>
