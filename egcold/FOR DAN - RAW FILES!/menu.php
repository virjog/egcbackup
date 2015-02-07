		<div id="menu">
			<div id="menuDiv">
				<div class="menuList">
					<div class="menuGroup">
						<a href="<?php echo $root; ?>/index.php">Home</a>
						<a href="<?php echo $root; ?>/calendar.php">Calendar</a>
						<a href="<?php echo $root; ?>/tshirt.php">T-Shirt Sales</a>
					</div>
						
					<div class="menuTitle"><a href="" id="control_egc">EGC</a></div>
					<div id="menu_egc" class="menuGroup">
						<a href="<?php echo $root; ?>/egcInfo.php">Meeting Information</a>
						<a href="<?php echo $root; ?>/mission.php">President's Mission Statement</a>
						<!--<a href="http://www.roguemediapro.com/work/websites/EGC/calendar.php">Calendar</a>-->
						<a href="<?php echo $root; ?>/members.php">Members</a>
						<a href="<?php echo $root; ?>/committees.php">Committees</a>
						<a href="<?php echo $root; ?>/elections.php">Elections</a>
					</div>
	
					<div class="menuTitle"><a href="" id="control_events">Events</a></div>
					<div id="menu_events" class="menuGroup">
						<a href="<?php echo $root; ?>/events/">General Info</a>
						<a href="<?php echo $root; ?>/events/engineeringCup.php">Engineering Cup</a>
						<a href="<?php echo $root; ?>/events/leadershipConf.php">Leadership Conference</a>
						<a href="http://coewww.rutgers.edu/openhouse" target="_blank">Open House</a>
					</div>
					
					<div class="menuTitle"><a href="" id="control_galleries">Galleries</a></div>
					<div id="menu_galleries" class="menuGroup">
						<a href="<?php echo $root; ?>/galleries/efd07" target="_blank">Engineering Field Day '07</a>
						<a href="<?php echo $root; ?>/galleries/oh07" target="_blank">Open House '07</a>
					</div>
					
					<div class="menuTitle"><a href="" id="control_documents">Documents</a></div>
					<div id="menu_documents" class="menuGroup">
						<a href="<?php echo $root; ?>/documents/constitution.php">Constitution</a>
						<a href="<?php echo $root; ?>/documents/standingRules.php">Standing Rules</a>
						<a href="<?php echo $root; ?>/documents/allocGuidelines.php">Allocation Guidelines</a>
						<a href="<?php echo $root; ?>/documents/conduct.php">Rules of Ethical Conduct</a>
						<a href="<?php echo $root; ?>/documents/meetDocs.php">Agenda/Minutes/ Bills/Resolutions</a>
					</div>
					
					<div class="menuTitle"><a href="" id="control_societies">Society Info</a></div>
					<div id="menu_societies" class="menuGroup">
						<a href="<?php echo $root; ?>/societies/societyInfo.php">Starting a Society</a>
						<a href="<?php echo $root; ?>/societies/societyList.php">Recognized Societies</a>
						<a href="<?php echo $root; ?>/societies/fundingInfo.php">Society Funding</a>
						<a href="<?php echo $root; ?>/societies/grillRental.php">Grill and Table Rental</a>
					</div>
					
					<div class="menuTitle"><a href="" id="control_academics">Academics</a></div>
					<div id="menu_academics" class="menuGroup">
						<a href="http://coewww.rutgers.edu" target="_blank">School of Engineering</a>
						<a href="https://www.acs.rutgers.edu/grades" target="_blank">Transcripts</a>
						<a href="http://www.ecs.rutgers.edu" target="_blank">Engineering Computer Services</a>
					</div>
					
					<div class="menuTitle"><a href="" id="control_ru">Rutgers Links</a></div>
					<div id="menu_ru" class="menuGroup">
						<a href="http://rusa.rutgers.edu" target="_blank">Rutgers University Student Assembly</a>
						<a href="http://nbpweb.rutgers.edu/menus/studgov.shtml" target="_blank">Student Governing Associations</a>
						<a href="http://housing.rutgers.edu" target="_blank">Housing</a>
						<a href="http://food.rutgers.edu" target="_blank">Dining Services</a>
						<a href="http://rudots.rutgers.edu" target="_blank">Department of Transportation Services</a>
						<a href="http://health.rutgers.edu" target="_blank">Health Centers</a>
						<a href="http://studentaffairs.rutgers.edu" target="_blank">Office of Student Affairs</a>
						<a href="http://www.rutgersengineeringsociety.org" target="_blank">Rutgers Engineering Society (Alumni Association)</a>
					</div>
					
					<script language="javascript">
						//Syntax: var uniquevar=new animatedcollapse("DIV_id", animatetime_milisec, enablepersist(true/fase), [initialstate] )
//						var egc = new animatedcollapse("egc", 1000, false);
//						var events = new animatedcollapse("events", 800, false);
//						var galleries = new animatedcollapse("galleries", 400, false);
//						var documents = new animatedcollapse("documents", 1000, false);
//						var societies = new animatedcollapse("societies", 800, false);
//						var academics = new animatedcollapse("academics", 600, false);
//						var ru = new animatedcollapse("ru", 1600, false);
						
						var menus = new Array();
						menus.push(new animatedcollapse("egc", 1000, false));
						menus.push(new animatedcollapse("events", 1000, false));
						menus.push(new animatedcollapse("galleries", 1000, false));
						menus.push(new animatedcollapse("documents", 1000, false));
						menus.push(new animatedcollapse("societies", 1000, false));
						menus.push(new animatedcollapse("academics", 1000, false));
						menus.push(new animatedcollapse("ru", 1000, false));
					</script>
				</div>
				
				<div class="menuList" style="margin-top: 20px;">
					<div class="menuTitle"><a id="control_signups">Sign-ups</a></div>
					<div id="menu_signups" class="menuGroup">
					</div>
				</div>
			</div>
			<img src="<?php echo $root; ?>/menuBottom.gif" />
		</div>
