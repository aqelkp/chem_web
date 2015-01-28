<div class="nav-container">
	<nav>
		<ul>
			<li><a href="?page=home">Logo</a></li>
			<li <?php if($_GET['page']=='home'){ echo 'class="active"'; } ?>><a href="?page=home">Home</a></li>
			<li <?php if($_GET['page']=='events'){ echo 'class="active"'; } ?>><a href="?page=events">Events</a></li>
			<li <?php if($_GET['page']=='timeline'){ echo 'class="active"'; } ?>><a href="?page=timeline">Timeline</a></li>
			<li <?php if($_GET['page']=='people'){ echo 'class="active"'; } ?>><a href="?page=people">People</a></li>
			<li <?php if($_GET['page']=='register'){ echo 'class="active"'; } ?>><a href="?page=register">Register</a></li>
			<li <?php if($_GET['page']=='spons'){ echo 'class="active"'; } ?>><a href="?page=spons">Sponsors</a></li>
			<li <?php if($_GET['page']=='contact'){ echo 'class="active"'; } ?>><a href="?page=contact">Contact Us</a></li>
			<li><a href="#" class="fa fa-google-plus"></a></li>
			<li><a href="#" class="fa fa-facebook"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
		</ul>
	</nav>
	<i class="fa fa-bullhorn ticker-icon"></i>
	<ul id="webticker">
		<li>How are you?</li>
		<li>The fest is on Mar13-Mar15</li>
		<li>Get ready soon....</li>
	</ul>
</div>