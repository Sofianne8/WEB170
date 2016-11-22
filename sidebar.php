<?php 
	$j2theme_options = get_option( 'j2theme_option' ); 
	if( $_POST['newsletter-signup'] ) wp_mail( $j2theme_options['newsletter_email'], 'newsletter signup', $_POST['newsletter-signup'] ); 
?>
			<aside class="narcolrt alignleft">
				<div class="important clearfix">
					<h3 class="osc text-shad txttranup">Subscribe </h3>
					<form id="newsletter-signup" action="#" method="post">
						<input id="newsletter-signup" name="newsletter-signup" type="text" value="email" class="alignleft italic">
						<input id="submit" name="submit" type="submit" value="submit" class="txttranup alignleft osc-cond text-shad">
					</form>
					<nav class="alignright social">
					
						</nav><!-- .social -->
				</div><!-- .important -->
				<?php dynamic_sidebar ( 'Aside' ); ?>
			</aside><!-- aside (sidebar) -->
				