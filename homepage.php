<style type="text/css">
#our-value > div > div{
	cursor: pointer;
}

#our-value img{
	border-radius: 48px;
	box-shadow: 0px 0px 20px grey;
}

#our-value > div > div:hover img{
	box-shadow: 0px 0px 100px #0a651e;
	width: 100px;
	animation-name: grow;
	animation-duration: 1s;
}

@keyframes grow {
    from {box-shadow: 0px 0px 20px grey;}
    to {box-shadow: 0px 0px 100px #0a651e;}
}
</style>



<?php include_once 'banner.php' ?>
<?php include_once 'news-marquee.php'; ?>

<!-- Our Company's value -->
<section id="our-value" class="center" style="background: white">
	<div class="row">
		<!--h1>Why choose us?</h1-->
		<div class="col-6 col-lg-3" onclick="window.location.href='https://www.bisonline.com.my/Ecos/login_024.aspx'">
			<img src="logo/favicon-96x96.png" title="Online Trading" width="96" height="96">
			<h3>Online<br>Trading</h3>
			<!--div class="btn">Log In</div-->
		</div>
		<div class="col-6 col-lg-3" onclick="window.location.href='https://www.bankislam.biz'">
			<img src="img/logo-bankislam.png" title="Internet Banking" width="96" height="96">
			<h3>Internet<br>Banking</h3>
			<!--div class="btn">Log In</div-->
		</div>
		<div class="col-6 col-lg-3" onclick="window.location.href='index.php?t=knowledge&page=shariah101'">
			<img src="img/islamicstockbroking.png" title="Islamic Stockbroking" width="96" height="96">
			<h3 text-color="white">Islamic<br>Stockbroking</h3>
			<!--div class="btn">Understand More</div-->
		</div>
		<div class="col-6 col-lg-3" onclick="window.location.href='index.php?t=info&page=brokerage'">
			<img src="https://png.icons8.com/percentage/color/96" title="Percentage" width="96" height="96">
			<h3>Brokerage fee</h3>
			<!--div class="btn">See fee structure</div-->
		</div>
		<div class="blank-row"></div>
	</div>
</section>



<!--section id="trade-challenge" class="container" style="width: 100%; height: 410px;">
	
</section-->

<!-- Market performing -->
<!--section id="market" class="center" style="background: url('img/ticker_bg2.jpg');">
	<div class="row" style="opacity: 2; z-index: 2">
		<h1 class="text-light" style="color: white">How is the market performing now?</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="ticker-box bg-primary">
					<div class="row">
						<div class="index col-sm-7">FBMSHA</div>
						<div class="col-sm-1">
							<div class="movement-sign"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
						</div>
						<div class="col-sm-3">
							<div class="movement">+3.45</div>
							<div class="movement-perc">+0.02%</div>
						</div>
					</div>
					<div class="price">1,723.22</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ticker-box bg-danger">
					<div class="row">
						<div class="index col-sm-7">FBMSHA</div>
						<div class="col-sm-1">
							<div class="movement-sign"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
						</div>
						<div class="col-sm-3">
							<div class="movement">+3.45</div>
							<div class="movement-perc">+0.02%</div>
						</div>
					</div>
					<div class="price">1,723.22</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ticker-box bg-danger">
					<div class="row">
						<div class="index col-sm-7">FBMSHA</div>
						<div class="col-sm-1">
							<div class="movement-sign"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
						</div>
						<div class="col-sm-3">
							<div class="movement">+3.45</div>
							<div class="movement-perc">+0.02%</div>
						</div>
					</div>
					<div class="price">1,723.22</div>
				</div>
			</div>
		</div>
		<h3 style="color: white">Whether the market is performing or not, it is always the best time to invest, if you know the techniques.</h3>
		<div class="btn" onclick="window.location.href='index.php?t=knowledge&page=investment101'">LEARN HOW</div>
	</div>
</section-->







<!-- Big menu button -->
<section id="big-menu">
	<div class="row nopadding">
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='index.php?t=announcement&page=news'">
				<div style="width: 20%;float: left;"><img src="img/icon/announcement.png" title="Advertising" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">News &amp; Announcement</h3></div>
			</div>
		</div>
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='index.php?t=announcement&page=shariahlist'">
				<div style="width: 20%;float: left;"><img src="img/icon/shariah.png" title="List View" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">Shariah Compliant Securities List</h3></div>
			</div>
		</div>
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='https://www.bisonline.com.my/Ecos/research/research.aspx?Mode=ER'">
				<div style="width: 20%;float: left;"><img src="img/icon/analysts.png" title="Accounting" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">Analysts&apos; Reports</h3></div>
			</div>
		</div>
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='index.php?t=announcement&page=rules'">
				<div style="width: 20%;float: left;"><img src="img/icon/rules.png" title="Law" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">Rules &amp; Regulations</h3></div>
			</div>
		</div>
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='index.php?t=announcement&page=events'">
				<div style="width: 20%;float: left;"><img src="img/icon/events.png" title="Calendar" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">Our Events</h3></div>
			</div>
		</div>
		<div class="mybtn col-12 col-md-6">
			<div class="container" onclick="window.location.href='index.php?t=announcement&page=gallery'">
				<div style="width: 20%;float: left;"><img src="img/icon/gallery.png" title="Gallery" height="100%"></div>
				<div class="container center" style="width: 80%;float: left;"><h3 style="color: white">Our Gallery</h3></div>
			</div>
		</div>
	</div>
</section>


<?php include_once 'tazkirah.php'; ?>
<?php include_once 'links.php'; ?>
<?php include_once 'contact-form.php'; ?>
