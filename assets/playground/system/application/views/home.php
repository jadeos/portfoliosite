<div id = "facebookshare">
	<a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" height="45px;" width="45px;">
	</a>
</div>


<div id = "googleplusshare">
	<a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
		<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" height="45px;" width="45px;">
	</a>
</div>


<div id = "linkedinshare">
	<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
		<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" height="45px;" width="45px;">
	</a>
</div>

<div id = "twittershare">
	<a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter">
	</a>
</div>
<div id="carouselcontainer">
	<br>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="ballincollig2.jpg" alt="Ballincollig2" width="400" height="300">
			</div>

			<div class="item">
				<img src="bandonplayground.jpg" alt="bandonplayground" width="400" height="300">
			</div>

			<div class="item">
				<img src="cloyne_playground.jpg" alt="cloyneplayground" width="400" height="300">
			</div>

			<div class="item">
				<img src="Cloyne2_playground.jpg" alt="cloyne2playground" width="400" height="300">
			</div>

			<div class="item">
				<img src="Fitzgeralds_Park.jpg" alt="fitzgeraldspark" width="400" height="300">
			</div>


		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class ="welcome1">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Welcome to the Playground Finder App</h3>
    </div>
    <div class="panel-body">


						<p>Welcome to the Playground Finder App. Here you will be able to search for playgrounds in your area
						based on the location you choose or the facilities that you require. You can also become a member of this site and interact
						with other members, read reviews and also leave reviews on other playgrounds.</p>
						<div id ="users">
							<img src ="userimage.png" alt="userimage"id ="user"/><br/>
							<div>

								<?php if(Current_User::user()): ?>
									<h2>Hello <em><?php echo Current_User::user()->username; ?></em>.</h2>
									<h2><?php echo anchor('logout','Logout'); ?></h2>
								<?php else: ?>
									<h2>Members: <?php echo anchor('login','Login'); ?>.</h2>
									<h2>New Users: <?php echo anchor('signup','Create an Account'); ?>.</h2>
								<?php endif; ?>

							</div>


                        </div>
    </div>
	</div>
	</div>
</div>




