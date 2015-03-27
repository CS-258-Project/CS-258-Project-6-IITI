<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<!DOCTYPE html>

<html>
<head>
	<link rel="icon" type="image/png" href="images\demo\iit_indore_logo.png" />
	<title>Safety and Security Section - IIT Indore</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<?php
		include 'count.php';
	?>
	<script src="layout/scripts/jquery.min.js"></script> 
	<script src="function2.js"></script>
	<script src="function3.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript">
	var markers = [
		['Silver Spring Hostel', 22.660643,75.908205],
		['IET DAVV Campus', 22.680857,75.876048],
		['PACL Campus', 22.587034,75.780612],
		['Simrol Main Campus', 22.543739,75.955127]
	];

	function initializeMaps() {
		var myOptions = {
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			zoom:11,
			center: new google.maps.LatLng(22.680857,75.876048),
			disableDefaultUI: false,
			streetViewControl: true,
			mapTypeControl: true
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
		var infowindow = new google.maps.InfoWindow(); 
		var marker, i;
		var bounds = new google.maps.LatLngBounds();

		for (i = 0; i < markers.length; i++) { 
			var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
			bounds.extend(pos);
			marker = new google.maps.Marker({
				position: pos,
				map: map
			});
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(markers[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
		map.fitBounds(bounds);
	}
	</script>
	
	
	<style>
		.address{
			float: left;
			width: 25%;
			padding: 18px;
		}
		.content1{
			font-size:1.2em;
			font-color:rgb(0,0,0);;
			margin-top:20px;
			line-height: 120%;
		}
		footer h1{
			font-size: 1.17em;
			font-weight: bold;
			color: #2d4859;
			border-bottom: 2px solid #fff;
			margin-bottom: 3px;
			padding-bottom: 5px;
		}
		#Main_heading{
			font-size: 2.75em;
			color: #FFFFFF ;
			border-bottom: 2px solid #fff;
			margin-bottom: 3px;
			padding-bottom: 5px;
			padding-left:5px;
			font-family: "Arial";
		}
		#motto{
			text-align: center;
			vertical-align: center;
			font-size: 2em;
			font-weight:bold;
		}
		#contacts{
			padding-top:8px;
			padding-bottom:8px;
		}
		#tab{
			border:none;
		}
	</style>	
</head>

<!--###########################################################################################-->
<!--###########################################################################################-->

<body id="top" onLoad="initializeMaps()">
<!--###########################################################################################-->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
	  <a href="http://www.iiti.ac.in">
	  <img src="images\demo\logo.png"/>
	  </a>
    </div>
  </header>
</div>

<!--###########################################################################################-->

<div class="wrapper row1">	
   <div style="vertical-align: text-top">
		<h1 id="Main_heading">Safety And Security Section</h1>
	</div>
</div>

<!--###########################################################################################-->

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="col-full"> 
      <ul class="clear">
        <li><a href="#" id="_about" >Home</a></li>
        <li><a href="#">Safety</a>
          <ul>
            <li><a href="#" id="_fire_safety_trainings" >Fire Safety</a></li>
            <li><a href="http://chemistry.iiti.ac.in/safety.htm" target="_blank"> Chemical Safety</a></li>
            <li><a href="#" id="_chemical_safety">Security Operations</a></li>
            <li><a href="#" id="_emergency_response">Emergency Response</a></li>
            <li><a href="#" id="_chemical_biowaste_disposal">Chemical and Biowaste Disposal</a></li>
            <li><a href="#" id="_do_and_dont">Campus Do's and Don'ts</a></li>
          </ul>
        </li>
        <li><a href="#">Enquiries</a>
          <ul>
            <li><a href="#" id="_alert_notice">Alerts and Notices</a></li>
          </ul>
        </li>
         <li><a href="#">Information</a>
              <ul>
                <li><a href="#" id="_policies">Policies and Guidelines</a></li>
                <li><a href="#" id="_chemical_safety" >Security Operations</a></li>
                <li><a href="#" id="_theft_report">Vehicle Stickers</a></li>
                <li><a href="#" id="_id_cards">Identity Cards</a></li>
              </ul>
          </li>
         <li><a href="#">Committees</a>
              <ul>
				<li><a href="#" id="_personals">Personnel</a></li>
                <li><a href="#" id="_institute_committee">Institute Committee</a></li>
                <li><a href="#" id="_departmental_committees">Department Committee</a></li>
              </ul>
          </li>

        <li><a href="#">Lost and Found</a>
          <ul>
            <li><a href="#" id="_lost">Lost Items Section</a></li>
            <li><a href="#" id="_found">Found Items Section</a></li>
          </ul>
        </li>
        
        <li><a href="#">Feedback</a>
        <ul>
          <li><a href="feedbackform.php" target="_blank">Feedback</a></li>
          <li><a href="complaints_form.php" target="_blank">Complaints</a></li>
          
        </ul>
      </li>
      </ul>
    </nav>
  </div>
