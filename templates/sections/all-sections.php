<?php

if( have_rows('sections_all') ):

	while ( have_rows('sections_all') ) : the_row();

        if( get_row_layout() == 'general_section' ):
            get_template_part('templates/sections/general/section');

		endif;

	endwhile;

endif;

?>