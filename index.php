<?php include 'header.php'; ?>

<section class="row">
<div id="myCarousel" class="carousel slide"> <!-- Carousel indicators --> <ol class="carousel-indicators"> <li data-target="#myCarousel" data-slide-to="0" class="active"></li> <li data-target="#myCarousel" data-slide-to="1"></li> <li data-target="#myCarousel" data-slide-to="2"></li> </ol> <!-- Carousel items --> 


<div class="carousel-inner"> 

<div class="item active">


<div class="carousel-caption">
	<h3>Welcome To Casa Ghana</h3>
	<article>Buy, Sell or Rent a real estate.</article>
</div> 

</div> 

<div class="item"> <img src="" alt="Second slide"> <div class="carousel-caption">This Caption 2</div> </div> <div class="item"> <img src="" alt="Third slide"> <div class="carousel-caption">This Caption 3</div> </div> </div> <!-- Carousel nav --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> </div>
</section><!-- /carousel -->


<section class="row">

		<section class="services col-md-8">

			<section class="col-md-12">
	<h3 class="page-header">What we are Offering</h3>
						<section class="col-sm-6 col-md-6">
							<h3>Free Real Estate Listings</h3>
							<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi vitae quos natus numquam vero illum eligendi libero praesentium nihil eaque porro placeat molestias, veritatis cumque facilis similique voluptatibus laudantium et earum! Tenetur vero perspiciatis eum quis, totam temporibus explicabo dolorum nesciunt. Impedit, tempore.</article>
						</section> <!--/service1 -->
			
						<section class="col-sm-6 col-md-6">
							<h3>Individual Accounts</h3>
							<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi vitae quos natus numquam vero illum eligendi libero praesentium nihil eaque porro placeat molestias, veritatis cumque facilis similique voluptatibus laudantium et earum! Tenetur vero perspiciatis eum quis, totam temporibus explicabo dolorum nesciunt. Impedit, tempore.</article>
						</section> <!--/service2 -->
						<section class="col-sm-6 col-md-6">
							<h3>Nation Wide Ads</h3>
							<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi vitae quos natus numquam vero illum eligendi libero praesentium nihil eaque porro placeat molestias, veritatis cumque facilis similique voluptatibus laudantium et earum! Tenetur vero perspiciatis eum quis, totam temporibus explicabo dolorum nesciunt. Impedit, tempore.</article>
						</section> <!--/service3 -->
			
						<section class="col-sm-6 col-md-6">
							<h3>Social Media Listing Sharing</h3>
							<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi vitae quos natus numquam vero illum eligendi libero praesentium nihil eaque porro placeat molestias, veritatis cumque facilis similique voluptatibus laudantium et earum! Tenetur vero perspiciatis eum quis, totam temporibus explicabo dolorum nesciunt. Impedit, tempore.</article>
						</section> <!--/service4 -->
			
			</section>

			<section class="col-md-12">
				<h3 class="page-header">Latest Estates</h3>

				<?php include 'functions/latest-sc.php'; ?>
			</section>
			
		</section>

		
			<?php //include'search.php' ?>
		

</section>






<?php include 'footer.php'; ?>