<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container">
            <div class="row">

                <div class="site-info col-12 col-sm-12 col-md-6">
<<<<<<< HEAD
                    <h3>Secretaria de Estado da Saúde de São Paulo</h3>
                    <p>Av. Dr. Enéas de Carvalho Aguiar, 188</p>
                    <p>05403-000 • São Paulo/SP • Brasil</p>
                    <p>Tel: (55 11) 3066-8000</p>
                    <p><a href="http://politicas.bireme.org/terminos/pt/index.html" target="_blank">Termos e Condições de uso</a> | <a href="http://politicas.bireme.org/privacidad/pt/index.html" target="_blank">Politicas de Privacidade</a></p>
=======
                    <?php if ( is_active_sidebar( 'footer_widget_area' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_widget_area' ); ?>
                    <?php endif; ?>
>>>>>>> 0880b740243d3ef54f8fd3e7ba69aeba5830ff74
                </div><!-- close .site-info -->

                <div class="site-certificate col-12 col-sm-12 col-md-6">
                    <?php if ( is_active_sidebar( 'certificate_widget_area' ) ) : ?>
                        <?php dynamic_sidebar( 'certificate_widget_area' ); ?>
                    <?php else: ?>
                        <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/certificado.png'; ?>" alt="Site Certificate">
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>