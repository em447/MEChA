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
    <title>Plan de Santa Barbara</title>
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
    		<h2>Plan de Santa Barbara</h2>
    		<hr>
    		<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
    			<ul class="nav nav-tabs">
    				<li class="active"><a href="#tab1" data-toggle="tab">Manifesto</a></li>
    				<li><a href="#tab2" data-toggle="tab">Political Action</a></li>
    				<li><a href="#tab3" data-toggle="tab">Perspective</a></li>
    				<li><a href="#tab4" data-toggle="tab">Consciousness</a></li>
    				<li><a href="#tab5" data-toggle="tab">Mobilization</a></li>
    				<li><a href="#tab6" data-toggle="tab">Campus Organizing</a></li>
    				<li><a href="#tab7" data-toggle="tab">Student</a></li>
    				<li><a href="#tab8" data-toggle="tab">Recruitment</a></li>
    				<li><a href="#tab9" data-toggle="tab">Planning</a></li>
    				<li><a href="#tab10" data-toggle="tab">Community</a></li>
    				<li><a href="#tab11" data-toggle="tab">Education</a></li>
    				<li><a href="#tab12" data-toggle="tab">In the Barrio</a></li>
    			</ul>
    			<div class="tab-content">
    				<div class="tab-pane active" id="tab1">
   						<div class="container pull-left">
							<h3>Manifesto</h3>
							<hr>
							<p>For all peoples, as with individual, the time comes when they must reckon with their history. For the Chicano the present is a time of renaissance, of renacimiento. Our people and our community, el barrio and la colonia, are expressing a new consciousness and a new resolve. Recognizing the historical tasks confronting our people and fully aware of the cost of human progress, we pledge our will to move. We will move forward toward our destiny as a people. We will move against those forces which has denied us freedom of expression and human dignity. Throughout history the quest for cultural expression and freedom has taken the form of a struggle. Our struggle tempered by the lessons of the American past, is an historical reality.
							</p>
							<p>
    						For decades Mexican people in the United States struggle to realize the ''American Dream''. And some, a few, have. But the cost, the ultimate cost of assimilation, required turning away from el barrio and la colonia. In the meantime, due to the racist structure of this society, to our essentially different life style, and to the socio-economic functions assigned to our community by Anglo-American society - as suppliers of cheap labor and dumping ground for the small-time capitalist entrepreneur- the barrio and colonia remained exploited, impoverished, and marginal.
    						</p>
    						<p>
    						As a result, the self-determination of our community is now the only acceptable mandate for social and political action; it is the essence of Chicano commitment. Culturally, the word Chicano, in the past a pejorative and class-bound adjective, has now become the root idea of a new cultural identity for our people. It also reveals a growing solidarity and the development of a common social praxis. The widespread use of the term Chicano today signals a rebirth of pride and confidence. Chicanismo simply embodies and ancient truth: that a person is never closer to his/her true self as when he/she is close to his/her community. 
    						</p>
    						<p>
    						Chicanismo draws its faith and strength from two main sources: from the just struggle of our people and from an objective analysis of our community's strategic needs. We recognize that without a strategic use of education, an education that places value on what we value, we will not realize our destiny. Chicanos recognize the central importance of institutions of higher learning to modern progress, in this case, to the development of our community. But we go further: we believe that higher education must contribute to the information of a complete person who truly values life and freedom.
    						</p>
    						<p>
    						The destiny of our people will be fulfilled. to that end, we pledge our efforts and take as our credo what Jose Vasconcelos once said at a time of crisis and hope: "At this moment we do not come to work for the university, but to demand that the university work for our people.'' 
							</p>
						</div>
					</div>
   					<div class="tab-pane" id="tab2">
   						<div class="container pull-left">
							<h3>Political Action Introduction</h3>
							<hr>
							<p>For the Movement, political action essentially means influencing the decision-making process of those institutions which affect Chicanos, the university, community organizations, and non-community institutions. Political action encompasses the elements which function in a progression: political consciousness, political mobilization, and tactics. Each part breaks down into further subdivisions. Before continuing with specific discussions of these three categories, a brief historical analysis must be formulated. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab3">
						<div class="container pull-left">
							<h3>Historical Perspective</h3>
							<hr>
							<p>The political activity of the Chicano Movement at colleges and universities to date has been specifically directed toward establishing Chicano student organizations (UMAS, MAYA, MASC, M.E.Ch.A., etc.) and institutionalizing Chicano Studies programs. A variety of organizational forms and tactics have characterize these student organizations.
							</p>
    						<p>
    						One of the major factors which led to political awareness in the 60's was the clash between Anglo-American educational institutions and Chicanos who maintained their cultural identity. Another factor was the increasing number of Chicano students who became aware of the extent to which colonial conditions characterized their communities. The result of this domestic colonialism is that the barrios and colonias are dependent communities with no institutional power base and significantly influencing decision-making. Within the last decade, a limited degree of progress has taken place in securing a base of power within educational institutions.
    						</p>
    						<p>
    						Other factors which affected the political awareness of the Chicano youth were: the heritage of the Chicano youth movements of the 30's and 40's; the failure of the Chicano political efforts of the 40's and 50's; the bankruptcy of the Mexican- American pseudo-political associations; and the disillusionment of Chicano participants in the Kennedy campaigns. Among the strongest influences of Chicano youth today have been the National Farm Workers Association, the Crusades for Justice, and the Alianza Federal de Pueblos Libres, The Civil Rights, the Black Power, and the Anti-war movements were other influences.
    						</p>
    						<p>
    						As political consciousness increased, there occurred a simultaneously a renewed cultural awareness which, along with social and economical factors, led to the proliferation of Chicano youth organizations. By the mid 1960's, MASC, MAYA, UMAS, La Vida Nueva, and M.E.Ch.A. appeared on campus, while the Brown Berets, Black Berets, ALMA, and la Junta organized the barrios and colonias. These groups differed from one another depending on local conditions and their varying state of political development. Despite differences in name and organizational experience, a basic unity evolved.
    						</p>
    						<p>
    						These groups have had a significant impact on the awareness of large numbers of people, both Chicano and non-Chicano. Within the communities, some public agencies have been sensitized, and others have been exposed. On campuses, articulation of demands and related political efforts have dramatized NUESTRA CAUSA. Concrete results are visible in the establishment of corresponding supportive services. The institutionalization of Chicano Studies marks the present stage of activity; the next stage will involve the strategic application of university and college resources to the community. One immediate result will be the elimination of the artificial distinction which exist between the students and the community. Rather than being its victims, the community will benefit from the resources of the institutions of higher learning. 
							</p>
						</div>
    				</div>
    				<div class="tab-pane" id="tab4">
    					<div class="container pull-left">
							<h3>Political Consciousness</h3>
							<hr>
							<p>Commitment to the struggle for Chicano liberation is the operative definition of the ideology used here. Chicanismo involves a crucial distinction in political consciousness between a Mexican American (or Hispanic) and a Chicano mentality. The Mexican American or Hispanic is a person who lacks self-respect and pride in one's ethnic and cultural background. Thus, the Chicano acts with confidence and with a range of alternatives in the political world. He is capable of developing and effective ideology through action.
							</p>
    						<p>
    						Mexican Americans (or Hispanics) must be viewed as potential Chicanos. Chicanismo is flexible enough to relate to the varying levels of consciousness within La Raza. Regional variations must always be kept in mind as well as the different levels of development, composition, maturity, achievement, and experience in political action. Cultural nationalism is a means of total Chicano liberation.
    						</p>
    						<p>
   							There are definite advantages to cultural nationalism, but no inherent limitations. A Chicano ideology, especially as it involves cultural nationalism, should be positively phrased in the form of propositions to the Movement. Chicanismo is a concept that integrates self-awareness with cultural identity, a necessary step in developing political consciousness. As such, it serves as a basis for political action, flexible enough to include the possibility of coalitions. The related concept of La Raza provides an internationalist scope of Chicanismo, and La Raza Cosmica furnishes a philosophical precedent. Within this framework, the Third World concept merits consideration. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab5">
						<div class="container pull-left">
							<h3>Political Mobilization</h3>
							<hr>
							<p>Political mobilization is directly dependent on political consciousness. As political consciousness develops, the potential for political action increases.
							</p>
    						<p>
    						The Chicano student organization in institutions of higher learning is central to all effective political mobilization. Effective mobilization presupposes precise definition of political goals and of the tactical interrelationships of roles. Political goals in any given situations must encompass the totality of Chicano interests in higher education. The differentiations of roles required by a given situation must be defined on the basis of mutual accountability and equal sharing of responsibility. Furthermore, the mobilization of community support not only legitimizes the activities of Chicano student solidarity in axiomatic in all aspects of political action.
    						</p>
    						<p>
    						Since the movements is definitely of national significance and scope, all student organizations should adopt one identical name throughout the state and eventually the nation to characterize the common struggle of La Raza de Aztlan. The net gain is a step toward greater national unity which enhances the power in mobilizing local campus organizations.
    						</p>
    						<p>
   							When advantageous, political coalitions and alliances with non-Chicano groups may be considered. A careful analysis must precede the decision to enter into a coalition. One significant factor is the community's attitude toward coalitions. Another factor is the formulation of a mechanism for the distribution of power that ensures maximum participation in decision making: i.e., formulation of demands and planning of tactics. When no longer politically advantageous, Chicano participation in the coalition ends. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab6">
						<div class="container pull-left">
							<h3>Campus Organizing Introduction</h3>
							<hr>
							<p>M.E.Ch.A. is a first step to tying the students groups throughout the Southwest into a vibrant and responsive network of activists who will respond as a unit to oppression and racism and will work in harmony when initiating and carrying put campaigns of liberation for our people.
							</p>
    						<p>
    						As of present, wherever one travels throughout the Southwest, one finds that there are different levels of awareness of different campuses. The student movement is to a large degree a political movement and as such must not elicit from our people the negative reason. To this end, then we must re-define politics for our people to be a means of liberation. The political sophistication of our Raza must be raised so that they do not fall prey to apologists and vendidos whose whole interest if their personal career of fortune. In addition, the student movement is more than a political movement, it is cultural and social as well. The spirit of M.E.Ch.A. must be one of hermandad and cultural awareness. The ethic of profit and competition, of greed and intolerance, which the Anglo society offers must be replaced by our ancestral communalism and love for beauty and justice. M.E.Ch.A. must bring to the mind of every young Chicano that the liberations of this people from prejudice and oppression is in his hands and this responsibility is greater than personal achievement and more meaningful that degrees, especially if they are earned at the expense of his identity and cultural integrity.
    						</p>
    						<p>
    						M.E.Ch.A., then, is more than a name; it is a spirit of unity, of brotherhood, and a resolve to undertake a struggle for liberation in society where justice is but a word. M.E.Ch.A. is a means to an end. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab7">
						<div class="container pull-left">
							<h3>Function of M.E.Ch.A.- To the Student</h3>
							<hr>
							<p>To socialize and politicize Chicano students of their particular campus to the ideals of the movement. It is important that every Chicano student on campus be made to feel that he has a place on the campus and that he/she has a feeling of familia with his/her Chicano brothers, and sisters. Therefore, the organization in its flurry of activities and projects must not forget or overlook the human factor of friendship, understanding, trust, etc. As well as stimulating hermanidad, this approach can also be looked at in more pragmatic terms. If enough trust, friendship, and understanding are generated, then the loyalty and support can be relied upon when a crisis faces the group or community. This attitude must not merely provide a social club atmosphere but the strengths, weaknesses, and talents of each member should be known so that they may be utilized to the greatest advantage. Know one another. Part of the reason that students will come to the organization is in search of self-fulfillment. Give that individual the opportunity to show what he/she can do. Although the Movement stresses collective behavior, it is important that the individual be recognized and given credit for his/her efforts. When people who work in close association know one another well, it is more conductive to self-criticism and re-evaluation, and this every M.E.Ch.A. person must be willing to submit to. Periodic self-criticism often eliminates static cycles of unproductive behavior. It is an opportunity for fresh approaches to old problems to be surfaces and aired; it gives new leadership a chance to emerge; and must be recognized as a vital part of M.E.Ch.A. M.E.Ch.A. can be considered a training ground for leadership, and as such no one member or group of members should dominate the leadership positions for long periods of time. This tends to take care of itself considering tie transitory nature of students. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab8">
						<div class="container pull-left">
							<h3>Recruitment and Education</h3>
							<hr>
							<p>Action is the best organizer. During and immediately following direct action of any type--demonstrations, marches, rallies, or even symposiums and speeches-- new faces will often surface and this is where much of the recruiting should be done. New members should be made to feel that they are part of the group immediately and not that they have to go through a period of warming up to the old membership. Each new member should be given a responsibility as soon as possible and fitted into the scheme of things according to his or her talents and interests.
							</p>
    						<p>
    						Since the college student is constantly faced with the responsibility of raising funds for the movements, whether it be for legal defense, the grape boycott, or whatever reason, this is an excellent opportunity for internal education. Fund-raising events should always be educational. If the event is a symposium or speech or debate, is usually an excellent opportunity to spread the Chicano Liberation Movement philosophy. If the event is a pachanga or tardeada or baile, this provides an excellent opportunity to practice and teach the culture in all its facets. In addition, each M.E.Ch.A. chapter should establish and maintain an extensive library of Chicano materials so that the membership has ready access to material which will help them understand their people and their problems. General meetings should be educational. The last segment of each regular meeting can be used to discuss ideological or philosophical differences, or some event in the Chicano's history. It should be kept in mind that there will always be different levels of awareness within the group due to the individual's background or exposure of the movement. This must be taken into consideration so as not to alienate members before they have had a chance to listen to the argument for liberation.
    						</p>
    						<p>
    						The best educational device is being in the barrio as often as possible. More often than not the members of M.E.Ch.A. will be products of the barrio; but many have lost contact with their former surroundings, and this tie must be re-established if M.E.Ch.A. is to organize and work for La Raza.
    						</p>
    						<p>
   							The following things should be kept in mind in order to develop group cohesiveness: 1) know the talents and abilities of each member; 2) every semester must be given a responsibility, and recognition should be given for their efforts; 3) of mistakes are made, they should become learning experiences for the whole group and not merely excuses for ostracizing individual members; 4) since many people come to M.E.Ch.A. seeking self-fulfillment, they must be seized to educate the student to the Chicano philosophy, culture, and history; 6) of great importance is that a personal and human interaction exist between members of the organization so that such things as personality clashes, competition, ego-trips, subterfuge, infiltration, provocateurs, cliques, and mistrust do not impede the cohesion and effectiveness of the group. Above all the feeling of hermanidad must prevail so that the organization is more to the members than just a club or a clique. M.E.Ch.A. must be a learning and fulfilling experience that develops dedication and commitment.
   							</p>
    						<p>
   							A delicate but essential question is discipline. Discipline is important to an organization such as M.E.Ch.A. because many may suffer form the indiscretion of a few. Because of the reaction of the general population to the demands of the Chicano, one can always expect some retribution or retaliation for gains made by the Chicano, be it in the form of legal cations or merely economic sanction on the campus. Therefore, it becomes essential that each member pull his load and that no one be allowed to be dead weight. Carga floja is dangerous, and if not brought up to par, it must be cut loose. The best discipline comes from mutual respect, and therefore, the leaders of the group must enjoy and give this respect. The manner of enforcing discipline, however, should be left up to the group and the particular situation. 
    					   </p>
						</div>
					</div>
					<div class="tab-pane" id="tab9">
						<div class="container pull-left">
							<h3>Planning and Strategy</h3>
							<hr>
							<p>Actions of the group must be coordinate in such a way that everyone knows exactly what he is supposed to do. This requires that at least rudimentary organizational methods and strategy be taught to the group. Confusion is avoid different the plans and strategies are clearly stated to all. The objective must be clear to the group at all times, especially during confrontations and negotiations. There should be alternate plans for reaching the objectives, and these should be explained to the group so that it is not felt that a reversal of position or capitulation has been carried out without their approval. The short, as well as the long, range values and effects of all actions should be considered before actions are taken. This assumes that their is sufficient time to plan and carefully map out actions, which brings up another point: don't be caught off guard, don't be forced to act out of haste; choose your own battleground and your own time schedule when possible. Know your power base and develop it. A student group is more effective if it can claim the support of the community and support on the campus itself form other sectors than the student population. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab10">
						<div class="container pull-left">
							<h3>The Function of M.E.Ch.A. - To the Campus Community</h3>
							<hr>
							<p>Other students can be important to M.E.Ch.A. in supportive roles; hence, the question of coalitions. Although it is understood and quite obvious that the viability and amenability of coalition varies form campus to campus, some guidelines might be kept in mind. These questions should be asked before entering into any binding agreement. Is it beneficial to tie oneself to another group in coalition which will carry one into conflicts for which on is ill-prepared or involve one with issues on which one is ill-advised? Can one sagely go into a coalition where one group is markedly stronger than another? Does M.E.Ch.A. have an equal voice in leadership and planning in the coalition group? Is it perhaps better to enter into a loose alliance for a given issue? How does leadership of each group view coalitions? How does the membership? Can M.E.Ch.A. hold up its end of the bargain? Will M.E.Ch.A. carry dead weight in a coalition? All of these and many more questions must be asked and answered before one can safely say that he/she will benefit from and contribute to a strong coalition effort.
							</p>
    						<p>
    						Supportive groups. When moving on campus it is often well-advised to have groups who are willing to act in supportive roles. For example, there are usually any number of faculty members who are sympathetic, but limited as to the numbers of activities they will engage in. These faculty members often serve on academic councils and senates and can be instrumental in academic policy. They also provide another channel to the academic power structure and can be used as leverage in negotiation. However, these groups are only as responsive as the ties with them are nurtured. This goes not mean, compromise M.E.Ch.A.'s integrity; it merely means laying good groundwork before an issue is brought up, touching bases with your allies before hand.
    						</p>
    						<p>
   							Sympathetic administrators. This a delicate area since administrators are most interested in not jeopardizing their positions and often will try to act as buffers or liaison between the administration and the student group. In the case of Chicano administrators, it should not be priori be assumed, he/she must be given the chance to prove his/her allegiance to La Causa. As such, he/she should be the Chicano's person in the power structure instead of the administration's Mexican-American. It is from the administrator that information can be obtained as to the actual feasibility of demands or programs to go beyond the platitudes and pleas of unreasonableness with which the administration usually answers proposals and demands. The words of the administrator should never be the deciding factor in students' actions. The student must at all time make their own decisions. It is very human for people to establish self-interest. Therefore, students must constantly remind the Chicano administrators and faculty where their loyalty and allegiance lie. It is very easy for administrators to begin looking for promotions just as it is very natural for faculty members to seek positions of academic prominence.
   							</p>
    						<p>
    						In short, it is the students who must keep after Chicano and non-Chicano administrators and faculty to see that they do not compromise the position of the student and the community. By the same token, it is the student who must come to the support of these individuals if they are threatened for their support of the student. Students must be careful not to become a political level for others. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab11">
						<div class="container pull-left">
							<h3>Function of M.E.Ch.A. - Education</h3>
							<hr>
							<p>It is a fact that the Chicano has not often enough written his/her own history, his/her own anthropology, his/her own sociology, his/her own literature. He/she must do this if he is to survive as a cultural entity in this melting pot society, which seeks to dilute varied cultures into a gray upon gray pseudo-culture of technology and materialism. The Chicano student is doing most of the work in the establishment of study programs, centers, curriculum development, entrance programs to get more Chicano into college. This is good and must continue, but students must be careful not to be co-opted in their fervor for establishing relevance on the campus. Much of what is being offered by college systems and administrators is too little too late. M.E.Ch.A. must not compromise programs and curriculum which are essential for the total education of the Chicano for the sake of expediency. The students must not become so engrossed in programs and centers created along establishes academic guidelines that they forget the needs of the people which these institutions are meant to serve. To this end, barrio input must always be given full and open hearing when designing these programs, when creating them and in running them. The jobs created by these projects must be filled by competent Chicanos, not only the Chicano who has the traditional credentials required for the position, but one who has the credentials of the Raza. To often in the past the dedicated pushed for a program only to have a vendido sharp-talker come in and take over and start working for his Anglo administrator. Therefore, students must demand a say in the recruitment and selection of all directors and assistant directors of student-initiated programs. To further insure strong if not complete control of the direction and running of programs, all advisory and steering committees should have both student and community components as well as sympathetic Chicano faculty as member.
							</p>
    						<p>
    						Tying the campus to the barrio. The colleges and universities in the past have existed in an aura of omnipotence and infallibility. It is time that they be made responsible and responsive to the communities in which they are located or whose member they serve. As has already been mentioned, community members should serve on all program related to Chicano interests. In addition to this, all attempts must be made to take the college and university to the barrio, whether it be in form of classes giving college credit or community centers financed by the school for the use of community organizations and groups. Also, the barrio must be brought to the campus, whether it be for special programs or ongoing services which the school provides for the people of the barrio. The idea must be made clear to the people of the barrio that they own the schools and the schools and all their resources are at their disposal. The student group must utilize the resources open to the school for the benefit of the barrio at every opportunity. This can be done by hiring more Chicanos to work as academic and non-academic personnel on the campus; this often requires exposure of racist hiring practices now in operation in may college and universities. When functions, social, or otherwise, are held in the barrio under the sponsorship of the college and university, monies should be spent in the Barrio. This applies to hiring Chicano contractors to build on campus, etc. Many colleges and universities have publishing operations which could be forced to accept barrio works for publication. Many other things could be considered in using the resources of the school to the barrio. There are possibilities for using the physical plant and facilities not mentioned here, but this is an area which has great potential. 
							</p>
						</div>
					</div>
					<div class="tab-pane" id="tab12">
						<div class="container pull-left">
							<h3>M.E.Ch.A. in the Barrio </h3>
							<hr>
							<p>Most colleges in the southwest are located near or in the same town as a barrio. Therefore, it is the responsibility of M.E.Ch.A. members to establish close working relationship with organization in the barrio. The M.E.Ch.A. people must be able to take the pulse of the barrio and be able to respond to it. However, M.E.Ch.A. must be careful not to overstep its authority or duplicate the efforts of another organization already in the barrio. M.E.Ch.A. must be able to relate to all segments of the barrio, from the middle-class assimilationists to the vatos locos.
							</p>
    						<p>
    						Obviously, every barrio has its particular needs, and M.E.Ch.A. people must determine with the help of those in the barrio where they can be most effective. There are, however, some general areas which M.E.Ch.A. can involve itself. Some of them are: 1) policing social and governmental agencies to make them more responsive in a humane and dignified was to the people of the barrio; 2) carrying out research on the economic and credit policies of merchants in the barrio and exposing fraudulent and exorbitant establishment; 3) speaking and communicating with junior high and high school students, helping with their projects, teaching them organizational techniques, supporting their actions; 4) spreading the message of the movement by any media available - this means speaking, radio, television, local newspaper, underground paper, poster, art, theaters; in shot, spreading propaganda of the Movement; 5) exposing discrimination in hiring and renting practices and many other ares which the student because of his/her mobility, his/her articulation, and his/her vigor should take as hi/her responsibility. It may mean at time having to work in conjunction with other organizations. If this is the case and the project is one begun by the other organization, realize that M.E.Ch.A. is there as a supporter and should accept the direction of the group involved. Do not let loyalty to an organization cloud responsibility to a greater force - la Causa.
    						</p>
    						<p>
    						Working in the barrio is an honor, but is also a right because we come form these people, and as, mutual respect between the barrio and the college group should be the rule. Understand at the same time, however, that there will initially be mistrust and often envy on the part of some in the barrio for the college student. This mistrust must be broken down by a demonstration of affection for the barrio and La Raza through hard work and dedication. If the approach is one of a dilettante or of a Peace Corps volunteer, the people will know it and act accordingly. If it is merely a cathartic experience to work among the unfortunate in the barrio - stay out.
    						</p>
    						<p>
    						Of the community, for the community. Por la Raza habla el espiritu.
							</p>
						</div>
					</div>
    						

    		</div>
    	</div>
    		
    		
    		
    		
    		
    			
    	</div>
    </div>
    
    
    
    
    </body>
</html>