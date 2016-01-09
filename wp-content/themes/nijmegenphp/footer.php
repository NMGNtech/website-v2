<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nijmegenphp
 */

?>
        <footer id="colophon" role="contentinfo" class="footer">
            <div class="container">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nijmegenphp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nijmegenphp' ), 'WordPress' ); ?></a>
            </div>
<!--            <div class="site-info">-->
<!--                <a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'nijmegenphp' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'nijmegenphp' ), 'WordPress' ); ?><!--</a>-->
<!--                <span class="sep"> | </span>-->
<!--                --><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'nijmegenphp' ), 'nijmegenphp', '<a href="http://underscores.me/" rel="designer">Jimmy Comack</a>' ); ?>
<!--            </div><!-- .site-info -->-->
        </footer><!-- #colophon -->
    </div><!-- #page -->
</div><!-- #content -->
<?php wp_footer(); ?>
</body>
</html>
