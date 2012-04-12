
<div id="sidebar">

	<div id="name">
		<h3>neil tyson degrese</h3>
	</div>
	<hr>
	<div id="ntdpic">
		<img src="<?php echo bloginfo( 'template_url' ).'/images/'.'ntd.jpg'?>" alt="neil" height="100" width="100" />
	</div>
	
	<div id="bio">
		this is my bio. im an astropsyschist. be my friend. you can find me at reddit. its the only place to be.
	</div>
	<hr>
	<div id="subscribe">
		</br></br><strong>subscribe</strong>
		<div id="first"><a href="http://www.twitter.com"><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" /> Twitter</a></div>
		<div id="second"><a href="/index.php"><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" /> My blog... oh you here already</a></div>
	</div>
	</br></br>
	
	<div id="search">
		<?php get_search_form(); ?>
	</div>			
	
	<div id="archives">
		<h3>Recent Posts</h3>
		<ul><?php wp_get_archives('type=postbypost&limit=3'); ?></ul>
	</div>

</div>
