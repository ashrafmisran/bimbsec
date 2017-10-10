<?php
    function is_active($tab_name){
        //Retrieve $_GET['t'];
        if(isset($_GET['t'])){
            $t = $_GET['t'];
        }else{
            $t = 'home';
        }

        if ($t == $tab_name) {
            echo 'active';
        }
    }
?>


<header class="topbar" style="background: #4d813e">
		<div class="">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3 container">
				   <ul class="social-network row">
					<li><a href="https://wwww.facebook.com/BIMBSecurities/" target="new" class="waves-effect waves-dark"><i class="fa fa-facebook"></i></a></li>
					<!--li><a href="http://bankislamsecurities.blogspot.com/" target="new" class="waves-effect waves-dark"><i class="fa fa-twitter"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li-->
				</ul>
				</div>
				<div class="col-sm-9 container">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span><a href="mailto:helpdesk@bimbsec.com.my" target="new">helpdesk@bimbsec.com.my</a></span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><a href="tel:+60326131700"><span>(+60)3 2613 1700 / 1777</span></a></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>

	<!-- start header -->

    
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br>
                	<a href="index.php"><img src="img/brand-logo.png" style="width: 100%; max-width: 330px" alt=""/></a>
                </div>
                <br><br><br>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php is_active('home'); ?>"><a class="waves-effect waves-dark" href="index.php">Home</a></li> 
						<li class="dropdown <?php is_active('info'); ?>">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Corporate Info<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="index.php?t=info&page=about">About Us</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=info&page=bod">Board of Directors</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=info&page=sac">Shariah Advisory Committee</a></li> 
                                <li><a class="waves-effect waves-dark" href="index.php?t=info&page=rac">Board, Audit and Risk Committee</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=info&page=management">Management Committee</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown <?php is_active('service'); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="index.php?t=service&page=stockbroking">Islamic Stockbroking</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=service&page=sas">Shariah Advisory Services</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=service&page=research">Investment Research</a></li> 
                            <li><a class="waves-effect waves-dark" href="index.php?t=service&page=nominee">Nominee / Custodian Services</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=service&page=underwriting">Underwriting and Placement</a></li>
                        </ul>
                    </li> 
                         <li class="dropdown <?php is_active('announcement'); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Announcement<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=news">News</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=shariahlist">Latest Shariah Compliant Securities List</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=analysts">Analysts’ Report</a></li> 
                            <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=rules">Rules &amp; Regulations</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=events">Events</a></li>
                        </ul>
                    </li> 
                         <li class="dropdown <?php is_active('knowledge'); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Knowledge<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="index.php?t=knowledge&page=investment101">Investment 101</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=knowledge&page=shariah101">Shariah 101</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Zakat on Share Calculator</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=knowledge&page=faq">FAQ</a></li>
                        </ul>
                    </li> 
                        <li class="dropdown <?php is_active('contact'); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Contact<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="index.php?t=contact&page=contact">Find Us</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php?t=contact&page=career">Career</a></li>
                        </ul>
                    </li> 
                        <li><a class="waves-effect waves-dark" href="https://www.bisonline.com.my/Ecos/login_024.aspx">Login to BISONLINE <img src="img/Apps-Dialog-Logout-icon.png" width="30" height="30" alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>