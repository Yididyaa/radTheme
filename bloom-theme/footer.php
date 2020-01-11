<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bloom-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="container-fluid text-center text-md-left"><br>
	<div id="footer-sidebar" class="row secondary">
        <div class="col-md-3" id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
        dynamic_sidebar('footer-sidebar-4');
        }
        ?>
		</div></div>
		<div class ="footer text-center py-3">

		<div class="site-info">
			<a id = "footerlink" href="<?php echo esc_url( __( 'https://wordpress.org/', 'bloom-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bloom-theme' ), 'WordPress' );
				?>
			</a>
			<a tag="" wrapped="" around="" the="" logo="" and="" add="" option="" to="" change="" link="" from="" customizer.<="" a="" data-wpel-link="internal">    
			<div id="footer-widget-area"> <?php dynamic_sidebar( 'NAME-OF-WIDGET_AREA' ); ?></div>
 
</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bloom-theme' ), 'bloom-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
