<?php
/**
 * Flatbase by NiceThemes.
 *
 * The default template for this theme's footer.
 *
 * Contains footer content and the closing of the #container and #wrapper div elements.
 *
 * @package   Flatbase
 * @author    NiceThemes <hello@nicethemes.com>
 * @license   GPL-2.0+
 * @link      http://nicethemes.com/theme/flatbase
 * @copyright 2016 NiceThemes
 * @since     1.0.0
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

global $nice_options;

?>
	<?php if ( ! is_page_template( 'template-home.php' ) ) : ?>
		<!-- END #container -->
		</div>
	<?php endif; ?>

<?php
$nice_cta_text     = get_option( 'nice_cta_text' );
$nice_cta_url      = get_option( 'nice_cta_url' );
$nice_cta_url_text = get_option( 'nice_cta_url_text' );

if ( $nice_cta_text != '' || $nice_cta_url_text != '' ) : ?>

	<!-- BEGIN #call-to-action .home-cta-block -->
	<section id="call-to-action" class="home-cta-block clearfix <?php if ( $nice_cta_url_text != '' ) echo esc_attr( 'has-cta-button' ); ?>">

		<div class="col-full">
			<div class="cta-wrapper">
				<?php if ( $nice_cta_text != '' ) : ?>
					<div class="cta-text"><?php echo esc_html( $nice_cta_text ); ?></div>
				<?php endif; ?>

				<?php if ( $nice_cta_url_text != '' ) : ?>
					<span class="cta-button-wrapper">
						<a class="cta-button" href="<?php echo esc_url( $nice_cta_url ); ?>" title="<?php echo esc_attr( $nice_cta_url_text ); ?>"><?php echo esc_html( $nice_cta_url_text ); ?></a>
					</span>
				<?php endif; ?>
			</div>
		</div>

	</section>

<?php endif; ?>

	<!-- BEGIN #footer -->
	<footer id="footer">

		<?php nice_footer_widgets(); ?>

		<div id="extended-footer">
			<div class="col-full">

				<?php nice_copyright(); ?>

				<nav id="footer-navigation">
					<?php

						$defaults = array(
									'menu'            => '',
									'container'       => 'div',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => is_rtl() ? 'nav fl clearfix' : 'nav fr clearfix',
									'menu_id'         => 'footer-nav',
									'echo'            => true,
									'fallback_cb'     => '',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'depth'           => 0,
									'walker'          => '',
									'theme_location'  => 'footer-menu' );

						wp_nav_menu( $defaults );

					?>
				</nav>

			</div>

		</div>

	<!-- END #footer -->
	</footer>

<!-- END #wrapper -->
</div>

<?php wp_footer(); ?>
</body>
</html>
