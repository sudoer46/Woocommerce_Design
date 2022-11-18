<?php

/**
 * Style Maven sidebar and widget area
 *  @package Style Maven
 */

?>

<?php
if (is_active_sidebar('style-maven-sidebar-1')) : ?>
    <div class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar('style-maven-sidebar-1'); ?>

    </div>
<?php endif;
