<?php

	error_reporting(-1);
ini_set('display_errors', 'On');

/* Subject and Email Variables */

	$emailSubject = '2023 Cdn Nats Registration';
	$webMaster = 'cdnnats@gmail.com';
	
/* Gathering Data Variables */

	$namefirstField = $_POST['namefirst'];
	$namelastField = $_POST['namelast'];
	$cityField = $_POST['city'];
	$provField = $_POST['prov'];
	$countryField = $_POST['country'];
	$emailField = $_POST['email'];
	$phoneField = $_POST['phone'];
	$paymentField = $_POST['payment'];
	$testField = $_POST['test'];
	$sponsorsField = $_POST['sponsors'];
	$carnumberField = $_POST['carnumber'];
	$class1Field = $_POST['class1'];
	$pt1Field = $_POST['pt1'];
	$colour1aField = $_POST['colour1a'];
	$colour1bField = $_POST['colour1b'];
	$class2Field = $_POST['class2'];
	$pt2Field = $_POST['pt2'];
	$class3Field = $_POST['class3'];
	$pt3Field = $_POST['pt3'];
	$class4Field = $_POST['class4'];
	$pt4Field = $_POST['pt4'];
	$class5Field = $_POST['class5'];
	$pt5Field = $_POST['pt5'];
	
	$body = <<<EOD
<br>
Name: $namefirstField $namelastField<br>
Phone Number: $phoneField  /  Email: $emailField <br>
Location: $cityField , $provField , $countryField<br>
<hr><br>
First Class: $class1Field   ---   $pt1Field <br>
<hr><br>
Second Class: $class2Field   ---   $pt2Field <br>
<hr><br>
Third Class: $class3Field   ---   $pt3Field <br>
<hr><br>
Fourth Class: $class4Field   ---   $pt4Field <br>
<hr><br>
Fifth Class: $class5Field   ---   $pt5Field <br>
<hr><br>
Sponsor List: $sponsorsField <br>
<hr><br>
Car Numbers:  $carnumberField <br>
<hr><br>
FirstName,LastName,Nickname,Class,Number,Primary,Secondary,PT_Number,ID,,Sponsors,Country,City,Province(State) <br>
$namefirstField,$namelastField,,$class1Field,,"#FF"$colour1aField,"#FF"$colour1bField,$pt1Field,0,,"$sponsorsField",$countryField,$cityField,$provField <br>
$namefirstField,$namelastField,,$class2Field,,"#FF"$colour1aField,"#FF"$colour1bField,$pt2Field,0,,"$sponsorsField",$countryField,$cityField,$provField <br>
$namefirstField,$namelastField,,$class3Field,,"#FF"$colour1aField,"#FF"$colour1bField,$pt3Field,0,,"$sponsorsField",$countryField,$cityField,$provField <br>
$namefirstField,$namelastField,,$class4Field,,"#FF"$colour1aField,"#FF"$colour1bField,$pt4Field,0,,"$sponsorsField",$countryField,$cityField,$provField <br>
$namefirstField,$namelastField,,$class5Field,,"#FF"$colour1aField,"#FF"$colour1bField,$pt5Field,0,,"$sponsorsField",$countryField,$cityField,$provField <br>
EOD;

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject , $body, $headers);
	
	$user = "$emailField";
	$usersubject = "Canadian On-road Nationals Registration - $namefirstField $namelastField";
	$userheaders = "From: $webMaster\r\n";
	$userheaders .= "Content-type: text/html\r\n";
	$success = mail($user, $usersubject, $body, $userheaders);

