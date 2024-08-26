<div class="row">
        <div class="col-12">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer_nav'
                ) );
            ?>
        </div>
    </div>
<footer>Copy right: @<?php echo date('Y') ?> <?php echo bloginfo('title') ?></footer>
</body>
</html>