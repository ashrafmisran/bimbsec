<?php include_once 'required.php'; ?>
<!DOCTYPE html>
<html>
<?php include_once 'head.php'; ?>

<body class="container shrinkable" onload="removeContainer()" onresize="removeContainer()">
	<div class="shadow">
	<?php include_once('header.php'); ?>


	<content>
		<div style="background: white;">
			<?php 
				//Retrieve GET value
				if( isset($_GET['page']) ){
					$page = $_GET['page'];
				}else{
					$page = 'homepage';
				}

				include_once($page.'.php');
			?>
		</div>
	</content>



	<footer>
		<?php include_once 'footer-menu.php'; ?>
		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="copyright">
							<span>&copy; BIMB Securities Sdn Bhd 1994 &ndash; <?php echo date('Y'); ?> All right reserved. </span>
	                        <p>Disclaimer : BIMB Securities Sdn Bhd does not endorse or approve, whether expressed or implied, any advice, opinions, information, products or services of any third parties on this website or by any hyperlinks to or from any third party websites or pages.</p>
	                        <p>Best viewed with internet browser Mozilla Firefox (Screen Resolution : 1280x720 and above)</p> 
	                        <p>Credit: <a href="https://icons8.com">Icon pack by Icons8</a></p>
	                        <br>
						</div>
						<div class="col-md-2">
							<ul class="social-network">
								<li><a class="waves-effect waves-dark" href="https://wwww.facebook.com/BIMBSecurities/" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a class="waves-effect waves-dark" href="https://twitter.com/BIMBSecurities" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
	
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="function/jquery.js"></script>
	<script src="function/jquery.easing.1.3.js"></script>
	<script src="function/bootstrap.min.js"></script>
	<script src="function/jquery.fancybox.pack.js"></script>
	<script src="function/jquery.fancybox-media.js"></script>  
	<script src="function/jquery.flexslider.js"></script>
	<script src="function/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="function/modernizr.custom.js"></script>
	<script src="function/jquery.isotope.min.js"></script>
	<script src="function/jquery.magnific-popup.min.js"></script>
	<script src="function/animate.js"></script> 
	<script src="function/custom.js"></script>
	<script src="function/ashraf-function.js"></script>
	<script src="cdn/lettering.js"></script>
	<script>
		
		var w = $('#myCarousel').width();
		var h = 407/1140*w+28;
		var h = h+"px";

		//Fullwidth if on mobile
		function removeContainer(){
			if ($(window).width() < 768) {
				$('.shrinkable').removeClass('container');
				$('.carousel-caption').addClass('hide');
				$('#myCarousel').css("height", h);
			}else{
				$('.shrinkable').addClass('container');		
				$('.carousel-caption-mobile').addClass('hide');
			}
		}

		$(document).ready(function(){
	      
	      $('.cmc-member').click(function(){
	      	
	        if ($(this).hasClass('profile-collapse')) {
	        	$(this).removeClass('profile-collapse');
	        	$(this).animate({height: '400px'},200,function(){
	        		$(this).delay(200).css('height', '');
	        	});
	        	$(this).children('div').children('div').children('img').animate({margin: '100px 10px 15px'},200);
	        	$(this).children('div').children('div').eq(1).delay(100).animate({margin: 'auto auto auto -170px'},200);

	        	//$(this).siblings().delay(300).addClass('profile-collapse');
	        	//$(this).siblings().children('div').children('div').children('img').animate({margin: '0px -15px'},200);
	        	//$(this).siblings().children('div').children('div').eq(1).animate({margin: '0'},200);
	        }else{
				$(this).delay(300).addClass('profile-collapse');
	        	$(this).children('div').children('div').children('img').animate({margin: '0px -15px'},200);
	        	$(this).children('div').children('div').eq(1).animate({margin: '0'},100);
	        }
	      })
	    })



		  
	</script>
	</div>
</body>
</html>