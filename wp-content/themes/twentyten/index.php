<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		



<div style="background-image: url(images/content_bg.jpg); position: relative; margin: auto;
            width: 1024px; min-height: 400px;">

	<div id="contentBox" style="padding: 0px; padding-left: 50px; padding-right: 50px;">

						
<?php 
		  query_posts('page_id=5');
		  if(have_posts()) : while(have_posts()) : the_post();
		  the_content();
		  endwhile;
		  endif;
		  ?>
			
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



		