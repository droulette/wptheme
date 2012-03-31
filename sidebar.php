<div id="sidebar">

	<h3>neil tyson degrese</h3>
	<div id="ntdpic">
		<img src="<?php echo bloginfo( 'template_url' ).'/images/'.'ntd.jpg'?>" alt="neil" height="100" width="100" />
	</div>
	<div id="bio">
		<p>this is my bio. im an astropsyschist. be my friend</p>
	</div>
	
	<div id="subscribe">
		<p><strong>subscribe</strong></p>
		<a href="http://www.twitter.com"><p><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" />twitter biatch</p></a>
		<a href="/index.php"><p><img src="<?php echo bloginfo( 'template_url' ).'/images/'.'blogimg.png'; ?>" alt="blogpic" height="15" width="15" />my blog... oh you here already</p></a>
	</div>
	
	<?php if ( is_active_sidebar( 'widgets' ) ) : ?>
	  <div class="widgets"><?php dynamic_sidebar( 'widgets' ); ?></div>
	<?php endif; ?>
	<?php if ( is_singular() || is_404() ) : ?>
	  <div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
	<?php else : ?>
	  <div class="left"><?php next_posts_link( '&laquo; Older posts' ); ?></div>
	  <div class="right"><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
	<?php endif; ?>
</div>
