<?php
//anonymous
session_start();
include_once "dbconfig.php";
if(verifyuser())
{
$login_msg= "Welcome ".fetchusername();
$login_msg.="<br /><a href='logout.php'>log Out</a>";
}
else
{
$login_msg= "Welcome Guest";
$login_msg.="<br />New user <a href='signup.php'>Sign Up</a>";
$login_msg.="<br />Existing user <a href='signin.php'>Sign In</a>";


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "head.php"; ?>

</head>
<body>
<?php include "top.php"; ?>

						<h2 class="title"><a href="disclaimer.php">Disclaimer</a></h2>
						<p class="meta">Please check the details</p>
						<div class="entry">
						<p><b>BloodCenter is an organisation which functions with the sole aim to promote and spread the awareness among the people to donate blood which is helpful for the poor and needy.</b></br>
</p><p><ol>
<li><b>Contacting Blood Donors:</b></li>
The users need to utilise the information provided in the site and approach the list of donors.</br>

The details of the donors are displayed only to facilitate the users for contacting them when in need of blood in case of any emergency.</br>

BloodCenter organisation is not responsible for willingness/unwillingness to donate blood expressed by the donor listed in the site
Content</li></br></br>

<li><b>Content provided in or through the site:</b></br>

Is provided for information purposes only.</br>
Is not shared with third parties.</br>
The donor information available in this website is made available to us by the donors and its purely the donor's right to continue or to withdraw any information available at any point of time.</br>
We are not responsible for any inaccuracy in the information available on the website.</br>
We are not responsible for any misuse of contact information displayed in the website. If you feel that your contact details are being misused then contact us on vikash.mishra123@outlook.com</br></br>
</li>
<li><b>Cookies:</b></br>
BloodCenter may employ cookie technology to allow subscribers and users to move more quickly through our site. Cookies are small text files a website can use to recognise repeat users and facilitate the user's ongoing access to and use of the site. Generally, cookies do not pose a threat to a user's files. BloodCenter cannot control the use of cookies by advertisers or third parties hosting data for BloodCenter. In case a member/user does not want the use of cookies, most browsers allow the user to deny or accept the cookie feature.</br></br>
</li>
<li><b>External Links:</b></br>
BloodCenter may contain links to other web sites or resources only for the convenience of the users. BloodCenter is not responsible for the content of these external sites, nor does BloodCenter endorse, warrant or guarantee the products, services or information described or offered in those sites. It is the responsibility of the user to examine the copyright and licensing restrictions of linked pages and to secure all necessary permission.</br></br>
</li>
<li><b>BloodCenter Rights:</b></br>
BloodCenter reserves the right to change, modify or discontinue any aspect of the Website at any time, including any information or its contents or features. BloodCenter reserves the right to collect, analyse and disseminate the patterns of usage of the Website by all its Users.</br></br>
</li>
<li><b>Copyrights & Trademarks:</b></br>
All information or content on the Website is the exclusive property of BloodCenter. No information or content on the Website may be copied, modified, reproduced, republished, uploaded, transmitted, posted or distributed in any form without the prior written consent of BloodCenter.</br>
BloodCenter trademark shall not be used in any manner without the prior written consent of BloodCenter.</br>
Unauthorized use of any information or content appearing on the Website shall violate copyright, trademark and other applicable laws and could result in criminal or civil penalties.</br></li></ol></p></p>
														
<?php include "bottom.php"; ?>
</body>
</html>
