<?php include 'header.php'; ?>

<section class="row jumbotron focus">
	
			<div class="containter">
				<div class="jumbo-text">
					<h1>Contact</h1>
					<p>
						Proudly developed in Ghana. We're here if you want to talk!
					</p>
				</div>
			</div>

</section>

<section class="container">
<section class="col-sm-6 col-md-6">
						
							<article>
								<h3 class="page-header">Contact us</h3>
								<ul>
									<li> <span class="fa fa-phone"></span> 0233 540 920 984 </li>
									<li><a href="mailto:info@casaghana.com" target="_blank"><span class="fa fa-envelope"></span>&nbsp;info@casaghana.com</a></li>
									<li><a href="#" target="_blank"></a></li>
									<ul class="list-inline" style="margin-top:1%">
										<li><a href="#"  target="_blank"><span class="fa fa-facebook fa-2x"></span></a></li>
										<li><a href="#" target="_blank"><span class="fa fa-twitter fa-2x"></span></a></li>

									</ul>
								</ul>
								<p>	You can also chat with us through our chat system</p>
							</article>
						</section> <!--/service1 -->
			
						<section class="col-sm-6 col-md-6">
						<p>
							<?php if($_POST){
								include 'functions/contact-form-sc.php';
								} ?>
						</p>
						<h3 class="page-header">Contact Form</h3>
							<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
								
								<section class="form-group">
										<label for="">Name</label>
								<input type="text" name="name" placeholder="Kojo Agyemang" class="form-control"></section>

								<section class="form-group">
											<label for="">Email</label>
								<input type="email" name="email" placeholder="kagyemang@example.com" class="form-control"></section>

								<section class="form-group">
									<label for="">subject</label>
								<input type="text" name="subject" placeholder="Hello!!" class="form-control"></section>
								<section class="form-group">
									<label for="">Message</label>
								<textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea></section>
									<section class="col-md-12 form-group"></section>
		
			<section class="col-md-12 form-group"> <button class="btn btn-success form-control">Post</button></section>
	



							</form>
						</section> <!--/service2 -->
					
</section>

	

<?php include 'footer.php'; ?>