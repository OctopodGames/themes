<?php
/** _home_page.php
*
* Template Name: Home Page
*
* @author 	Ryley Ameden
* @package The Bootstrap
* @since	1.3.0	- 29.04.2012
*/

get_header(); ?>
<section id="primary" class="span12">
<?php echo do_shortcode('[SlideDeck2 id="36"]'); ?>
<?php tha_content_before(); ?>
<div id="content" role="main" class="span12">
	<?php tha_content_top();
	the_post();
	get_template_part( '/partials/content', 'page' );
	comments_template( '', true );
	
	tha_content_bottom(); ?>
</div><!-- #content -->

<?php tha_content_after(); ?>
</section><!-- #primary -->
<?php
get_footer();


/* End of file _home_page.php */
/* Location: ./wp-content/themes/octopodgames/templates/_home_page.php */
