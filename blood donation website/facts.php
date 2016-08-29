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

						<h2 class="title"><a href="facts.php">FACTS </a></h2>
						<p class="meta">Facts about blood donation</p>
						<div class="entry">
						<p> <table id="Table1" cellspacing="0" cellpadding="5" width="588" >
                                          <tr >
                                            <td valign="top" align='justified'><p><font color='ORANGE'>Facts about blood needs</font></p>
                                              <ul>
                                                <li>Every year our nation requires about <strong>4 Crore 
                                                units</strong> of blood, out of which only a meager <strong>40 Lakh units</strong> of blood are available.</li>
                                                <li>The <strong>gift of blood</strong> is the <strong>gift 
                                                  of life</strong>. There is no substitute for human 
                                                blood.<img src="images/blood_3.jpg" width="290" height="100" align="right" /></li>
                                                <li>Every two seconds someone  needs blood.</li>
                                                <li>More than 38,000 blood donations are needed every day.</li>
                                                <li>A total&nbsp;of 30 million blood components are transfused each year.</li>
                                                <li>The average red blood cell transfusion is approximately 3 pints.</li>
                                                <li>The blood type most often requested by hospitals is Type O.</li>
                                                <li>Sickle cell patients can require  frequent blood transfusions throughout their lives.</li>
                                                <li>More than 1 million new people are diagnosed with cancer each year.  Many of them will need blood, sometimes daily, during their  chemotherapy treatment.</li>
                                                <li>A single car accident victim can require as many as 100 units of blood</li>
                                              </ul>
                                              <p><font color='ORANGE'>Facts about the blood supply</font></p>
                                              <ul>
                                                <li>Blood cannot be manufactured &ndash; it can only come from generous donors.<img src="images/blood_4.jpg" width="290" height="100" align="right" /></li>
                                                <li>Type O-negative blood (red cells) can be transfused to patients of  all blood types. It is always in great demand and often in short supply.</li>
                                                <li>Type AB-positive plasma can be transfused to patients of all other blood types. AB plasma is also usually in short supply.</li>
                                              </ul>
                                              <p><font color='ORANGE'>Facts about the blood donation process</font></p>
                                              <ul>
                                                <li>Donating blood is a safe process. A sterile needle is used only once for each donor and then discarded.<img src="images/blood_1.jpg" width="290" height="100" align="right" /></li>
                                                <li>Blood donation is a simple four-step process: registration, medical history&nbsp;and&nbsp;mini-physical, donation and refreshments.</li>
                                                <li>Every blood donor is given a mini-physical, checking the donor's  temperature, blood pressure, pulse and&nbsp;hemoglobin to ensure it is safe  for the donor to give blood.</li>
                                                <li>The actual blood donation typically takes less than 10-12 minutes.  The entire process, from the time you arrive to the time you leave,  takes about an hour and 15 min.</li>
                                                <li>The average adult has about 10 units of blood in his body. Roughly 1 unit is given during a donation.<img src="images/blood_2.jpg" width="290" height="100" align="right" /></li>
                                                <li>A healthy donor may donate red blood cells every 56 days, or double red cells every 112 days.</li>
                                                <li>A healthy donor may donate platelets as few as&nbsp;7 days apart, but a maximum of 24 times a year.</li>
                                                <li>All donated blood is tested for HIV, hepatitis B and C, syphilis  and other infectious diseases before it can be transfused to patients.</li>
                                              </ul>
                                              <span><font color='ORANGE'>Facts about blood and its components</font></span>
                                              <ul>
                                                <li>Blood makes up about 7 percent of your body's weight.</li>
                                                <li>There are four types of transfusable products that can be derived  from blood: red cells, platelets, plasma and cryoprecipitate.  Typically,&nbsp;two or three of these are produced from a unit of donated  whole blood &ndash; hence each donation can help save up to three lives.<img src="images/blood_7.jpg" width="220" height="174" align="right" /></li>
                                                <li>Donors can give either whole blood or specific blood components  only. The process of donating specific blood components &ndash; red cells,  plasma or platelets &ndash; is called apheresis.</li>
                                                <li>One transfusion dose of platelets can be obtained through one  apheresis donation of platelets or by combining the platelets derived  from&nbsp;five whole blood donations.</li>
                                                <li>Donated platelets must be used within&nbsp;five days of collection.</li>
                                                <li>Healthy bone marrow makes a constant supply of red cells, plasma  and platelets. The body will replenish the elements given during a  blood donation &ndash; some in a matter of hours and others in a matter of  weeks.</li>
                                              </ul>
                                              <p><font color='ORANGE'>Facts about donors</font></p>
                                              <ul>
                                                <li>The&nbsp;number one&nbsp;reason donors say they give blood is because they &quot;want to help others.&quot;</li>
                                                <li>Two most common reasons cited by people who don't give blood are: &quot;Never thought about it&quot; and &quot;I don't like needles.&quot;</li>
                                                <li>One donation can help save the lives of up to&nbsp;three people.<img src="images/blood_5.jpg" width="290" height="100" align="right" /></li>
                                                <li>If you began donating blood at age 18 and donated every 90 days  until you reached 60, you would have donated 30 gallons of blood,  potentially helping save more than 500 lives!</li>
                                                <li>Only 7 percent&nbsp;of people in India have O-negative blood  type.&nbsp;O-negative blood type donors are universal donors as their blood  can be given to people of all blood types.</li>
                                                <li>Type O-negative blood is needed in emergencies before the patient's blood type is known and with newborns who need blood.</li>
                                                <li>Thirty-five percent&nbsp;of people  have Type O (positive or  negative) blood. </li>
                                                <li>0.4 percent of people  have AB-blood type.  AB-type blood donors are universal donors of plasma, which is  often used in emergencies, for newborns and for patients requiring  massive transfusions.</li>
                                              </ul>
                                              <p><font color='ORANGE'>There are four main blood types: </font><strong><font color='RED'>A, B, AB</font> and<font color='RED'> O</font>.</strong></p>
                                              <p>In 1901, Karl Landsteiner, an Austrian physician, discovers the first three human blood groups. On his birthday i.e June 14th &quot;World Blood Donors Day&quot; celebrates. On October 1st &lsquo;National Blood Donation Day&rsquo; celebrates in India.</p>
                                              <p><strong><font color='ORANGE'>WHAT TYPE ARE YOU?</FONT></strong> </p>
                                              <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#FF0000">
                                                  <tr bgcolor="#FFFFFF">
                                                    <td colspan="2"><div align="center"><strong>FREQUENCY 
                                                      OF BLOOD TYPES</strong></div></td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>O+ 1 person in 3</td>
                                                    <td>O- 1 person in 15</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>A+ 1 person in 3</td>
                                                    <td>A- 1 person in 16</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>B+ 1 person in 12</td>
                                                    <td>B- 1 person in 67</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>AB+ 1 person in 29</td>
                                                    <td>AB- 1 person in 167</td>
                                                  </tr>
                                                </table>
                                              <br />
                                              <table width="80%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#FF0000">
                                                  <tr bgcolor="#FFFFFF">
                                                    <td colspan="2"><div align="center"><strong>EXAMPLES 
                                                      OF BLOOD USE </strong></div></td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>1. Automobile Accident</td>
                                                    <td>50 units of blood</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>2. Heart Surgery</td>
                                                    <td>6 units of blood / 6 units of platelets</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>3. Organ Transplant</td>
                                                    <td>40 units of blood / 30 units of platelets</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>4. 20 bags of cryoprecipitate</td>
                                                    <td>25 units of fresh frozen plasma</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>5. Bone Marrow Transplant</td>
                                                    <td>120 units of platelets/ 20 units of blood</td>
                                                  </tr>
                                                  <tr bgcolor="#FFFFFF">
                                                    <td>6. Burn Victims</td>
                                                    <td>20 units of platelets</td>
                                                  </tr>
                                              </table></td>
                                          </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="9" background="../../imgs/bg_bottom_inner.gif"></td>
                                  </tr>
                                </table></p>
														
<?php include "bottom.php"; ?>
</body>
</html>
