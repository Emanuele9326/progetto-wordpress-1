<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package D&S
 * @since D&S 1.0
 */
 
?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <div class="section-inner">

        <div class="footer-credits">

            <p class="footer-copyright">&copy;
                <?php
					echo date_i18n(
					/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
						_x( 'Y', 'copyright date format', 'd&s' )
					);
				?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </p>
            <span>
                <p class="p.iva"><?php echo( '-- P.Iva:123456789'); ?></p>
            </span>

        </div>

        <div class="cookie">

            <span class="cookie-policy">

                <?php printf( '<a href="%s" class="your-class">' . __( 'Cookie Policy','d&s' ) . '</a>',  __( '#','d&s' ) ); ?>

            </span>

            <span class="cookie-privicy">
                <?php printf( '--<a href="%s" class="your-class">' . __( 'Privacy Policy','d&s' ) . '</a>',  __( '#','d&s' ) ); ?>
            </span>


        </div>
        <div class="powered">
            <p class="powered-by-wordpress"> <?php _e( 'Powered by Emanuele-Marra', 'd&s' ); ?></p>
        </div>


    </div>



</footer>
<?php wp_footer(); ?>

</body>

</html>