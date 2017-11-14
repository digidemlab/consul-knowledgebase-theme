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
