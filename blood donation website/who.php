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

						<h2 class="title"><a href="who.php">Who Can And Who Cannot</a></h2>
						<p class="meta">Who can donate and who cannot donate blood</p>
						<div class="entry">
						<p> <TABLE id="Table1" cellSpacing="0" cellPadding="5" width="588">
													
                      <TR> 
                        <TD vAlign="top" align='justified'> <p><b><i><font color="red">Who Can...</font></i></b></p>
                          <p><strong>Let others benefit from your 
                            good health. Do donate blood if ...</strong> </p>
                          <ul>
                            <li>you are between age group of 18-60 years.<br>
                            </li>
                            <li>your weight is 45 kgs or more.<br>
                            </li>
                            <li>your haemoglobin is 12.5 gm% minimum.<br>
                            </li>
                            <li>your last blood donation was 3 months earlier.<br>
                            </li>
                            <li>you are healthy and have not suffered from malaria, 
                              typhoid or other transmissible disease in the recent 
                              past. </li>
                          </ul>
                          <p>There are many, many people who meet these parameters 
                            of health and fitness! </p>
                          <p><strong>Do abide by our rules - be truthful about 
                            your health status!</strong></p>
                          <p>We ensure the health of blood, before we take it, 
                            as well as after it is collected. Firstly, the donor 
                            is expected to be honest about his or her health history 
                            and current condition. Secondly, collected blood is 
                            tested for venereal diseases, hepatitis B &amp; C 
                            and AIDS. </p>
                          <p>You have to be healthy to give 'safe blood' </p>
                          <p><b><i><font color="red">Who Can't...</font></i></b></p>
                          <p><strong>Do not donate blood if you have any of these 
                            conditions</strong></p>
                          <ul>
                            <li>cold / fever in the past 1 week.<br>
                            </li>
                            <li>under treatment with antibiotics or any other 
                              medication.<br>
                            </li>
                            <li>cardiac problems, hypertension, epilepsy, diabetes 
                              (on insulin therapy), history of cancer,chronic 
                              kidney or liver disease, bleeding tendencies, venereal 
                              disease etc. <br>
                            </li>
                            <li>major surgery in the last 6 months.<br>
                            </li>
                            <li>vaccination in the last 24 hours.<br>
                            </li>
                            <li>had a miscarriage in the last 6 months or have 
                              been pregnant / lactating in the last one year. 
                              <br>
                            </li>
                            <li>had fainting attacks during last donation.<br>
                            </li>
                            <li>have regularly received treatment with blood products.<br>
                            </li>
                            <li>shared a needle to inject drugs/ have history 
                              of drug addiction. <br>
                            </li>
                            <li>had sexual relations with different partners or 
                              with a high risk individual.<br>
                            </li>
                            <li>been tested positive for antibodies to HIV. </li>
                          </ul>
                          <p><strong>Pregnancy And Menstrual Cycle</strong></p>
                          <ul>
                            <li>Females should not donate blood during pregnancy.<br>
                            </li>
                            <li>They can donate after 6 weeks following a normal 
                              delivery and when they are not breast feeding. <br>
                            </li>
                            <li>Females should not donate blood if they are having 
                              heavy menstrual flow or menstrual cramps. </li>
                          </ul>
                          </TD>
													</TR>
												</TABLE>
</p>
														
<?php include "bottom.php"; ?>
</body>
</html>