</div>

<!--###########################################################################################-->

<div class="wrapper row1">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><img src="images\demo\slider\slide_img_11.jpg"  style="width:960px ;height:270.125px" />
        <figcaption>
          <h3 align="center"><b>Simrol Campus</b></h3>
          <p align="center">The main security offices of IIT Indore are present at the office building at Simrol.</p>
        </figcaption>
      </figure>
	  <!-- ################################################################################################ -->
      <figure id="slide-2"><img src="images\demo\slider\slide_img_12.jpg"  style="width:960px ;height:270.125px"/>
        <figcaption>
          <h2 align="center"><b>State-of-the-art Security</b></h2>
          <p align="center">Our security force is best of the best and have undergone vigorous training. Seen here are security personnel at the PACL campus.</p>  
        </figcaption>
      </figure>
	  <!-- ################################################################################################ -->
      <figure id="slide-3"><img src="images\demo\slider\slide_img_13.jpg"  style="width:960px ;height:270.125px" />
        <figcaption>
          <h2 align="center"><b>Security Personnel</b></h2>
          <p align="center">Security forces on duty at the IET campus.</p>
        </figcaption>
      </figure>
	  <!-- ################################################################################################ -->
      <figure id="slide-4"><img src="images\demo\slider\slide_img_14.jpg" style="width:960px ;height:270.125px" />
        <figcaption>
          <h2 align="center"><b>Surveillance</b></h2>
          <p align="center">Arrival of the Director, Prof. Pradeep Mathur at the PACL campus under heavy security.</p>
        </figcaption>
      </figure>
	  <!-- ################################################################################################ -->
      <figure id="slide-5"><img src="images\demo\slider\slide_img_15.jpg" style="width:960px ;height:270.125px" />
        <figcaption>
          <h2 align="center"><b> Health</b></h2>
          <p align="center">The crowd at the laboratory health and safety workshop held at the IET campus of IIT Indore.</p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">Our Permanent Campus</a></li>
        <li><a href="#slide-2">Security at PACL</a></li>
        <li><a href="#slide-3">Security at IET</a></li>
        <li><a href="#slide-4">At work in PACL</a></li>
        <li><a href="#slide-5">Laboratory Safety Workshop</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>


<!-- ################################################################################################ --> 
<!--div class="wrapper row2">
  <div class="rounded">
		<h1 id="motto">Safety is First and Must for All</h1>
  </div>
