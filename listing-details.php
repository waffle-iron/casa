<?php include 'header.php'; ?>
<section class="row">
<div id="myCarousel" class="carousel slide"> <!-- Carousel indicators --> <ol class="carousel-indicators"> <li data-target="#myCarousel" data-slide-to="0" class="active"></li> <li data-target="#myCarousel" data-slide-to="1"></li> <li data-target="#myCarousel" data-slide-to="2"></li> </ol> <!-- Carousel items --> 


<div class="carousel-inner"> 

<div class="item active"> <img src="" alt="First slide"> 
<div class="carousel-caption">
	<h3>Welcome To Casa Ghana</h3>
	<article>Buy, Sell or Rent a real estate.</article>
</div> 

</div> 

<div class="item"> <img src="" alt="Second slide"> <div class="carousel-caption">This Caption 2</div> </div> <div class="item"> <img src="" alt="Third slide"> <div class="carousel-caption">This Caption 3</div> </div> </div> <!-- Carousel nav --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> </div>
</section><!-- /carousel -->


<section class="row">

	<section class="listing-detail col-md-8">


		<?php include 'functions/listing-detail-sc.php'; ?>


</section>

			<?php //include 'search.php' ?>


</section>




<?php include 'footer.php'; ?>