@extends('front')

@section('content')

<div class="col-wrapper">
	<div class="col1 marRight">
	<h1>Sub Menu</h1>
	
	<ul>
	<li><a href="v_form.html">Become a Volunteer</a></li>
	<li><a href="org_form.html">Register as Organization</a></li>
	<li><a href="login.html">Login</a></li>
	<li><a href="services.html">Services</a></li>
	<li><a href="contact.html">Contact Us</a></li>
	<li class="bdrBottom"><a href="#">Major Achievements</a></li>
	</ul>
	</div>
	<div class="col2">
	<h1>Volunteer</h1>
	
	<form action="PHP/db_connection_vol.php" method="post">
	<input name="first_name" placeholder="Enter First Your Name" class="formv" type="text">
	<br><br>
	<input name="second_name" placeholder="Enter Your Second Name" class="formv" type="text">	
	<br><br>
	<input name="email" placeholder="Enter Your Email Address" class="formv" type="text">
	<br><br>
	

	<input name="cell" placeholder="Enter Your Cell Number" class="formv" type="text">
	<br><br>

	<input name="phone" placeholder="Enter Your Phone" class="formv" type="text">	
	<br><br>

	<input name="address" placeholder="Enter Your Address" class="formv" type="text">
	<br><br>

	<input name="country" placeholder="Enter Your Country Name" class="formv" type="text">
	<br><br>

	<input name="city" placeholder="Enter Your City Name" class="formv" type="text">
	<br><br>

	<input name="degree" placeholder="Enter Your Last Degree" class="formv" type="text">
	<br><br>	
	

	<input name="expertise" placeholder="Enter Your Expertise" class="formv" type="text">
	<br><br>		

		<input name="submit" value="Submit" type="submit">
	<br><br>	
	
	</form>
	</div>
	</div>
@stop