/* Results rendered as HTML */

	$theResults = <<<EOD
	<!DOCTYPE html>
	<html lang="en">
	  <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Canadian On-Road Nationals</title>
	
		<!-- Google Fonts -->
	
	
		
		<!-- CSS Stylesheets -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/33109bf52b.js" crossorigin="anonymous"></script>
		
		<!-- Bootstrap Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
	
		<!-- Web Icon -->
		<link rel="icon" type="image/ico" href="webicon.png">
	
	  </head>
	
	
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
		  <a class="navbar-brand" href="index.html#" >
			<img class="ddlogomain" src="images/webheader.svg" alt="Cdn Nats">
		  </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler01" aria-controls="navbarToggler01" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarToggler01">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.html#footer">Contact</a>
			  </li>
			  <li>
				<a class="nav-link" href="index.html#features">Race Info</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.html#pricing">Pricing</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.html#hours">Schedule</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index.html#location">Location</a>
			  </li>
			  <!--
			  <li class="nav-item">
				<a class="nav-link" href="index.html#press">Supporters</a>
			  </li>
			  -->
			  <li class="nav-item">
				<a class="nav-link" href="index.html#transponders">Transponders</a>
			  </li>
			  <!--
			  <li class="nav-item">
				<a class="nav-link" href="index.html#pictures">Pictures</a>
			  </li>
			  -->
			</ul>
		  </div>
		</nav>
		
		<h1 class="style4">2020 Online Registration</h1>
	
			 <form name="form1" method="post" action="entryform.php">
			<table width="100%" border="3" cellspacing="2" cellpadding="1">
									  <tr>
										<td width="15%" scope="col"><div align="right">
										  <label for="namefirst">First Name:</label>
										</div></td>
										<td width="40%" scope="col"><div align="left"> <span id="sprytextfield1">
										  <input name="namefirst" type="text" id="namefirst" size="35" maxlength="50">
										  <span class="textfieldRequiredMsg">A value is required.</span></span> <span class="style4">required</span></div></td>
										<td width="15%" scope="col"><div align="right">
										  <label for="namelast">Last Name:</label>
										</div></td>
										<td width="30%" scope="col"><div align="left"><span id="sprytextfield2">
										  <input name="namelast" type="text" id="namelast" size="35" maxlength="50">
										  <span class="textfieldRequiredMsg">A value is required.</span></span> <span class="style4">required</span></div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <label for="email">E-mail:</label>
										</div></td>
										<td><div align="left"><span id="sprytextfield3">
										  <input name="email" type="text" id="email" size="50" maxlength="90">
										  <span class="textfieldRequiredMsg">A value is required.</span> <span class="textfieldInvalidFormatMsg">Invalid format.</span></span> <span class="style4">required</span></div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <label for="city">City:</label>
										</div></td>
										<td><div align="left">
										  <input name="city" type="text" id="city" size="30" maxlength="30">
										</div></td>
										<td><div align="right">
										  <label for="prov">Province(State):</label>
										</div></td>
										<td><div align="left">
										  <input name="prov" type="text" id="prov" size="25" maxlength="25">
										</div></td>
									  </tr>
									  <tr></tr>
									  <tr>
										<td><div align="right">
										  <label for="country">Country:</label>
										</div></td>
										<td><div align="left"><span id="sprytextfield4">
										  <input name="country" type="text" id="country" size="25" maxlength="25">
										  <span class="textfieldRequiredMsg">A value is required.</span></span><span class="style4">required</span></div></td>
										<td><div align="right">
										  <label for="phone">Phone Number:</label>
										</div></td>
										<td><div align="left">
										  <input name="phone" type="text" id="phone" size="14" maxlength="14">
										  Format Example:  905-555-5555 </div></td>
									  </tr>
									  <tr></tr>
									  <tr>
										<td></td>
										<td><div align="left"> Payment must be made before the registration deadline (Friday March 24 / 2023).  Mailed in payment can be sent to Digital Detail, 23 Hagar St, Welland, ON, L3B 4J7.  Options for payment are: </div></td>
										<td align="right"><li>Cash<br>
										  <li>Cheque<br>
										  <li>PayPal<br>
										  <li>EMT
										  </td>
										<td> - Delivered in person<br>
										  - Made out to Digital Detail<br>
										  - To cdnnats@gmail.com<br>
										  - To cdnnats@gmail.com</td>
									  </tr>
									  <tr>
										<td>&nbsp;</td>
										<td><span id="sprycheckbox1">
										  <input type="checkbox" name="payment" id="payment">
										  <label for="payment"><u><strong>Check this box</strong></u> to verify that you understand the payment requirements listed above.</label>
										  <span class="checkboxRequiredMsg">Please make a selection.</span></span><span class="style4">required</span></td>
									  </tr>
				<tr>
										<td><div align="right">
										  <label for="sponsors"><strong>Sponsors</strong>:</label>
										</div></td>
										<td><div align="left">
										  <textarea name="sponsors" id="sponsors" cols="50" rows="2" size="25"></textarea>
										  Car 1 is reserved for 2022 class winners.</div></td>
										<td><div align="right">
										  <label for="carnumber"><strong>Car Number</strong></label>
										</div></td>
										<td><div align="left">
										  <textarea name="carnumber" id="carnumber" cols="30" rows="1"></textarea>
										   (enter choices for car numbers from 0 to 999 in order of priority) - Example: 2 22 122 153. Please list serveral choices.
											  Car Number 1 is reserved for 2022 class winners.
											  Duplicate car numbers will go to the first driver <u><strong>paid</strong></u>.</div></td>
									  </tr>
									  
									  <tr>
										<td height="17"></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <label for="class1"><strong>1st Class</strong>:</label>
										</div></td>
										<td><div align="left"><span id="spryselect2">
										  <select name="class1" id="class1">
											<option selected>-- choose class 1 --</option>
											<option value="Can-Am Stock TC">Touring Stock 21.5 $100</option>
											<option value="Super Stock TC">Touring Super Stock 17.5 $100</option>
											<option value="Open Mod TC">Touring Mod $100</option>
											<option value="USGT">USGT $100</option>
											<option value="USVTA">USVTA $65</option>
											<option value="Formula 1">Formula 1 $65</option>
											<option value="Can-Am Stock 1/12th">Stock 1/12th 17.5 $65</option>
											<option value="Super Stock 1/12th">Super Stock 1/12th 13.5 $65</option>
											<option value="Mod 1/12th">Modified 1/12th $65</option>
											<option value="World GT-R">World GT-R $65</option>
											<option value="Open Truck">GT12 $65</option>
										  </select>
										  <span class="selectRequiredMsg">Please select an item.</span></span><span class="style4">required</span></div></td>
										<td><div align="right">
										  <label for="colour1a2"><strong>Number Colour</strong>:</label>
										</div></td>
										<td><script src="jscolor.js"></script>
										  <input class="jscolor" name="colour1a" type="text" id="colour1a2" value="000000" size="10" maxlenght="6">
										  Default=Black (000000) </td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="pt1"><strong>Personal Transponder </strong>(class 1)</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <input name="pt1" type="text" id="pt1" value="0" size="7" maxlength="7">
										  if PT# is unknown, enter 0</div></td>
										<td><div align="right">
										  <label for="colour1b"><strong>Background Colour</strong>:</label>
										</div></td>
										<td><script src="jscolor.js"></script>
										  <input class="jscolor" name="colour1b" type="text" id="colour1b" value="FFFFFF" size="10" maxlenght="6">
										  Default=white (FFFFFF) </td>
									  </tr>
									  <td height="17"></td>
										<td height="17"></td>
										<td height="17"></td>
										<td height="17">This colour choice is what displays as your car number on the scoring computer.</td>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="class2"><strong>2nd Class</strong>:</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <select name="class2" id="class2">
											<option selected>-- 2nd --</option>
											<option value="Can-Am Stock TC">Touring Stock 21.5 $100</option>
											<option value="Super Stock TC">Touring Super Stock 17.5 $100</option>
											<option value="Open Mod TC">Touring Mod $100</option>
											<option value="USGT">USGT $100</option>
											<option value="USVTA">USVTA $65</option>
											<option value="Formula 1">Formula 1 $65</option>
											<option value="Can-Am Stock 1/12th">Stock 1/12th 17.5 $65</option>
											<option value="Super Stock 1/12th">Super Stock 1/12th 13.5 $65</option>
											<option value="Mod 1/12th">Modified 1/12th $65</option>
											<option value="World GT-R">World GT-R $65</option>
											<option value="Open Truck">GT12 $65</option>
										  </select>
										</div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="pt2"><strong>Personal Transponder</strong> (class 2)</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <input name="pt2" type="text" id="pt2" value="0" size="7" maxlength="7">
										  if PT# is unknown, enter 0</div></td>
									  </tr>
									  <td height="17"></td>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="class3"><strong>3rd Class</strong>:</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <select name="class3" id="class3">
											<option selected>-- 3rd --</option>
											<option value="Can-Am Stock TC">Touring Stock 21.5 $100</option>
											<option value="Super Stock TC">Touring Super Stock 17.5 $100</option>
											<option value="Open Mod TC">Touring Mod $100</option>
											<option value="USGT">USGT $100</option>
											<option value="USVTA">USVTA $65</option>
											<option value="Formula 1">Formula 1 $65</option>
											<option value="Can-Am Stock 1/12th">Stock 1/12th 17.5 $65</option>
											<option value="Super Stock 1/12th">Super Stock 1/12th 13.5 $65</option>
											<option value="Mod 1/12th">Modified 1/12th $65</option>
											<option value="World GT-R">World GT-R $65</option>
											<option value="Open Truck">GT12 $65</option>
										  </select>
										</div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="pt3"><strong>Personal Transponder</strong> (class 3)</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <input name="pt3" type="text" id="pt3" value="0" size="7" maxlength="7">
										  if PT# is unknown, enter 0 </div></td>
									  </tr>
									  <td height="17"></td>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="class4"><strong>4th Class</strong>:</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <select name="class4" id="class4">
											<option selected>-- 4th --</option>
											<option value="Can-Am Stock TC">Touring Stock 21.5 $100</option>
											<option value="Super Stock TC">Touring Super Stock 17.5 $100</option>
											<option value="Open Mod TC">Touring Mod $100</option>
											<option value="USGT">USGT $100</option>
											<option value="USVTA">USVTA $65</option>
											<option value="Formula 1">Formula 1 $65</option>
											<option value="Can-Am Stock 1/12th">Stock 1/12th 17.5 $65</option>
											<option value="Super Stock 1/12th">Super Stock 1/12th 13.5 $65</option>
											<option value="Mod 1/12th">Modified 1/12th $65</option>
											<option value="World GT-R">World GT-R $65</option>
											<option value="Open Truck">GT12 $65</option>
										  </select>
										</div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="pt4"><strong>Personal Transponder</strong> (class 4)</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <input name="pt4" type="text" id="pt4" value="0" size="7" maxlength="7">
										  if PT# is unknown, enter 0</div></td>
									  </tr>
									  <td height="17"></td>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="class5"><strong>5th Class</strong>:</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <select name="class5" id="class5">
											<option selected>-- 5th --</option>
											<option value="Can-Am Stock TC">Touring Stock 21.5 $100</option>
											<option value="Super Stock TC">Touring Super Stock 17.5 $100</option>
											<option value="Open Mod TC">Touring Mod $100</option>
											<option value="USGT">USGT $100</option>
											<option value="USVTA">USVTA $65</option>
											<option value="Formula 1">Formula 1 $65</option>
											<option value="Can-Am Stock 1/12th">Stock 1/12th 17.5 $65</option>
											<option value="Super Stock 1/12th">Super Stock 1/12th 13.5 $65</option>
											<option value="Mod 1/12th">Modified 1/12th $65</option>
											<option value="World GT-R">World GT-R $65</option>
											<option value="Open Truck">GT12 $65</option>
										  </select>
										</div></td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <div align="right">
											<label for="pt5"><strong>Personal Transponder</strong> (class 5)</label>
										  </div>
										</div></td>
										<td><div align="left">
										  <input name="pt5" type="text" id="pt5" value="0" size="7" maxlength="7">
										  if PT# is unknown, enter 0</div></td>
									  </tr>
									  <td height="17"></td>
									  <tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									  </tr>
									  <tr>
										<td><div align="right">
										  <label for="reset"></label>
										  <input type="reset" name="reset" id="reset" value="Reset Form">
										</div></td>
										<td><div align="left">
										  <label for="submit"></label>
										  <input type="submit" name="submit" id="submit" value="Submit">
										</div></td>
									  </tr>
									  <tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									  </tr>
			</table>
		  </form>


EOD;
echo "$theResults";

?>