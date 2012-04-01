
<div id="sidebar">

	<div id="name"><h3>neil tyson degrese</h3></div>
	<div id="ntdpic">
		<img src="<?php echo bloginfo( 'template_url' ).'/images/'.'ntd.jpg'?>" alt="neil" height="100" width="100" />
	</div>
	<div id="bio">
		<p>this is my bio. im an astropsyschist. be my friend</p></br></br>
	</div>

	<div id="subscribe">
		<p><strong>subscribe</strong></p>
		<a href="http://www.twitter.com"><p><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" /> Twitter</p></a>
		<a href="/index.php"><p><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" /> My blog... oh you here already</p></a>
	</div>
	</br></br>
	<div id="search">
		<?php get_search_form(); ?>
	</div>			
	<div id="archives">
		<h3>Recent Posts</h3>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=3'); ?>
		</ul>
	</div>

</div>
