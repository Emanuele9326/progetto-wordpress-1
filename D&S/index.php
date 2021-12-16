<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package D&S
 * @since D&S 1.0
 */

get_header();

?>




<!--carousel-intro-->

<div class="imp_carousel">
 <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
</div>

<!--CHI SIAMO-->

<div class="d-block chiSiamo-separator">

    <a name="chiSiamo" class="who-we-are_mobile mt-lg-5">
     <div class="p-lg-5"></div>
    </a>

    <div class="container py-4 ">
        <!-- post chi-siamo-->
        <?php
         $lastposts = get_posts( array(
            'posts_per_page' => 1,
            'category'=>15
            ) );
     
         if ( $lastposts ) {
         foreach ( $lastposts as $post ) :
            setup_postdata( $post ); 
        ?>
        <div id="su-post-<?php the_ID(); ?>" <?php post_class(); ?> class="su-post panel panel-default ">
            <article>
                <h3 class="su-post-title"><?php the_title(); ?></h3>
                <div class="su-post-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php wp_link_pages(); ?>
        </div>
        <?php
         endforeach; 
         wp_reset_postdata();
         };
        ?>

    </div>


    <!--Separator-->

    <div class="bottom_chisiamo container overflow-auto">

     <?php echo wp_get_attachment_image( '167', array('605', '175'), "", array("class" => "bottom_chisiamo_img" ) );  ?>

    </div>

</div>

<!--Service-->

<a name="servizi" class="mt-5">
    <div class="p-md-5"></div>
</a>

<div class="service container mt-5">

    <h3>SERVIZI</h3>

    <div class="container service_background-color">
        <div class="row service-1">
            <div class="col ">
             <?php echo do_shortcode('[su_posts template="su-posts-templates/my-template.php" id="180" posts_per_page="1" tax_term="16" tax_operator="AND" order="desc"]'); ?>
            </div>

            <div class="col ">
             <?php echo do_shortcode('[su_posts template="su-posts-templates/my-template.php" id="177" posts_per_page="1" tax_term="16" tax_operator="AND" order="desc"]'); ?>
            </div>

        </div>
        <div class="row service-1">
            <div class="col row_perOgniEsigenza">
             <?php echo do_shortcode('[su_posts template="su-posts-templates/my-template.php" id="220&" posts_per_page="1" tax_term="16" tax_operator="AND" order="desc"]'); ?>
            </div>
        </div>
    </div>

</div>

<!--Gallery-->
<a name="gallery" class="mt-5">
    <div class="p-md-5 m-4"></div>
</a>
<div class="container gallery">
 <h3>GALLERY</h3>
 <?php echo do_shortcode('[smartslider3 slider="5"]'); ?>
</div>

<!--contacts-->
<a name="contatti" class="mt-5">
 <div class="p-md-5 m-2"></div>
</a>
<div class="contatti">
    <div class="py-3">

        <div class="container">
            <div class="row">
                <div class=" col-sm  ">
                 <?php echo do_shortcode('[su_posts template="su-posts-templates/my-template.php" id="258" posts_per_page="1" tax_term="18" tax_operator="AND" order="desc"]'); ?>
                </div>
                <div class="form_contact col-sm">
                    <p class="form_header">
                        Per qualsiasi richiesta di informazioni può compilare il modulo in basso e Le
                        risponderemo il prima possibile!
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="256" title="Contact form 1"]'); ?>
                </div>
                <!--map-->
                <div id="map" class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.1382235718547!2d18.163085414714843!3d40.072328784438184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13441be01f14017b%3A0xc302ce34d17d750!2sVia%20Roma%2C%2027%2C%2073040%20Collepasso%20LE!5e0!3m2!1sit!2sit!4v1638354022154!5m2!1sit!2sit"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>