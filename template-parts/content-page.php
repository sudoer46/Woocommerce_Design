<?php

/**
 * Template part for displaying page content
 * @package Style-maven
 */

?>
<article class="col">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <?php
    /**
     * enabling comments
     * if one of the conditions are true, comments get displayed
     * requires that comments.php is in the root of the foulder
     */
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;

    ?>

</article>