</div>
<!-- ################################################################################################ --> 

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <ul class="nospace">
            <li class="btmspace-15"><a href="#" id="_committees"><em class="heading">Committees</em> <img class="borderedbox" src="images/demo/committee.jpg" style="width:212px ;height:128px" alt=""></a></li>
            <li class="btmspace-15"><a href="#" id="_lostandfound"><em class="heading">Lost And Found </em> <img class="borderedbox" src="images/demo/lost_and_found.jpg" alt=""></a></li>
            <li class="btmspace-15"><a href="http://safety.iiti.ac.in/emergency_contacts.pdf" target="_blank" ><em class="heading">Important Contacts</em> <img class="borderedbox" src="images/demo/contactus.jpg" alt=""></a></li>
            <li><div id="gallery"><a class="nlb" data-lightbox-gallery="gallery1" href="images/demo/gallery/emergency.png" >
				<em class="heading">Emergency Contact Numbers</em> 
				<img class="borderedbox" src="images/demo/slider/emergency.png" alt="">
			</div></a></li>	
          </ul>
        </div>
	
        
		<!-- Middle column -->
		<!-- ################################################################################################ -->
		
        <div class="one_half">
		  
		    <!--about us-->
			<div class="content1" id="about">
			  <p>Many parents are concerned about the safety of their daughter or son on a campus far from home. At IIT Indore, we understand that concern and accept our responsibility to enforce security policies to ensure our students enjoy their years at Indore as free as possible from threats to their safety or well-being. Campus safety and security are coordinated by the Department of Safety and Security.<br><br>IIT Indore security department personnel conduct patrols of the campus and residence areas 24 hours a day. IIT Indore security department enforce all regulations and laws -- both of the IIT and the Country. They also work cooperatively with the Indore Police Department to record incidents that may occur off campus.<br><br>IIT Indore security department strictly enforce laws regulating underage drinking. The use of controlled substances, weapons and alcoholic beverages are not permitted on campus. Illegal drugs are not permitted on campus. Our Drug-Free Campus Policy requires all employees and students to adhere to the IITs’ standards of conduct related to drugs and alcohol and the applicable legal sanctions under state or central law.<p>
			</div>
			
		   <!--Fire Safety & Trainings-->
			<div class="content1" id="fire_safety_trainings">
			  <h2 style="color:#06F;font-size: 20px;"> Fire Safety & Trainings</h2>
			  <li>First Aid Fire Fighting equipment like Fire Extinguishers have been installed in the hostel units/offices and other important places. Please notify after usage if any.</li><br>
			  <li>Evacuation signage, Smoke detectors, Fire alarm system have also been placed.</li><br> 
			  <li>We conduct regular training program for Security personnel as well as staff and students for necessary update.</li><br>
			  <p><h4 style="color:#F00"><b>#CAUTION: Tempering of any safety/security signage and instruments may attract extreme penalty and punishment.</h4></p></b>
			</div>
			
			<!--Security Operations-->
			<div class="content1" id="chemical_safety">
				 <h2 style="color:#06F;font-size: 20px;">Security Operations</h2>
				 <p>The Security Department is functional at the Institute headed by one Chief Security Officer, assisted by one Jr. Assistant and trained security personnel.
				</p>
				<p>Providing 24x7 security and safety to all the four campus of the Institute</p>
				<p>131 trained Security personnel including lady guards are deployed in a day</p>
				<p>To ensure and enforce safe environment for the students and staff at the institute.</p>
				<p>To safeguard the staff, students and property of the Institute against various threats.</p><br>
				<p>CCTV Camera surveillance: Points of importance have been provided with 24x7 CCTV camera coverage for surveillance.</p>
			</div>
		
			<!--Emergency Response-->
			<div class="content1" id="emergency_response">
					<h2 style="color:#06F;font-size: 20px;"> Emergency Response</h2>
					<li> In case of any emergency please contact security helpdesk of your location 
					or any security helpdesk in case you are outside the institute.</p>
					<li> <p> Keep yourself calm.</p> 
					<li> <p> Narrate the emergency type,  time and location briefly.</p>
					<li> <p> Find a suitable safe place around you.</p> 
					<li> <p> Take guidance and instructions from the Security Helpdesk.</p> 
					<li> <p> Listen carefully do's and don'ts</p> 
					<li> <p> Act according to the instructions</p> 
					<li> <p> avoid calling the Helpdesk too often it will restrict their necessary actions and reporting 
						on your information</p> 
					<li> <p> Give regular & correct feedback on being called by the Security Helpdesk.</p> 
					<p><a href="emergency_contacts.pdf" target="_blank" rel="nofollow" title="" class="style1"><h4><font color="#F00">Emergency Contact Numbers</font></h4></a></p> 	  
					<p></p>
			</div>	
		
			<!--Chemical & Biowaste Disposal-->
			<div class="content1" id="chemical_biowaste_disposal">
					<h2 style="color:#06F;font-size: 20px;"> Chemical & Biowaste Disposal</h2>
					<p><font size="2.5">Waste chemical and bio wastes are dispossed off by scietific and standard methods respectively by Chemistry and BSBE departments. Chemistry and BSBE Safety committees may be consulted for the disposal of any such wastes. Please refer to below links for more specific details.</font></p>
					<li><h4>Disposal of Chemical Waste</h4></li>
					<p><font size="2.5">All wastes from the laboratories must be properly labelled and placed in correct waste containers. MSDS recommendations must be carefully followed for storage of chemicals and to avoid storage of any incompatible chemicals together. Please “Do not mix incompatible Chemicals”.<p>
					Please contact Mr. Manish Kushwaha, Deputy Manager (Lab), Chemistry Lab, M-Block, IET-Campus at 0731 2438 725 or e-mail at mkushwaha@iiti.ac.in for the disposal of waste chemicals.

					 <a href="http://chemistry.iiti.ac.in/waste_disposal.htm" target="_blank" rel="nofollow" title="" class="style1"><b>(...more)</b></a></font></p>

					<li><h4>Disposal of Bio Waste</h4></li> 
					<p><font size="2.5">Bio Waste generated from all the labs in IET Campus is collected by the Hoswin Incinerator Pvt. Ltd. w.e.f. May 2014. A representative from the Hoswin Incinerator collects the waste from I.E.T campus 3 Days a week (i.e. Monday, Wednesday, Friday).<p>
					<b>Contact Details for Hoswin Incinerator is as follows:</b><p>
					Mr. Pramod Chowksey<br> Hoswin Incinerator Pvt. Ltd., 196 A-197, B- Sector-F, Sanwar Road, Indore<br>
					Ph. No. : Mob. 9755644433 &nbsp; Tel 0731-4042445<p>

					The Bio Waste is collected in different coloured poly bags (according to the category) kept in IET Campus M-300A BSBE Lab 2nd Floor.<p>
					The colour coding of poly bags according to the waste is described below:<p>
					1. <b>Yellow Plastic Bag: </b> Microbiology & Biotechnology waste (wastes from laboratory cultures, stocks or specimens of micro-organisms live or attenuated vaccines, human and animal cell culture used in research and infectious agents from research and industrial  laboratories, wastes from production of biological, toxins, dishes and devices used for transfer of cultures)<p>
					2. <b>Blue Plastic Bag: </b> Waste Sharps (needles, syringes, scalpels blades, glass etc. that may cause puncture and cuts. This includes both used & unused sharps).</font></p>
			</div>
				
			<!--Campus: Do’s & Don’t-->
			<div class="content1" id="do_and_dont">
				    <h2 style="color:#06F;font-size: 20px;"> Campus: Do’s &amp; Don’t</h2>
					<li>Calm and quite stay at the hostel, mess dining halls and classrooms.</li><br>
					<li>Observance of safety regulations while at labs.</li><br>
					<li>Avoid unnecessary interference with other public (not concerned with IIT)</li><br>
					<li>We expect Exemplary moral conduct from our students.</li><br>
					<li>Please maintain a habit of good dress up especially at dining hall in the mess.</li><br>
					<li>Students are advised not to move out of the hostels after 10:30 pm for safety reasons.</li><br>
					<li>Students are advised not to cross Highway which is located in front of Silver Springs Township for any reason(s).</li><br>
					<li>Please do not crowd in individual units- there are other families staying in the premises.</li><br>
					<li>Smoking, consumption of liquor, storage,  handling/disposal of toxic, inflammable, hazardous, dangerous material is strictly prohibited. In case found strict action would be taken against the individual found doing so.</li><br>
					<li>Fire Fighting equipment are installed in the units, usage should be done only on emergency. Please notify after usage if any.</li><br>
						<p><h4 style="color:#F00"><b>#CAUTION: Tempering of any safety/security signage and instruments may attract extreme penalty and punishment.</h4></p></b>
					</p>
			</div>	

			<!--Alerts & Notice-->
			<div class="content1" id="alert_notice">
				  <h2 style="color:#06F;font-size: 20px;"> Alerts &amp; Notice</h2>
				  <p><li>This is to inform all that Monday (dated Sep. 15, 2014) onwards entry at Main Campus (Simrol) will be restricted and Identity 
					   Cards will be checked at the boom-barrier. Your cooperation is highly solicited.</li></p>
				  <p><li>This is to inform all that stickers for four and two wheeler vehicles are now available with Safety and Security Department.,
			</div>	

			<!--Policies & Guidelines-->
			<div class="content1" id="policies">
				<h2 style="color:#06F;font-size: 20px;"> Guidelines</h2>
				<li><a href="#" target="_blank" rel="nofollow" title="" class="style1"><h4>Safety & Security Policy</h4></a></li>   
				<li><a href="Guidelines_Safety and Security.pdf" target="_blank" rel="nofollow" title="" class="style1"><h4>Guidelines for Safety & Security Committee</h4></a></li> 
				<li><a href="http://chemistry.iiti.ac.in/safety_guidelines.htm" target="_blank" rel="nofollow" title="" class="style1"><h4>Chemistry Safety Guidelines</h4></a></li>  
				<li><a href="http://bsbe.iiti.ac.in/bsbe/Index_files/Biosafety-Manual-BSBE-IIT%20Indore.pdf" target="_blank" rel="nofollow" title="" class="style1"><h4>BSBE Safety Guidelines</h4></a></li>  
				<li><a href="http://ee.iiti.ac.in/safety_guidelines.html" target="_blank" rel="nofollow" title="" class="style1"><h4>Electrical Engineering Safety Guidelines</h4></a></li>    
			</div>
			
			<!--Vehicle Stickers-->
			<div class="content1" id="theft_report">
					<h2 style="color:#06F;font-size: 20px;"> Vehicle Stickers</h2>
					<P> Officials requiring the vehicle may deposit the copy of RC of their vehicle duly signed with Name, Designation, department and their 
					ID code.</p> 
					<P>The document so deposited by them will be forwarded to Security Help Desk at IET and they can reveive their vehicle sticker on next day from the security
					help desk they wish to collect</p>
					<h3 style="color:#06F"> Following is requested for usage of the stickers:</h3>
					<p>1.	Copy of the Registration Certificate of the vehicle </p>
					<p>2.   The stickers in four wheelers may be pasted on front windscreen on left side which is easily visible and identifiable </p>
					<p>3.	The stickers in two wheelers may be pasted on front body at a location which is easily visible and identifiable</p>
					<p>4.	Please return the stickers to security helpdesk in the event of sale of the vehicle, 
							change of job from IIT Indore to some outside agency at indore or any other part of country/outside country</p>
					<p>5.	Re-issuance will be considered on individual request on need basis.</p>
					<p>6.	Please note that the stickers are for facilitating identification of vehicles of faculty and staff in our parking etc., 
					display of the sticker on vehicle does not dispense the production of individual identity cards while making entry to any of the campus of the institute.</p>  
			</div>
			
			<!--ID Cards-->
			<div class="content1" id="id_cards">
				  <h2 style="color:#06F;font-size: 20px;"> ID Cards</h2>
				  <p>Temporary Identity Cards for research scholars and people with short term assignments are being issued from Security Department</p>
				  <p><b>DOCUMENTS  REQUIRED</b></p>
				  <p><li>An application duly forwarded by the concerned authority</li></p>
				  <p><li>one Stamp size photograph</li></p>
				  <p> The Temporary Id Card will be issued same day</p>
			</div>	

			<!--Departmental Committees-->
			<div class="content1" id="departmental_committees">
				<h3 style="color:#06F;font-size: 20px;"> Department Committees</h3>
				<li><h4 ><b>Chemistry Safety Committee</b></h4></li>
				<p>Dr. Shaikh M. Mobin (Convener)<br> Dr. Biswarup Pathak <br> Dr. Sampak Samanta <br> Dr. Rajneesh Misra (Ex Officio) <br> Head Chemistry (Ex Officio) <br> Dr. Sanjay K Singh (Ex Officio)<br> Ms. Sarita Batra</p>
				<br>
				<li><h4><b>Physics Safety Committee</b></h4></li>
					<p>Dr. Krushna Mavani <br> Dr. Sarika Jalan <br> Dr. Sudeshna Chattopadhya</p>
				<br>
				<li><h4><b>Biosciences and Biomedical Engineering Safety Committee</b></h4></li>
					<p>Dr. Debasis Nayak (Convener) <br> Dr. C. Venkatesh <br> Dr. Amit Kumar <br> Head BSBE (Ex Officio) <br> Mr. Subodh Mishra (Student representative)</p>
				<br>
				<li><h4><b>Mechanical Engineering Safety Committee</b></h4></li>
					<p>Dr. Anand Parey (Convener) <br> Dr. Neelesh K. Jain <br> Dr. Rithunesh Kumar</p>
				<br>
				<li><h4><b>Electrical Engineering Safety Committee</b></h4></li>
					<p>Dr. Vipul Singh <br> Dr. Vasudevan S. <br> Dr. Trapti Jain</p>
				<br>
			</div>
			
			<!--Institute Committee-->
			<div class="content1" id="institute_committee">
				<h3 style="color:#06F;font-size: 20px;"> Safety and Security Committee of the Institute</h3>
				<div id="contacts">
				<center>
					<img src="images\demo\Sanjay.jpg" class="img-circle"  style="width:120px;height:120px"/> <br>
					<strong>Dr. Sanjay Kumar Singh (Convener)</strong> <br />
					<span class="glyphicon glyphicon-envelope"></span>: sksingh@iiti.ac.in<br />
					<span class="glyphicon glyphicon-phone"></span>: +91 731 2438 730<br />
				</center>
				</div>
				<div id="contacts">
				<center>
						<img src="images\demo\Rajesh_Kumar.JPG" class="img-circle"  style="width:120px;height:120px" /><br>
						<strong>Dr. Rajesh Kumar (Member)</strong><br />
						<span class="glyphicon glyphicon-envelope"></span>: rajeshkumar@iiti.ac.in<br />
						<span class="glyphicon glyphicon-phone"></span>: +91 731 2438 761<br />
				</center>
				</div>
				<div id="contacts">
				<center>
						<img src="images\demo\Trapti_jain.png" class="img-circle"  style="width:120px;height:120px" /><br>
						<strong>Dr. Trapti Jain (Member)</strong><br />
						<span class="glyphicon glyphicon-envelope"></span>: traptij@iiti.ac.in<br />
						<span class="glyphicon glyphicon-phone"></span>: +91 732 4240 757<br />
				</center>
				</div>
				<div id="contacts">
				<center>
						<img src="images\demo\Kazi.jpg" class="img-circle"  style="width:120px;height:120px" /><br>
						<strong>Dr. Kazi Sabiruddin (Member)</strong><br />
						<span class="glyphicon glyphicon-envelope"></span>: skazi@iiti.ac.in<br />
						<span class="glyphicon glyphicon-phone"></span>: +91 732 4240 743<br />
				</center>
				</div>
				<div id="contacts">
				<center>
						<img src="images\demo\Ramakant_Kaushik.jpg" class="img-circle"  style="width:120px;height:120px" /><br>
						<strong>Mr. Ramakant Kaushik (CSO, Member)</strong><br />
						<span class="glyphicon glyphicon-envelope"></span>: cso@iiti.ac.in<br />
						<span class="glyphicon glyphicon-phone"></span>: +91 731 2438 918<br />
				</center>
				</div>
			</div>
				
			<!--personnel-->
			<div class="content1" id="personals">
			<h3 style="color:#06F;font-size: 20px;"> Personnel</h3>
				<div id="contacts">
				<center>
						<img src="images\demo\Ramakant_Kaushik.jpg" class="img-circle"  style="width:120px;height:120px" /><br>
						<strong>Mr. Ramakant Kaushik (CSO, Member)</strong><br />
						<span class="glyphicon glyphicon-envelope"></span>: cso@iiti.ac.in<br />
						<span class="glyphicon glyphicon-phone"></span>: +91 731 2438 918<br />
				</center>
				</div>	
				<div id="contacts">
				<center>
					<img src="images\demo\atul.jpg" class="img-circle"  style="width:120px;height:120px"/> <br>
					<strong>Mr. Atul K. Saran (Assistant, Security)</strong> <br />
					<span class="glyphicon glyphicon-envelope"></span>: atulsaran@iiti.ac.in<br />
					<span class="glyphicon glyphicon-phone"></span>: +91 731 2438 788<br />
				</center>
				</div>
			</div>

			<!--Committees-->
			<div class="content1" id="committees">
				<li><a href="#" rel="nofollow" id="_institute_committee" ><h4>Institute Committee</h4></a></li>  
				<li><a href="#" rel="nofollow" id="_departmental_committees"><h4>Departmental Committee</h4></a></li>  
			</div>
			
			
			<!--Lost And Found-->
			<div class="content1" id="lostandfound">
				<li><a href="lostandfound.php" rel="nofollow" target="_blank"><h4>Fill lost form</h4></a></li>  
				<li><a href="#" rel="nofollow" id="_lost"><h4>Lost Item Section</h4></a></li>  
				<li><a href="#" rel="nofollow" id="_found"><h4>Found Item Section</h4></a></li>  
			</div>
			
		</div>
		
		<!-- ################################################################################################ -->
		<!--lost section-->
		<div id="lost">
		<div class="three_quarter">
			<center>
			<table>
				<tr>
					<td> 
						<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Watch</b><br><span class=""></span>Lost: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
						</div>
					</td>
					<td>   
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Pen Drive</b><br><span class=""></span>Lost: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
									</div>
								</td>
				  
				</tr>

				<tr>
					<td> 
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Waterbottle</b><br><span class=""></span>Lost: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
									</div>
								
								</td>
					<td>  
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Umbrella</b><br><span class=""></span>Lost: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
								</div></td>
				</tr>
			</table>
			</center>
			</div>	
		</div>
		
		<!-- ################################################################################################ -->
		<!--found section-->
		<div id="found">
		<div class="three_quarter">
			<center>
			<table>
				<tr>
					<td> 
						<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Watch</b><br><span class=""></span>Found: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
						</div>
					</td>
					<td>   
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Pen Drive</b><br><span class=""></span>Found: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
									</div>
								</td>
				  
				</tr>

				<tr>
					<td> 
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Waterbottle</b><br><span class=""></span>Found: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
									</div>
								
								</td>
					<td>  
									<div class="container">
										<center><img src="images\demo\gallery\small.png"/>
										<p><b>Umbrella</b><br><span class=""></span>Found: 27 March 2015<br>
										Contact<span class=""></span>:+91 778 4455 977</p></center>
								</div></td>
				</tr>
			</table>
			</center>
			</div>	
		</div>
		
        
		
		<!-- Right Column -->
		<!-- ################################################################################################ -->
		
        <div class="one_quarter sidebar"> 
          <div id="cso">
		  <div class="sdb_holder">
            <h6 style="color: #2d4859; font-weight: bold"><center>Chief Security Officer</center></h6>
			<div class="mediacontainer"><center><img src="images\demo\Ramakant_Kaushik.jpg"/>
              <p><b>Mr.Ramakant Kaushik</b><br><span class="glyphicon glyphicon-envelope"></span>:cso@iiti.ac.in<br>
			  <span class="glyphicon glyphicon-phone"></span>:+91 731 2438 918</p></center>
            </div>
		  </div>
          </div>
		  <!-- ################################################################################################ -->
          <div id="quicklinks">
		  <div class="sdb_holder">
            <h6 style="color: #2d4859; font-weight: bold;"><center>Quick Links</center></h6>
            <ul class="nospace quickinfo">
              <li class="clear" ><a href="feedbackform.html" target="_blank"><img src="images\demo\feedback.jpg"/>Fill feedback form</a></li>
              <li class="clear" ><a href="complaints_form.html" target="_blank"><img src="images\demo\compaint.jpg"/>Register a complaint</a></li>
            </ul>
          </div>
		  </div>
		  <br>
		  <div id="counter">
		  <div class="sdb_holder">
            <h6 style="color: #2d4859; font-weight: bold;"><center>Counter</center></h6>
            <ul class="nospace quickinfo">
				<?php
					hit_count();
				?>
            </ul>
          </div>
		  </div>
        </div>
		
		<!-- ################################################################################################ --> 

      </div>
    <div class="clear"></div>
    </main>
  </div>
