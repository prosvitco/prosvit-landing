<?php
/**
 * Created by ProSvit.Design
 * User: Volodymyr Danylyuk
 * Date: 4/16/2017
 * Time: 8:35 PM
 */
?>

<?php

    $section_id         = get_sub_field('sections_general_section_section_id');
    $section_class      = get_sub_field('sections_general_section_section_class');

    /** BOF Section Background **/
    include( locate_template( 'templates/sections/general/styles/section-background.php' ) );
    /** EOF Section Background **/
    $owl_carousel = false;
    $testimonials = false;

    if (strpos($section_class, 'owl-carousel-section') !== false) {
        $owl_carousel = true;
    }

    if (strpos($section_class, 'testimonials-section') !== false) {

        // Need to finish this one
        $testimonials = true;
    }

?>

<section id="<?php echo sanitize_title( $section_id ); ?>" class="section <?php echo ( $section_class != '' ) ? $section_class : '' ?>" >

    <div class="container">

        <div class="<?php if ( $owl_carousel ) { echo 'owl-carousel owl-default'; } else { echo 'row'; } ?>">

        <?php if( have_rows('sections_general_section_cards') ): ?>
            <?php $counter = 0; ?>

            <?php while ( have_rows('sections_general_section_cards') ) : the_row(); ?>

                <?php
                $card_class     =  get_sub_field('card_class');
                $title          =  get_sub_field('card_title');
                $subtitle       =  get_sub_field('card_subtitle');
                $text           =  get_sub_field('card_text');

                // link
                $target     =  get_sub_field('link_-_internal_or_external');

                if ($target == 'internal') {
                    $href       =  get_sub_field('link_internal');
                } else {
                    $href       =  get_sub_field('link_external');
                }

                $counter++;
                ?>

                <div class="card card-<?php echo $counter ?> <?php echo ( $card_class != '' ) ? $card_class : '' ?>">

                    <?php if ( var_exists($href) ) { ?>
                    <a href="<?php echo $href; ?>" class="card-link">
                    <?php } ?>

                    <div class="card-block">

                        <?php include( locate_template( 'templates/sections/general/templates/graphics.php' ) ); ?>

                        <?php if ( var_exists($title) ) { ?>
                            <?php echo $title; ?>
                        <?php } ?>

                        <?php if ( var_exists($subtitle) ) { ?>
                            <?php echo $subtitle; ?>
                        <?php } ?>

                        <?php if ( var_exists($text) ) { ?>
                            <?php echo $text; ?>
                        <?php } ?>
  
                    </div>

                    <?php if ( var_exists($href) ) { ?>
                    </a>
                    <?php } ?>

                </div>

            <?php endwhile; ?>
         
        <?php endif; ?>                     

        </div>

    </div>

</section>
