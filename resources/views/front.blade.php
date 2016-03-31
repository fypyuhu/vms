<html>
<head>

<title>Volunteer Management System</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display|Pontano+Sans' rel='stylesheet' type='text/css'>
</head>
<body>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Volunteers -->

<h3><a href ="PHP/views.php" class="visit"> Our Visitors</a></h3></div>

<h3><a href ="http://localhost/Project/vms/admin.php" class="loginv"> Login</a></h3></div>

<h3><a href ="http://localhost/Project/volunteers/index.html" class="volunte"> Volunteers</a></h3></div>

<h3><a href ="allfunction.html" class="fnall"> All Functions</a></h3></div>


<div class="header-wrapper">
	<div class="header">
    	<div class="header-content">
        	<div class="logo">
            	<h1>VMS</h1>
            </div>
            
           <div class="menu">
            	<ul>
                <li><a class="active" href="/">Home</a></li>
                <li><a  class="active" href="/about">About Us</a></li>
                <li class="submenu" class="active" ><a class="active"  href="/service">Services</a></li>

                <li><a href="/volunteer" class="active" >Volunteers</a></li>
                <li><a href="/" class="active" >Contact Us</a></li>
                </ul>
            </div>
        </div>
            @yield('banner')
    </div>
</div>
<!--- header-wrapper div end -->
<div class="clearing"></div>
<div class="cotainer">
	@yield('content')
</div>
<div class="clearing"></div>
<!--- About Us Text End -->
<div class="clearing"></div>
<div class="footer-wrapper">
	<div class="footer">
    	<div class="footer-panel marRight">
        	<h1>Address</h1>
            <h2>You may visit us</h2>
            <p>Office # 12; 3rd Floor Al Rehman Plaza Johar Town - Lahore
            Cell: +92 307 011 6246</p>
        </div>
        
        <div class="footer-panel marRight">
        	<h1>Find Us on Social Media</h1>
            <h2>For Latest News & updates</h2>
            <p>Regularly Visit our Social Media Pages to keep in touch to survive the humanity around the globe.</p>
            <ul>
            <li><a href="#"><img src="images/icon-aol1.gif" /></a></li>
            <li><a href="https://www.facebook.com/VolunteerManagementSystem/" target="_blank"><img src="images/icon-fb.gif" /></a></li>
            <li><a href="#"><img src="images/icon-twit.gif" /></a></li>
            <li><a href="#"><img src="images/icon-linkde.gif" /></a></li>
            </ul>
        </div>
        
        <div class="newsletter">
			
        	
			<h1>Newsletter</h1>
            <h2>Keep in Touch With VMS</h2>
			<ul>
            <li><input name="" type="text" class="newsletter-input"/></li>
            <li><input name="" type="text" class="newsletter-input1"/></li>
			<li><a class="submit" href="#">Submit</a></li>
			
			
			</ul>
            </div>
           
        </div>
        
    </div>
<!--- News Letter Footer End -->
<div class="clearing"></div>
<div class="footer-strip-wrapper">
	<div class="footer-strip">
    <p>Copyright (c) Volunteer.org.pk All rights reserved.<a class="footerlink" href="http://volunteer.org.pk" ></a> Team - VMS <a href="http://volunteer.org.pk" class="footerlink">Volunteer Management System</a></p>
    </div>
</div>
</body>
</html>