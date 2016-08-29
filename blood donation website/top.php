<div id="wrapper">
	<div id="header">
		<div id="logo">
		<img src="images/img05.jpg" width="100" height="100" alt="" class="alignleft border" />
			<h1><a href="home.php">Blood Center</a></h1>
			<font color='RED'><p>.....To help Everyone..... </p></font>
		</div>
		
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li>
							<ul>
							<?php
							if(verifyuser()==false)
								{
							?>							
								<li><a href="signup.php">Sign Up</a></li>
								
								
							<?php
								}
								else
								{
							?>
								<li><a href="select.php">Profile</a></li>
								
							<?php
								}
							?>
								
								
							</ul>
						</li>
			<li><a href="facts.php">Blood Donation Facts</a></li>
			<li><a href="who.php">Who Can/Can't Donate</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">