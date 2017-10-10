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


<header class="topbar">
	<div class="container">
		<div class="row">
			<!-- social icon-->
			<div class="col-sm-1">
			   <ul class="social-network">
					<li><a href="https://wwww.facebook.com/BIMBSecurities/" target="new" class="waves-effect waves-dark"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/BIMBSecurities" target="new" class="waves-effect waves-dark"><i class="fa fa-twitter"></i></a></li>
			    </ul>
			</div>
            <div class="col-sm-5">
                <div class="">
                    <div class="row">
                        <ul class="info"> 
                            <li><marquee style="vertical-align: middle;"><?php include_once 'waktusolat.php'; ?></marquee></li>
                        </ul>
                        <div class=""></div>
                    </div>
                </div>
            </div>
			<div class="col-sm-5">
                <div class="">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span><a href="mailto:helpdesk@bimbsec.com.my" target="new">helpdesk@bimbsec.com.my</a></span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><a href="tel:+60326131700"><span>(+60)3 2613 1700 / 1777</span></a></li>
						</ul>
                        <div class=""></div>
					</div>
                </div>
			</div>
		</div>
	</div>
</header>

<!-- start header -->


<header style="border-bottom: 7px #0e3756 solid">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header col-md-4">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                	<a href="index.php"><img src="img/logo%20v2.png" style="width: 100%; max-width: 330px" alt=""/></a>
                </div>
                <div class="navbar-collapse collapse col-md-8">
                    <ul class="nav navbar-nav">
                        <li class="<?php is_active('home'); ?>"><a class="waves-effect waves-dark" href="index.php">Home</a></li> 
                        <li class="dropdown <?php is_active('info'); ?>">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Info<b class="caret"></b></a>
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
                                <!--li><a class="waves-effect waves-dark" href="index.php?t=service&page=research">Investment Research</a></li--> 
                                <li><a class="waves-effect waves-dark" href="index.php?t=service&page=nominee">Nominee / Custodian Services</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=service&page=underwriting">Underwriting and Placement</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown <?php is_active('announcement'); ?>">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Announcement<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=news">News</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=shariahlist">Latest Shariah Compliant Securities List</a></li>
                                <li><a class="waves-effect waves-dark" href="https://www.bisonline.com.my/Ecos/research/research.aspx?Mode=ER">Analysts’ Report</a></li> 
                                <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=rules">Rules &amp; Regulations</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=announcement&page=events">Events</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown <?php is_active('contact'); ?>">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">Contact<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="index.php?t=contact&page=contact">Find Us</a></li>
                                <li><a class="waves-effect waves-dark" href="index.php?t=contact&page=career">Career</a></li>
                            </ul>
                        </li> 
                        <li><a class="waves-effect waves-dark" href="https://www.bisonline.com.my/Ecos/login_024.aspx" target="_new">BISONLINE <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>




<script type="text/javascript">

    function toggleMiniMenu(ev){
        if(window.pageYOffset>78){
            document.getElementById("mini-menu").classList.remove("hide");
        } else {
            document.getElementById("mini-menu").classList.add("hide");
        }
    }
    window.onscroll=toggleMiniMenu

</script>

<style type="text/css">
    header#mini-menu ul.nav li a {
        padding: 10px 13px !important;
    }
</style>