</div>


<footer>
<div class="wrapper row1">
<div class="rounded">
    <main class="container clear"> 
		<div id="map_canvas" style="width:100%;height:300px;"></div>
		<div class="address">
				<h1>IET DAVV Campus</h1>
				<p>Indian Institute of
				Technology Indore, M Block, IET-DAVV Campus,
				Khandwa Road,<br>
				Indore 452017 <br>
				India<br>
				Tel: +91-731-2438717<br>
				Mob: +91-7509062837
			  </p>
		</div>
		<div class="address">
			<h1>PACL Campus</h1>
			<p>Indian Institute of
			Technology Indore,
			Opposite to Veterinary College Mhow,
			Survey No. 113/2-B,Mhow Road,
			<br>    Indore 453446<br>
			India,<br>
			Tel: +91-732-4240777<br>
			Mob: +91-7509062836
			</p>
		</div>
		<div class="address">
			<h1>Simrol Main Campus</h1>
			<p>
			Indian Institute of Technology Indore,
			Khandwa Road, Simrol<br>
			Indore 452020<br>
			India<br>
			Tel: +91-731-2428917<br>
			Mob: +91-7509062839
			</p>
		</div>
		<div class="address">
			<h1>Hostel</h1>
			<p>
			TC-56,
			SilverS spring,<br>
			Bypass Road<br>
			Indore 452020<br>
			India<br>
			Mob: +91-7509062835
			</p>
		</div>
	</main>
</div>
</div>
</footer>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p align="center">Copyright Project 6 Team CS258 IIT Indore &copy; 2014 - All Rights Reserved -</p> 
  </div>
</div>
<!-- ################################################################################################ -->
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
<script src="layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>

</body>
</html>