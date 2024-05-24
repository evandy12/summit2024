<?php require_once 'include/head.php'; ?>
<?php require_once 'include/nav2.php'; ?>


<style>
    .font-weight-bold {
        font-weight: 500;
    }

    .b-none {
        border-bottom: none !important;
    }

    a .active {
        color: #dc143c !important;
    }
</style>
<link rel="stylesheet" type="text/css" href="css/schedule.css">


<!-- PageBanner
<div class="container-fluid page-banner blogpost no-padding" style='background: url("images/sponsor.jpg"); -webkit-background-size: cover;	background-size: cover;	background-position: center center; background-repeat: no-repeat; background-size: cover;'>
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Summit Schedule</h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Schedule</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
PageBanner /- -->




<body class="light-vz">
  <!-- Schedule Section -->
	<div class="container-fluid no-padding schedule-section">
		<div class="section-padding"></div>
		<div class="container">
			<div class="section-header">
				<h3>Conference schedule</h3>
				<span>Our Schedule table</span>
			</div>	
			<div class="schedule-block">
				<img src="images/schedule.jpg" alt="schedule"/>
				<div class="col-md-11">
				<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#schedule_1" aria-controls="schedule_1" role="tab" data-toggle="tab">
								<h3>PDW</h3>
								<span>03-June-2024</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#schedule_2" aria-controls="schedule_2" role="tab" data-toggle="tab">
								<h3>Day 1</h3>
								<span>04-June-2024</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#schedule_3" aria-controls="schedule_3" role="tab" data-toggle="tab">
								<h3>Day 2</h3>
								<span>05-June-2024</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#schedule_4" aria-controls="schedule_4" role="tab" data-toggle="tab">
								<h3>Day 3</h3>
								<span>06-June-2024</span>
							</a>
						</li>
						
					</ul>  


		 		<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="schedule_1">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_1_venue1" aria-controls="schedule_1_venue1" role="tab" data-toggle="tab">Adlon</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_1_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">                        
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_1" aria-expanded="false" aria-controls="schedule_accrodion_content_1">
															Registration
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:30 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_2" aria-expanded="true" aria-controls="schedule_accrodion_content_2">
														Roundtable Discussions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Table 1: Prof. Glenn Richey</strong></span>
																	<!-- <span>Rasheed Olawale Azeez</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 2: Prof. Dale Rogers</strong></span>
																	<!-- <span>Mulugeta Chane</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 3: Prof. Adegoke Oke</strong></span>
																	<!-- <span>Ibrahim Hassan</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 4: Prof. Thomas Choi</strong></span>
																	<!-- <span>Ellis Kofi Akwaa-Sekyi</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 5: Prof. Nat Boso</strong></span>
																	<!-- <span>Jonathan Ikeolumba</span> -->
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3">									
													<h4 class="panel-title">
														<span>10:30 AM - 10:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_3" aria-expanded="true" aria-controls="schedule_accrodion_content_3">
														Break/Changeover
														</a>
													</h4>
												</div>
												

											</div>

											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_4">									
													<h4 class="panel-title">
														<span>10:45 AM - 12:30 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_4" aria-expanded="true" aria-controls="schedule_accrodion_content_4">
														Roundtable Discussions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_4">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Table 1: Prof. Glenn Richey</strong></span>
																	<!-- <span>Bezawit Demissie</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 2: Prof. Dale Rogers</strong></span>
																	<!-- <span>Elikplim Tamakloe</span> -->
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_5">
													<h4 class="panel-title">
														<span>12:30 PM - 1:30 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_5" aria-expanded="false" aria-controls="schedule_accrodion_content_5">
															Networking Lunch
														</a>
													</h4>
												</div>
					<!--
												<div id="schedule_accrodion_content_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

					-->
											</div>
										</div>										
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_2">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_2_venue1" aria-controls="schedule_2_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue2" aria-controls="schedule_2_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue3" aria-controls="schedule_2_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue4" aria-controls="schedule_2_venue4" role="tab" data-toggle="tab">Stafford</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue5" aria-controls="schedule_2_venue5" role="tab" data-toggle="tab">Siam</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_2_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_101">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_101" aria-expanded="false" aria-controls="schedule_accrodion_content_101">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_101" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_101">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_102">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_102" aria-expanded="true" aria-controls="schedule_accrodion_content_102">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_102" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_102">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_103">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_103" aria-expanded="true" aria-controls="schedule_accrodion_content_103s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_103" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_103">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_104">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_104" aria-expanded="true" aria-controls="schedule_accrodion_content_104">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_104">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_105">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_105" aria-expanded="true" aria-controls="schedule_accrodion_content_105">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_105">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_106">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_106" aria-expanded="true" aria-controls="schedule_accrodion_content_106">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_107">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_107" aria-expanded="true" aria-controls="schedule_accrodion_content_107">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_107">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Kelvinne Mocke</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_108">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_108" aria-expanded="true" aria-controls="schedule_accrodion_content_108">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_109">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_109" aria-expanded="true" aria-controls="schedule_accrodion_content_109">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_109">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_110">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_110" aria-expanded="true" aria-controls="schedule_accrodion_content_110">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_111">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_111" aria-expanded="true" aria-controls="schedule_accrodion_content_111">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_111">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_112">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_112" aria-expanded="true" aria-controls="schedule_accrodion_content_112">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_113">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_113" aria-expanded="true" aria-controls="schedule_accrodion_content_113">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_113">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_114">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_114" aria-expanded="true" aria-controls="schedule_accrodion_content_114">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_114">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_115">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_115" aria-expanded="false" aria-controls="schedule_accrodion_content_115">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_115" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_115">
													<div class="panel-body">
														<p>Session Chair: Dr. Samuel Fosso-Wamba</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue2">
									<!-- Adlon schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1101">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1101" aria-expanded="false" aria-controls="schedule_accrodion_content_1101">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_1101" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1101">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1102">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1102" aria-expanded="true" aria-controls="schedule_accrodion_content_1102">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1102" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1102">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1103">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1103" aria-expanded="true" aria-controls="schedule_accrodion_content_1103s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1103" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1103">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1104">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1104" aria-expanded="true" aria-controls="schedule_accrodion_content_1104">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_1104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1104">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1105">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1105" aria-expanded="true" aria-controls="schedule_accrodion_content_1105">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1105">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1106">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1106" aria-expanded="true" aria-controls="schedule_accrodion_content_1106">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1107">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1107" aria-expanded="true" aria-controls="schedule_accrodion_content_1107">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1107">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Kelvinne Mocke</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1108">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1108" aria-expanded="true" aria-controls="schedule_accrodion_content_1108">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1109">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1109" aria-expanded="true" aria-controls="schedule_accrodion_content_1109">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1109">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1110">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1110" aria-expanded="true" aria-controls="schedule_accrodion_content_1110">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1111">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1111" aria-expanded="true" aria-controls="schedule_accrodion_content_1111">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1111">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1112">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1112" aria-expanded="true" aria-controls="schedule_accrodion_content_1112">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1113">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1113" aria-expanded="true" aria-controls="schedule_accrodion_content_1113">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1113">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1114">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1114" aria-expanded="true" aria-controls="schedule_accrodion_content_1114">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1114">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1115">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1115" aria-expanded="false" aria-controls="schedule_accrodion_content_1115">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1115" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1115">
													<div class="panel-body">
														<p>Session Chair: Dr. Samuel Fosso-Wamba</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>													
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue3">
									<!-- Baltschug schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1201">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1201" aria-expanded="false" aria-controls="schedule_accrodion_content_1201">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_1201" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1201">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1202">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1202" aria-expanded="true" aria-controls="schedule_accrodion_content_1202">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1202" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1202">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1203">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1203" aria-expanded="true" aria-controls="schedule_accrodion_content_1203s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1203" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1203">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1204">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1204" aria-expanded="true" aria-controls="schedule_accrodion_content_1204">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_1204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1204">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1205">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1205" aria-expanded="true" aria-controls="schedule_accrodion_content_1205">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1205" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1205">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1206">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1206" aria-expanded="true" aria-controls="schedule_accrodion_content_1206">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1207">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1207" aria-expanded="true" aria-controls="schedule_accrodion_content_1207">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1207" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1207">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Kelvinne Mocke</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1208">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1208" aria-expanded="true" aria-controls="schedule_accrodion_content_1208">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1209">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1209" aria-expanded="true" aria-controls="schedule_accrodion_content_1209">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1209" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1209">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1210">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1210" aria-expanded="true" aria-controls="schedule_accrodion_content_1210">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1211">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1211" aria-expanded="true" aria-controls="schedule_accrodion_content_1211">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1211" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1211">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1212">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1212" aria-expanded="true" aria-controls="schedule_accrodion_content_1212">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1213">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1213" aria-expanded="true" aria-controls="schedule_accrodion_content_1213">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1213" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1213">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1214">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1214" aria-expanded="true" aria-controls="schedule_accrodion_content_1214">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1214" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1214">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1215">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1215" aria-expanded="false" aria-controls="schedule_accrodion_content_1215">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1215" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1215">
													<div class="panel-body">
														<p>Session Chair: Dr. Samuel Fosso-Wamba</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue4">
									<!-- Stafford schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1301">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1301" aria-expanded="false" aria-controls="schedule_accrodion_content_1301">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_1301" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1301">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1302">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1302" aria-expanded="true" aria-controls="schedule_accrodion_content_1302">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1302" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1302">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1303">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1303" aria-expanded="true" aria-controls="schedule_accrodion_content_1303s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1303" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1303">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1304">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1304" aria-expanded="true" aria-controls="schedule_accrodion_content_1304">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_1304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1304">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1305">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1305" aria-expanded="true" aria-controls="schedule_accrodion_content_1305">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1305" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1305">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1306">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1306" aria-expanded="true" aria-controls="schedule_accrodion_content_1306">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1307">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1307" aria-expanded="true" aria-controls="schedule_accrodion_content_1307">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1307" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1307">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Kelvinne Mocke</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1308">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1308" aria-expanded="true" aria-controls="schedule_accrodion_content_1308">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1309">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1309" aria-expanded="true" aria-controls="schedule_accrodion_content_1309">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1309" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1309">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1310">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1310" aria-expanded="true" aria-controls="schedule_accrodion_content_1310">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1311">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1311" aria-expanded="true" aria-controls="schedule_accrodion_content_1311">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1311" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1311">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1312">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1312" aria-expanded="true" aria-controls="schedule_accrodion_content_1312">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1313">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1313" aria-expanded="true" aria-controls="schedule_accrodion_content_1313">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1313" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1313">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1314">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1314" aria-expanded="true" aria-controls="schedule_accrodion_content_1314">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1314" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1314">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1315">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1315" aria-expanded="false" aria-controls="schedule_accrodion_content_1315">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1315" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1315">
													<div class="panel-body">
														<p>Session Chair: Dr. Samuel Fosso-Wamba</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue5">
									<!-- Siam schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1401">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1401" aria-expanded="false" aria-controls="schedule_accrodion_content_1401">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_1401" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1401">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1402">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1402" aria-expanded="true" aria-controls="schedule_accrodion_content_1402">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1402" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1402">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1403">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1403" aria-expanded="true" aria-controls="schedule_accrodion_content_1403s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1403" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1403">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1404">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1404" aria-expanded="true" aria-controls="schedule_accrodion_content_1404">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_1404" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1404">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1405">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1405" aria-expanded="true" aria-controls="schedule_accrodion_content_1405">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1405" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1405">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1406">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1406" aria-expanded="true" aria-controls="schedule_accrodion_content_1406">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1407">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1407" aria-expanded="true" aria-controls="schedule_accrodion_content_1407">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1407" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1407">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Kelvinne Mocke</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1408">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1408" aria-expanded="true" aria-controls="schedule_accrodion_content_1408">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1409">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1409" aria-expanded="true" aria-controls="schedule_accrodion_content_1409">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1409" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1409">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1410">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1410" aria-expanded="true" aria-controls="schedule_accrodion_content_1410">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1411">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1411" aria-expanded="true" aria-controls="schedule_accrodion_content_1411">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1411" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1411">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1412">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1412" aria-expanded="true" aria-controls="schedule_accrodion_content_1412">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1413">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1413" aria-expanded="true" aria-controls="schedule_accrodion_content_1413">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1413" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1413">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1414">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1414" aria-expanded="true" aria-controls="schedule_accrodion_content_1414">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1414" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1414">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1415">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1415" aria-expanded="false" aria-controls="schedule_accrodion_content_1415">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1415" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1415">
													<div class="panel-body">
														<p>Session Chair: Dr. Samuel Fosso-Wamba</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_3">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_3_venue1" aria-controls="schedule_3_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue2" aria-controls="schedule_3_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue3" aria-controls="schedule_3_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue4" aria-controls="schedule_3_venue4" role="tab" data-toggle="tab">Stafford</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue5" aria-controls="schedule_3_venue5" role="tab" data-toggle="tab">Siam</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_3_venue1">
									<!-- All Halls schedule content for this day -->		
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_201">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_201" aria-expanded="false" aria-controls="schedule_accrodion_content_201">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_202">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_202" aria-expanded="true" aria-controls="schedule_accrodion_content_202">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_202" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_202">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_203">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_203" aria-expanded="false" aria-controls="schedule_accrodion_content_203">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_204">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_204" aria-expanded="false" aria-controls="schedule_accrodion_content_204">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_204">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_205">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_205" aria-expanded="false" aria-controls="schedule_accrodion_content_205">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_206">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_206" aria-expanded="false" aria-controls="schedule_accrodion_content_206">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_206">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_207">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_207" aria-expanded="false" aria-controls="schedule_accrodion_content_207">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_208">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_208" aria-expanded="false" aria-controls="schedule_accrodion_content_208">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_208">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_209">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_209" aria-expanded="false" aria-controls="schedule_accrodion_content_209">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_210">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_210" aria-expanded="false" aria-controls="schedule_accrodion_content_210">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_210">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_211">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_211" aria-expanded="false" aria-controls="schedule_accrodion_content_211">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_212">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_212" aria-expanded="false" aria-controls="schedule_accrodion_content_212">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_212">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_213">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_213" aria-expanded="false" aria-controls="schedule_accrodion_content_213">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_213" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_213">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>									
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue2">
									<!-- Adlon schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2101">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2101" aria-expanded="false" aria-controls="schedule_accrodion_content_2101">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2102">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2102" aria-expanded="true" aria-controls="schedule_accrodion_content_2102">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2102" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2102">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2103">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2103" aria-expanded="false" aria-controls="schedule_accrodion_content_2103">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2104">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2104" aria-expanded="false" aria-controls="schedule_accrodion_content_2104">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2104">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2105">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2105" aria-expanded="false" aria-controls="schedule_accrodion_content_2105">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2106">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2106" aria-expanded="false" aria-controls="schedule_accrodion_content_2106">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2106">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2107">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2107" aria-expanded="false" aria-controls="schedule_accrodion_content_2107">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2108">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2108" aria-expanded="false" aria-controls="schedule_accrodion_content_2108">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2108">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2109">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2109" aria-expanded="false" aria-controls="schedule_accrodion_content_2109">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2110">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2110" aria-expanded="false" aria-controls="schedule_accrodion_content_2110">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2110">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2111">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2111" aria-expanded="false" aria-controls="schedule_accrodion_content_2111">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2112">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2112" aria-expanded="false" aria-controls="schedule_accrodion_content_2112">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2112" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2112">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2113">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2113" aria-expanded="false" aria-controls="schedule_accrodion_content_2113">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2113" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2113">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>												
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue3">
									<!-- Baltschug schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2201">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2201" aria-expanded="false" aria-controls="schedule_accrodion_content_2201">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2202">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2202" aria-expanded="true" aria-controls="schedule_accrodion_content_2202">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2202" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2202">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2203">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2203" aria-expanded="false" aria-controls="schedule_accrodion_content_2203">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2204">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2204" aria-expanded="false" aria-controls="schedule_accrodion_content_2204">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2204">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2205">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2205" aria-expanded="false" aria-controls="schedule_accrodion_content_2205">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2206">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2206" aria-expanded="false" aria-controls="schedule_accrodion_content_2206">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2206">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2207">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2207" aria-expanded="false" aria-controls="schedule_accrodion_content_2207">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2208">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2208" aria-expanded="false" aria-controls="schedule_accrodion_content_2208">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2208">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2209">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2209" aria-expanded="false" aria-controls="schedule_accrodion_content_2209">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2210">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2210" aria-expanded="false" aria-controls="schedule_accrodion_content_2210">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2210">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2211">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2211" aria-expanded="false" aria-controls="schedule_accrodion_content_2211">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2212">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2212" aria-expanded="false" aria-controls="schedule_accrodion_content_2212">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2212">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2213">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2213" aria-expanded="false" aria-controls="schedule_accrodion_content_2213">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2213" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2213">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue4">
									<!-- Stafford schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2301">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2301" aria-expanded="false" aria-controls="schedule_accrodion_content_2301">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2302">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2302" aria-expanded="true" aria-controls="schedule_accrodion_content_2302">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2302" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2302">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2303">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2303" aria-expanded="false" aria-controls="schedule_accrodion_content_2303">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2304">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2304" aria-expanded="false" aria-controls="schedule_accrodion_content_2304">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2304">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2305">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2305" aria-expanded="false" aria-controls="schedule_accrodion_content_2305">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2306">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2306" aria-expanded="false" aria-controls="schedule_accrodion_content_2306">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2306">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2307">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2307" aria-expanded="false" aria-controls="schedule_accrodion_content_2307">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2308">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2308" aria-expanded="false" aria-controls="schedule_accrodion_content_2308">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2308">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2309">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2309" aria-expanded="false" aria-controls="schedule_accrodion_content_2309">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2310">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2310" aria-expanded="false" aria-controls="schedule_accrodion_content_2310">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2310" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2310">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2311">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2311" aria-expanded="false" aria-controls="schedule_accrodion_content_2311">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2312">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2312" aria-expanded="false" aria-controls="schedule_accrodion_content_2312">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2312" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2312">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2313">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2313" aria-expanded="false" aria-controls="schedule_accrodion_content_2313">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2313" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2313">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue5">
									<!-- Siam schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2401">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2401" aria-expanded="false" aria-controls="schedule_accrodion_content_2401">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2402">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2402" aria-expanded="true" aria-controls="schedule_accrodion_content_2402">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2402" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2402">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2403">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2403" aria-expanded="false" aria-controls="schedule_accrodion_content_2403">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2404">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2404" aria-expanded="false" aria-controls="schedule_accrodion_content_2404">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2404" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2404">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2405">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2405" aria-expanded="false" aria-controls="schedule_accrodion_content_2405">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2406">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2406" aria-expanded="false" aria-controls="schedule_accrodion_content_2406">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2406" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2406">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2407">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2407" aria-expanded="false" aria-controls="schedule_accrodion_content_2407">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2408">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2408" aria-expanded="false" aria-controls="schedule_accrodion_content_2408">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2408" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2408">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2409">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2409" aria-expanded="false" aria-controls="schedule_accrodion_content_2409">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2410">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2410" aria-expanded="false" aria-controls="schedule_accrodion_content_2410">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2410" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2410">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2411">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2411" aria-expanded="false" aria-controls="schedule_accrodion_content_2411">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2412">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2412" aria-expanded="false" aria-controls="schedule_accrodion_content_2412">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2412" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2412">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2413">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2413" aria-expanded="false" aria-controls="schedule_accrodion_content_2413">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2413" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2413">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_4">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_4_venue1" aria-controls="schedule_4_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue2" aria-controls="schedule_4_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue3" aria-controls="schedule_4_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue4" aria-controls="schedule_4_venue4" role="tab" data-toggle="tab">Stafford</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue5" aria-controls="schedule_4_venue5" role="tab" data-toggle="tab">Siam</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_301">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_301" aria-expanded="false" aria-controls="schedule_accrodion_content_301">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_302">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_302" aria-expanded="true" aria-controls="schedule_accrodion_content_302">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_302" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_302">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_303">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_303" aria-expanded="false" aria-controls="schedule_accrodion_content_303">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_304">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_304" aria-expanded="false" aria-controls="schedule_accrodion_content_304">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_304">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span>Session Chair: Richard Boso</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Caleb Kumi Amankwah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Abdulazeez Ibrahim Forson</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_305">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_305" aria-expanded="false" aria-controls="schedule_accrodion_content_305">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_306">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_306" aria-expanded="false" aria-controls="schedule_accrodion_content_306">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_306">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: William Affloe</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Esther Nandara</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_307">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_307" aria-expanded="false" aria-controls="schedule_accrodion_content_307">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_308">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_308" aria-expanded="false" aria-controls="schedule_accrodion_content_308">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_308">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span>Session Chair: Caleb Kumi</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: John Manso Frimpong </span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_309">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_309" aria-expanded="false" aria-controls="schedule_accrodion_content_309">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue2">
									<!-- Adlon schedule content for this day -->
									<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3101">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3101" aria-expanded="false" aria-controls="schedule_accrodion_content_3101">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3102">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3102" aria-expanded="true" aria-controls="schedule_accrodion_content_3102">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3102" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3102">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3103">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3103" aria-expanded="false" aria-controls="schedule_accrodion_content_3103">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3104">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3104" aria-expanded="false" aria-controls="schedule_accrodion_content_3104">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3104">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span>Session Chair: Richard Boso</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Caleb Kumi Amankwah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Abdulazeez Ibrahim Forson</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3105">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3105" aria-expanded="false" aria-controls="schedule_accrodion_content_3105">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3106">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3106" aria-expanded="false" aria-controls="schedule_accrodion_content_3106">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3106">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: William Affloe</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Esther Nandara</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3107">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3107" aria-expanded="false" aria-controls="schedule_accrodion_content_3107">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3108">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3108" aria-expanded="false" aria-controls="schedule_accrodion_content_3108">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3108">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span>Session Chair: Caleb Kumi</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: John Manso Frimpong </span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3109">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3109" aria-expanded="false" aria-controls="schedule_accrodion_content_3109">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>												
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue3">
									<!-- Baltschug schedule content for this day -->
									<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3201">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3201" aria-expanded="false" aria-controls="schedule_accrodion_content_3201">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3202">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3202" aria-expanded="true" aria-controls="schedule_accrodion_content_3202">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3202" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3202">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3203">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3203" aria-expanded="false" aria-controls="schedule_accrodion_content_3203">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3204">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3204" aria-expanded="false" aria-controls="schedule_accrodion_content_3204">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3204">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span>Session Chair: Richard Boso</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Caleb Kumi Amankwah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Abdulazeez Ibrahim Forson</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3205">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3205" aria-expanded="false" aria-controls="schedule_accrodion_content_3205">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3206">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3206" aria-expanded="false" aria-controls="schedule_accrodion_content_3206">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3206">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: William Affloe</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Esther Nandara</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3207">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3207" aria-expanded="false" aria-controls="schedule_accrodion_content_3207">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3208">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3208" aria-expanded="false" aria-controls="schedule_accrodion_content_3208">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3208">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span>Session Chair: Caleb Kumi</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: John Manso Frimpong </span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3209">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3209" aria-expanded="false" aria-controls="schedule_accrodion_content_3209">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue4">
									<!-- Stafford schedule content for this day -->
									<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3301">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3301" aria-expanded="false" aria-controls="schedule_accrodion_content_3301">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3302">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3302" aria-expanded="true" aria-controls="schedule_accrodion_content_3302">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3302" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3302">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3303">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3303" aria-expanded="false" aria-controls="schedule_accrodion_content_3303">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3304">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3304" aria-expanded="false" aria-controls="schedule_accrodion_content_3304">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3304">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span>Session Chair: Richard Boso</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Caleb Kumi Amankwah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Abdulazeez Ibrahim Forson</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3305">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3305" aria-expanded="false" aria-controls="schedule_accrodion_content_3305">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3306">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3306" aria-expanded="false" aria-controls="schedule_accrodion_content_3306">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3306">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: William Affloe</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Esther Nandara</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3307">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3307" aria-expanded="false" aria-controls="schedule_accrodion_content_3307">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3308">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3308" aria-expanded="false" aria-controls="schedule_accrodion_content_3308">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3308">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span>Session Chair: Caleb Kumi</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: John Manso Frimpong </span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3309">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3309" aria-expanded="false" aria-controls="schedule_accrodion_content_3309">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue5">
									<!-- Stafford schedule content for this day -->
									<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3401">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3401" aria-expanded="false" aria-controls="schedule_accrodion_content_3401">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3402">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3402" aria-expanded="true" aria-controls="schedule_accrodion_content_3402">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3402" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3402">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3403">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3403" aria-expanded="false" aria-controls="schedule_accrodion_content_3403">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3404">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3404" aria-expanded="false" aria-controls="schedule_accrodion_content_3404">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3404" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3404">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span>Session Chair: Richard Boso</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Caleb Kumi Amankwah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Abdulazeez Ibrahim Forson</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3405">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3405" aria-expanded="false" aria-controls="schedule_accrodion_content_3405">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3406">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3406" aria-expanded="false" aria-controls="schedule_accrodion_content_3406">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3406" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3406">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: William Affloe</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Esther Nandara</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3407">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3407" aria-expanded="false" aria-controls="schedule_accrodion_content_3407">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3408">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3408" aria-expanded="false" aria-controls="schedule_accrodion_content_3408">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3408" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3408">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span>Session Chair: Caleb Kumi</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Robert Aidoo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Siam: Africa Supply Chains.</strong></span>
																	<span>Session Chair: John Manso Frimpong </span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3409">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3409" aria-expanded="false" aria-controls="schedule_accrodion_content_3409">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Schedule Section /- -->
	

    

    




    <?php require_once 'include/footer.php'; ?>



    </div><!--theme-layout end-->


    <?php require_once 'include/scripts.php'; ?>


</body>