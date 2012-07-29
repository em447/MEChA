<?php
	session_start();
	if(isset($_POST['logout'])){
  	unset($_SESSION['user']);
  	header("Location: home.php");
  	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Constitution</title>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		 $('.carousel').carousel()
		 $(".collapse").collapse()
	</script>
  </head>	
  <body>
  <?php
  	require("nav1.php");
  ?>
    
    <div class="container-fluid">
    	
    	</br>
    	
    	<div class="row">
    		<div class="hero-unit">
    		<h2>Movimiento Estudiantil Chican@ de Aztlan Constitution</h2>
    		<hr>
    		<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
    			<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab1" data-toggle="tab">Name</a></li>
    				<li><a href="#tab2" data-toggle="tab">Affiliations</a></li>
    				<li><a href="#tab3" data-toggle="tab">Purpose</a></li>
    				<li><a href="#tab4" data-toggle="tab">Membership</a></li>
    				<li><a href="#tab5" data-toggle="tab">Government</a></li>
    				<li><a href="#tab6" data-toggle="tab">Officers</a></li>
    				<li><a href="#tab7" data-toggle="tab">Executive Board</a></li>
    				<li><a href="#tab8" data-toggle="tab">Outside Positions</a></li>
    				<li><a href="#tab9" data-toggle="tab">Meetings</a></li>
    				<li><a href="#tab10" data-toggle="tab">Committees</a></li>
    				<li><a href="#tab11" data-toggle="tab">Amendments</a></li>
    			</ul>
    			<div class="tab-content">
   					<div class="tab-pane active" id="tab1">
   						<div class="container pull-left">
							<h3>ARTICLE I: Name</h3>
							<hr>
							<p>The name of this organization shall be Movimiento Estudiantil Chicano de Aztlan
							(MEChA).
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab2">
						<div class="container pull-left">
							<h3>ARTICLE II: Affiliations</h3>
							<hr>
							<p>Section 1: By adopting the name of MEChA, we recognize our affiliation a larger national movement whose goals and guidelines to achieving those goals are set forth by the Plan of Santa Barbara. At the same time we proclaim our individuality by setting our own intermediate goals and guidelines while striving to achieve the larger national goals of this organization.
							Possible change in affiliation.
							</p>
							<p>
							Section 2: MEChA de Cornell supports and participates in the East Coast Chicano Student Forum (ECCSF) whose goals are set forth in their respective Constitution.
							</p>
							<p>
							Section 3: MEChA de Cornell supports and participates with the Este Aztlan region whose goals are set forth in their respective Constitution.
							</p>
						</div>
    				</div>
    				<div class="tab-pane" id="tab3">
    					<div class="container pull-left">
							<h3>ARTICLE III: Purpose</h3>
							<hr>
							<p>MEChA shall provide academic and personal support to students in the organization, enhance the community's awareness of the Chicano culture through educational, cultural and social programming, and promote the continued education of Chicano/a/Mexican- American students. In particular, MEChA will work to increase the number of Chicano/a students at Cornell University through an active recruiting program (follow through in the spring).
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab4">
						<div class="container pull-left">
							<h3>ARTICLE IV: Membership</h3>
							<hr>
							<p>Membership is open to students who are enrolled at Cornell University, who express an active interest in achieving the goals of the organization, who are also interested in the history of the people of Mexican descent. Members must be acknowledged by MEChA de Cornell, which will be handled by the secretary. Dues will be decided on each year by the Executive Board, and will determine membership.
							</p>
							<p>
							Section 1: Active Membership--To be considered an active member, one must attend 2 General Body meetings and two MEChA events per semester.
							</p>
							<p>
							Section 2: Non-voting members will consist of our advisor(s) and inactive members. Advisor(s) will not be required to pay dues. Non-voting members will be able to voice their opinions and participate in MEChA activities. They should be considered as MEChA de Cornell members and therefore have access to all other privileges MEChA offers except running for office.
							</p>
							<p>
							Section 3: The privileges afforded to all MEChA members include the use of the listserve, MEChA archives, and other available MEChA resources. Active undergraduate members will be able to vote on any issue presented to the general body. Only past and present active members can run for office. Freshmen and transfer members are exempt from active membership requirements for the first semester but are encouraged to participate and attend MEChA meetings and events. Active MEChA members will also be given priority to attend conferences supported by MEChA de Cornell.
							</p>
							<p>
							Section 4--Dues: Under the introduction to Article IV, payment of dues determines membership. Dues are used to help fund to conference fees and MEChA activities.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab5">
						<div class="container pull-left">
							<h3>ARTICLE V: Government</h3>
							<hr>
							<p>Section 1:</p>
							<ol> 
							<li>
							The Executive Board will consist of the officers listed in Article VI, Section 1.
							The Executive Board ‘s duties as a whole are to carry out the daily activities of MEChA, and make decisions on behalf of the organization. The Executive Board must inform the general body of all its decisions. If the general body majority disapproves, then the executive board will review its decision. After the Eboard has made appropriate changes the decision will be presented before the G-body.
							</li>
							<li>
							Decisions: For any decision made by the Co-Chair an active member of MEChA de Cornell may bring in to question the actions of the Cho-chair. Immediately after a vote shall be taken by the general body. A discussion will follow at the end of which a vote will be taken; if there is a simple major the decision will be override. A vote will be taken to take the appropriate decision.
							</li>
							</ol>
							<p>Section 2--Election Process:</p>
							<ol>
							<li>To run for office, an individual must be nominated by an official member or him/herself at the time nominations are open. A member may run for more than one office, but must not hold two positions unless number of membership requires it.
							</li>
							<li>
							The nominees must speak on their behalf before voting takes place.
							</li>
							<li>
							Voting shall take place at the meeting of the nominee speech.
							</li>
							<li>
							Only students who are officially registered as active members of MEChA de Cornell are able to vote.
							</li>
							<li>
							Ballots will be given out to members at the meeting and any exception will be made as deemed necessary by the Executive Board.
							</li>
							</ol>
							<p>Section 3:</p>
							<ol>
							<li>In the event an officer is not performing his/her duties or is not acting in the best interest of MEChA, he/she may be removed from office by a two-thirds general body vote. A discussion must be held at a general body meeting prior to voting. An informal meeting will be held by the Co-Chairs to determine if a problem is present with an Executive Board member. An Executive Board meeting will follow to discuss the problem with that member present. At this meeting, a two-thirds vote for discussion with the General Body must be made. The General Body meeting will require a copy of the officer’s duties and a statement describing their failure to fulfill duties.
							</li>
							<li>
							In the event, the Co-Chair has not performed his/her duties, the Executive Board must unanimously vote to strip the Co-Chair of his/her authority and present the removal to the General Body which needs a 2/3 vote.
							</li>
							</ol>
						</div>
					</div>
					<div class="tab-pane" id="tab6">
						<div class="container pull-left">
							<h3>ARTICLE VI: Officers</h3>
							<hr>
							<p>Section 1: This organization shall have two Co-Chairs, a Secretary, a Treasurer, a Political Chair, an Educational Chair, an ECCSF Representative, a Social Media Chair, Social Chair and two Freshman Representatives.
							</p>
							<p>Section 2: Duties and Responsibilities</p>
							<p>Co-Chairs:</p>
							<ol>
							<li>
							Maintain motivation and involvement among members
							</li>
							<li>
							Encourage leadership
							</li>
							<li>
							Administrative duties: run MEChA meetings
							</li>
							<li>
							Type and copy agenda for each meeting
							</li>
							<li>
							Make sure that the day-to-day operations of MEChA run smoothly
							</li>
							<li>
							Aid in event planning for the semester
							</li>
							<li>
							Training of new executive board
							</li>
							<li>
							Represent MEChA on campus and
							</li>
							<li>
							Act as organizational, advisor, and graduate student liaisons
							</li>
							<li>
							Maintain MEChA listerv: mecha-l@cornell.edu
							</li>
							<li>
							Must attend and report at all MEChA general body and eboard meetings
							</li>
							</ol>
							<p>Treasurer:</p>
							<ol>
							<li>
							Create a semester budget and apply accordingly for funds
							</li>
							<li>
							Keep accounts of all MEChA funds, including bank accounts, fund-raisers, receipts, and SAFC budget
							</li>
							<li>
							Train the assistant treasurer
							</li>
							<li>
							all MEChA events must maintain the ledger
							</li>
							<li>
							Write all checks and handle reimbursements
							</li>
							<li>
							Must keep track of donations
							</li>
							<li>
							Assist event planner in fundraising
							</li>
							<li>
							Keep chronological records of transactions
							</li>
							<li>
							Collect and track member dues
							</li>
							<li>
							Attend or find substitute for ALANA meetings
							</li>
							<li>
							Attend Minority Finance Commission meetings (MFC)
							</li>
							<li>
							Track finances and give quarterly reports to general membership
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							</ol>
							<p>Political Chair:</p>
							<ol>
							<li>
							Ensure that MEChA is at the forefront of campus political issues
							</li>
							<li>
							Must attend La Asociación Latina meetings; alternate with cultural chair
							</li>
							<li>
							Archive political articles and e-mails pertinent to events on campus and the international community
							</li>
							<li>
							Keep MEChA members aware of and involved in local and international political matters of interest to MEChA members
							</li>
							<li>
							Must lead a minimum of one political discussions for General Body Meetings
							</li>
							<li>
							Must organize at bare minimum one major political event per semester pertaining to an on campus political goal
							</li>
							<li>
							Must cosponsor at least one political event with another organization
							</li>
							<li>
							Write at least one article for the Cornell Daily Sun per semester
							</li>
							<li>
							Coordinate programs in conjunction with Cultural Chair
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							</ol>
							<p>Cultural Chair:</p>
							<ol>
							<li>
							Educate MEChA members as to historical and current cultural events
							</li>
							<li>
							Must lead a minimum of one educational discussions for G-Body Meetings
							</li>
							<li>
							Coordinate programs in conjunction with the Political Chair
							</li>
							<li>
							Coordinate at least one philanthropic event (i.e. Sabado Gigante, farmworker tutoring, Into the Streets)
							</li>
							<li>
							Cosponsor at least one cultural event
							</li>
							<li>
							Head
							<ul>
							<li>
							the committee of September 16,
							</li>
							<li>
							Dia de los Muertos,
							</li>
							<li>
							Cinco de Mayo
							</li>
							</ul>
							</li>
							<li>
							Collect and archive educational and course materials
							</li>
							<li>
							Must find scholarships/educational opportunities for MEChA members
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							</ol>
							<p>Social Chair</p>
							<ol>
							<li>
							Prepare a retreat at the beginning of the semester in which MEChistas will be able to get to know each other
							</li>
							<li>
							Publicize events
							</li>
							<li>
							Be in charge of creating a scrapbook each semester
							</li>
							<li>
							Organize at least one social event per semester for MEChA members
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings
							</li>
							</ol>
							<p>Secretary:</p>
							<ol>
							<li>
							Create a database which includes dated minutes from each meeting and a copy of the agenda
							</li>
							<li>
							keep and maintain a monthly and semester calendar of events
							</li>
							<li>
							keep record of membership and attendance to meetings
							</li>
							<li>
							Compile a membership directory
							</li>
							<li>
							Keep and maintain files of each event
							</li>
							<li>
							Keep track of MEChA points
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							</ol>
							<p>Social Media Chair:</p>
							<ol>
							<li>
							Maintain and update website, Facebook, and Twitter
							</li>
							<li>
							Maintain online resource center, which includes links to pertinent Chicano web sites
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings
							</li>
							</ol>
							<p>Freshman Representatives:</p>
							<ol>
							<li>
							Keep the freshmen in contact with MEChA events
							</li>
							<li>
							Recruitment freshman members
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							<li>
							Lead a freshman committee in coordinating at least one event during the spring semester
							</li>
							</ol>
							<p>ECCSF Representative:</p>
							<ol>
							<li>
							Make all ECCSF conference arrangements (registration)
							</li>
							<li>
							attend all ECCSF conferences and board meetings
							</li>
							<li>
							participate in planning other conference events
							</li>
							<li>
							Maintain relations with east coast schools
							</li>
							<li>
							Must give monthly updates
							</li>
							<li>
							Must attend and report at all MEChA member and e-board meetings.
							</li>
							</ol>
							<p>Section 3-- Term of Office: The term of office is two semesters. The following officers begin their term in the fall: one Co-Chair, freshmen representatives, Treasurer and ECCSF Representative. The following officers begin their term in the spring: one Co-Chair, secretary, social media chair, political chair, educational chair, and social chair.
							</p>
							<p>
							Section 4--Vacancies: In the event that an office is left vacant, the e-board shall appoint an interim for the remainder of the term.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab7">
						<div class="container pull-left">
							<h3>ARTICLE VII: The Executive Board</h3>
							<hr>
							<p>Section 1: The Executive Board shall consist of the officers described in Article VI, Section 1.
							Executive meetings are open to members but have no voting rights.
							</p>
							<p>
							Section 2: The Executive Board shall meet at least once every two weeks.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab8">
						<div class="container pull-left">
							<h3>ARTICLE VIII: Official Positions Outside Executive Board</h3>
							<hr>
							<p>The following positions do not possess voting privileges in the Executive Board.
							</p>
							<p>
							Section 1--Advisors: The advisor must be a Cornell faculty member. The advisor position shall be determined at the beginning of every year.
							</p>
							<p>
							Section 2--Este Aztlan Representatives: There should be two representatives, preferably one female and one male. Each representative is responsible for attending all Este Aztlan regional conferences. Their term, which begins in the spring, can last for one year or if desired by that rep and approved by the active members to ensure the continuity of the position. The representative should be familiar with Robert’s Rules of Order.
							</p>
							<p>
							Section 3-- Assistant Treasurer: The term for this position is only during the spring semester, after which he/she will become the treasurer. This position involves a commitment of taking on the treasurer’s position the semester that follows. The duties of the assistant treasurer will include becoming familiar with SAFC guidelines and the treasurer’s handbook for all student organizations.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab9">
						<div class="container pull-left">
							<h3>ARTICLE IX: Meetings</h3>
							<hr>
							<p>This organization shall hold general body meetings at least twice a month.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab10">
						<div class="container pull-left">
							<h3>ARTICLE X: Committees</h3>
							<hr>
							<p>All committees shall be created by the Co-Chairs with the advice and consent of MEChA members... The membership on a committee is open to all MEChA members. The chairs of these committees are responsible for updating the e-board of all progress.
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab11">
						<div class="container pull-left">
							<h3>ARTICLE XI: Amendments</h3>
							<hr>
							<p>Section 1: Any motion to amend these articles shall be presented to the MEChA general body in writing at least 24 hours prior to the meeting where these will be voted upon.
							</p>
							<p>
							Section 2: A two-thirds vote by the general body shall be required to amend these articles.
							Revised by the Executive Board and MEChA General Body of Spring 2012
							</p>
						</div>
					</div>
    						

    		</div>
    	</div>
    		
    		
    		
    		
    		
    			
    	</div>
    </div>
    
    
    
    
    </body>
</html>