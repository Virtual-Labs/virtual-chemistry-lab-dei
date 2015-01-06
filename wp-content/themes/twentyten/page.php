<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>





<div style="background-image: url(images/content_bg.jpg); position: relative; margin: auto;
            width: 1024px; min-height: 400px;">

	<div id="contentBox" style="padding: 0px; padding-left: 50px; padding-right: 50px;">

	
		
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>

			
<br /><br />

		

<div style="clear: both;">&nbsp;</div>

		</div>

<div style="clear: both;">&nbsp;</div>	

	</div>

	<!-- end #page -->

	<div style="position: relative; margin: auto; width: 1024px; background-color: #0e8de0">
            <img src="images/footer-curve.jpg" width="1024" height="31" alt="" />
            <div class="copyright">
                <p>Virtual Chemistry Lab Copyright &copy; 2010-2011<br/>

		Dayalbagh Educational Institute, Dayalbagh, Agra
	</p>
	</div>
            <br />

		
	</div>

	<!-- end #footer -->

</body>

</html>

